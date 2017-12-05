<?php

namespace Modules\Menu\Http\Controllers;

use Modules\Base\Http\Controllers\BaseController;
use Modules\Menu\Repositories\MenuRepository;

/**
 * Class - MenuController
 *
 * @package Modules\Menu\Http\Controllers
 * @author Ruver Dornelas <ruverd@gmail.com>
 * @version 1.0 Created
 */
class MenuController extends BaseController
{
    protected $menus = [];
    protected $columns = [
        'id',
        'name',
        'title',
        'route',
        'icon',
        'order'
    ];
    protected $repository;
    protected $user;

    /**
     * MenuController constructor.
     *
     * @param MenuRepository $repository
     */
    public function __construct(MenuRepository $repository)
    {
        $this->repository  = $repository;
    }

    /**
     * Pega todos os menus de acordo com a permissão do usuário
     *
     * @param null $idUser
     * @return array
     */
    public function getMenu($idUser = null)
    {
        $this->user = $this->getUser($idUser);
        return $this->mountMenu();
    }

    /**
     * Monta o array de menus
     *
     * @param int $parent_id
     * @return array
     */
    public function mountMenu($parent_id = 0)
    {
        foreach ($this->repository->getMenuByParent($parent_id) as $menu){
            if ($this->checkAcl($menu->route)){
                if($parent_id){
                    $this->menus[$parent_id]['children'][$menu->id] = $this->extractData($menu);
                } else {
                    $this->menus[$menu->id] = $this->extractData($menu);
                }
                $this->mountMenu($menu->id);
            }
        }
        return $this->menus;
    }

    /**
     * Extrai os dados e passa para o array
     * @param $menu
     * @return mixed
     */
    public function extractData($menu)
    {
        foreach ($this->columns as $column) {
            $data[$column] = $menu->{$column};
        }
        return $data;
    }
}
