<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Organization\Entities\Organization;

/**
 * Class Menu
 * @oldtable menu
 * @package Modules\Menu
 * @author Ruver Dornelas <reginaldo@imatec.com.br>
 * @Date 27/07/2016
 * @version 1.1
 */
class Menu extends Model
{
    /**
     * Campos permitidos na inserção
     *
     * @var array
     */
    protected $fillable = [
        'parent_id', 'name', 'route', 'order'
    ];

    /**
     * Relacionamento com menu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * Relacionamento com menus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parents()
    {
        return $this->hasMany(Menu::class, 'id', 'parent_id');
    }
}