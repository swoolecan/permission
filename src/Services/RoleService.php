<?php
declare(strict_types = 1);

namespace App\Service\Passport;

use Swoolecan\Baseapp\Contracts\Repositories\RepositoryInterface;
use Swoolecan\Baseapp\Services\AbstractService;
//use Illuminate\Http\Request;

class RoleService extends AbstractService
{
    protected $repository;

    public function getTreeInfos($params)
    {
        $infos = $this->repository->all();//$params);
        //print_r($infos);
        return $infos;
    }
}
