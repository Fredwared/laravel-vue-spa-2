<?php

namespace Modules\Organization\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Base\Http\Controllers\BaseController;
use Modules\Menu\Repositories\OrganizationRepository;

class OrganizationController extends BaseController
{
    protected $repository;

    /**
     * OrganizationController constructor.
     *
     * @param OrganizationRepository $repository
     */
    public function __construct(OrganizationRepository $repository)
    {
        $this->repository  = $repository;
    }

    /**
     * Mostra dados da busca
     *
     * @param Request $request
     * @return \Illuminate\Support\Collection
     */
    public function getData(Request $request)
    {
        return $this->repository->getData($request);
    }
}
