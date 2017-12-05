<?php

namespace Modules\Menu\Repositories;

use Modules\Base\Repositories\BaseRepository;
use Modules\Menu\Entities\Menu;

/**
 * Class - MenuRepository
 *
 * @package Modules\Menu\Repositories
 * @author Ruver Dornelas <ruverd@gmail.com>
 * @version 1.0 Created
 */
class MenuRepository extends BaseRepository
{
    /**
     * Especifica o model
     *
     * @return string
     */
    public function model()
    {
        return Menu::class;
    }

    /**
     * Boot de inicialização
     */
    public function boot()
    {

    }

    /**
     * Pega os dados do banco
     *
     * @return \Illuminate\Support\Collection
     */
    public function getMenu()
    {
        return $this->model
                    ->orderBy('order', 'asc')
                    ->get();
    }

    /**
     * Pega registros de acordo com o pai
     *
     * @param int $parent_id
     * @return \Illuminate\Support\Collection
     */
    public function getMenuByParent($parent_id = 0)
    {
        return $this->model
            ->orderBy('order', 'asc')
            ->where('parent_id', $parent_id)
            ->get();
    }

    /**
     * Pega a página pela rota
     *
     * @param $route
     * @return mixed
     */
    public function getPageByRoute($route)
    {
        $pages = $this->model
                    ->where('route', $route)
                    ->get();

        foreach ($pages as $page){
            return $page->id;
        }
        return false;
    }
}