<?php

namespace Modules\Auth\Traits;

use Illuminate\Support\Facades\Auth;
use Modules\User\Entities\User;

/**
 * Trait AuthTrait
 *
 * @package Modules\Auth\Traits
 */
trait AuthTrait
{
    /**
     * Pega objeto usuário
     *
     * @param null $idUser
     * @return \Illuminate\Contracts\Auth\Authenticatable | User
     */
    protected function getUser($idUser = null)
    {
        /** @var integer $idUser */
        return ($idUser) ? User::find($idUser) : Auth::user();
    }
}