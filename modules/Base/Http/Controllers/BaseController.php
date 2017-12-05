<?php

namespace Modules\Base\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as LaravelBaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Modules\Acl\Traits\AclTrait;
use Modules\Auth\Traits\AuthTrait;

/**
 * Class - BaseController
 *
 * @package Modules\Base\Http\Controllers
 * @author Ruver Dornelas <ruverd@gmail.com>
 * @version 1.0 Created
 */
class BaseController extends LaravelBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AclTrait, AuthTrait;
}