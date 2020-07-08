<?php
declare(strict_types = 1);

namespace Swoolecan\Permission\Services;

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
