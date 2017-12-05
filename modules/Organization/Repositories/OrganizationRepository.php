<?php

namespace Modules\Menu\Repositories;

use Modules\Base\Repositories\BaseRepository;
use Modules\Organization\Entities\Organization;

/**
 * Class - OrganizationRepository
 *
 * @package Modules\Organization\Repositories
 * @author Ruver Dornelas <ruverd@gmail.com>
 * @version 1.0 Created
 */
class OrganizationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name' => 'like'
    ];

    /**
     * Especifica o model
     *
     * @return string
     */
    public function model()
    {
        return Organization::class;
    }

    /**
     * Pega os dados do filtro
     *
     * @param $request
     * @return \Illuminate\Support\Collection
     */
    public function getData($request)
    {
        $this->applyCriteriaRequest($request);
        return $this->model
                    ->get();
    }
}