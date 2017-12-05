<?php

namespace Modules\Acl\Http\Controllers;

use Modules\Base\Http\Controllers\BaseController;
use Modules\Menu\Repositories\MenuRepository;
use Illuminate\Support\Facades\Auth;

/**
 * Class - AclController
 *
 * @package Modules\Acl\Http\Controllers
 * @author Ruver Dornelas <ruverd@gmail.com>
 * @version 1.0 Created
 */
class AclController extends BaseController
{
    protected $permissionOptions = [
        'create',
        'update',
        'delete',
        'show',
        'grant'
    ];
    protected $permissions = [];
    protected $repositoryMenu;
    protected $menus = [
        'user'
    ];
    protected $user;

    /**
     * MenuController constructor.
     *
     * @param MenuRepository $repositoryMenu
     */
    public function __construct(MenuRepository $repositoryMenu)
    {
        $this->user = Auth::user();
        $this->repositoryMenu  = $repositoryMenu;
    }

    /**
     * Pega todas as permissões
     *
     * @param null $idUser
     * @return array
     */
    public function getACL($idUser = null)
    {
        $this->user = $this->getUser($idUser);
        foreach ($this->repositoryMenu->findWhere([['route','!=',null]]) as $menu) {
            foreach ($this->permissionOptions as $permissionOption){
                $ability = $this->getAbility($menu->route,$permissionOption);
                $this->permissions[$ability] = $this->isAdmin() ? true : $this->user->can($ability);
            }
        }
        return $this->permissions;
    }
}
