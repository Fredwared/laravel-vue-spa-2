<?php

namespace Modules\Organization\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Menu\Entities\Menu;

/**
 * Class Organization
 * @oldtable organi
 * @package Modules\Organization
 * @author Ruver Dornelas <ruver@imatec.com.br>
 * @Date 09/08/2016
 * @version 1.0
 */
class Organization extends Model
{
    /**
     * Campos disponiveis para insert
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Relacionamento com user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    private function users()
//    {
//        return $this->hasMany(User::class);
//    }
}
