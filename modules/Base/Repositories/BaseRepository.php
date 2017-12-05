<?php

namespace Modules\Base\Repositories;

use Prettus\Repository\Eloquent\BaseRepository as Repository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Contracts\RepositoryInterface;
use Illuminate\Database\Query\Builder;
use Carbon\Carbon;

/**
 * Class - BaseRepository
 *
 * @package Modules\Base\Repositories
 * @author Ruver Dornelas <ruverd@gmail.com>
 * @version 1.0 Created
 */
abstract class BaseRepository extends Repository implements RepositoryInterface
{
    protected $table;

    /**
     * Boot de inicialização da classe
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        $this->table = $this->getTable();
    }

    /**
     * Pega o nome do model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model();
    }

    /**
     * Pega o nome do model
     *
     * @return string
     */
    public function getObjModel()
    {
        return $this->model;
    }

    /**
     * Pega o nome da tabela
     *
     * @return string
     */
    public function getTable()
    {
        return $this->model->getTable();
    }

    /**
     * Aplica critérios da busca
     *
     * @param $request
     * @return $this
     */
    protected function applyCriteriaRequest($request)
    {
        $arrayMultiple = [];
        foreach ($this->fieldSearchable as $key => $value){
            $field = is_numeric($key) ? $value : $key;
            $condition = is_numeric($key) ? '=' : $value;
            $valRequest = $request->{$field};
            if($valRequest){
                if ($condition == 'between'){
                    if (!in_array($field, $arrayMultiple)) {
                        $this->doBetween($field,$request->{$field}.'_start',$request->{$field}.'_end');
                        $arrayMultiple[] = $field;
                    }
                } else{
                    $this->doCriteria($field, $condition, $valRequest);
                }
            }
        }
        return $this;
    }

    /**
     * Executa o criterio e realiza clausulas or para função consulta multipla (+)
     *
     * @param $field
     * @param $condition
     * @param $value
     * @return $this
     */
    protected function doCriteria($field, $condition, $value)
    {
        $arrayValues = explode('+', $value);
        $flag = true;
        $field = $this->table.".".$field;
        if (is_array($arrayValues)){
            foreach($arrayValues as $val) {
                if($val){
                    $val = ($condition == 'like') ? "%$val%" : $val;
                    if($flag){
                        $this->model = $this->model->where($field, $condition, $val);
                        $flag = false;
                    } else{
                        $this->model = $this->model->orWhere($field, $condition, $val);
                    }
                }
            }
        } else{
            if($value){
                $value = ($condition == 'like') ? "%$value%" : $value;
                $this->model = $this->model->where($field, $condition, $value);
            }
        }
        return $this;
    }

    /**
     * Where entre valores
     *
     * @param $field
     * @param $start
     * @param $end
     * @return $this
     */
    protected function doBetween($field,$start,$end)
    {
        $field = $this->table.".".$field;
        if($start && $end){
            $this->model = $this->model->whereBetween($field, [Carbon::parse($start)->format('Y-m-d 00:00:00'),Carbon::parse($end)->format('Y-m-d 23:59:59')]);
        }
        return $this;
    }
}