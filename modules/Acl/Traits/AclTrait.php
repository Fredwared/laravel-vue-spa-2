<?php

namespace Modules\Acl\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

/**
 * Trait AclTrait
 *
 * @package Modules\Acl\Traits
 */
trait AclTrait
{
    /**
     * Verifica ACL
     *
     * @param $route string
     * @return bool
     */
    protected function checkAcl($route)
    {
        return ($route) ? true : false; //$this->user->can($this->getAbility($route))
    }

    /**
     * Gera nome da habilidade
     *
     * @param $route string
     * @param $action string
     * @return string
     */
    protected function getAbility($route,$action = 'show')
    {
        return "{$route}_{$action}";
    }

    /**
     * Verifica é administrador
     *
     * @return boolean
     */
    protected function isAdmin()
    {
        return $this->user->isAn('admin');
    }
}