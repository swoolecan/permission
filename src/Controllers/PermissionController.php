<?php

declare(strict_types = 1);

namespace App\Controller\Passport;

use App\Controller\AbstractController;

class PermissionController extends AbstractController
{
    /*public function store(Request\PermissionRequest $request)
    {
        $data = $request->all();
        $result = Model\Permission::create($data);
        return $result;
    }

    public function show($id)
    {
        $result = Model\Permission::find($id);
        if (!$result) {
            throw new BusinessException('404');
        }
        $result->roles;
        return $result;
    }

    public function update(Request\PermissionRequest $request, $id)
    {
        $data = $request->all();
        $result = Model\Permission::find($id);
        if (!$result) {
            throw new BusinessException(404);
        }
        $result->update($data);
        return $result;
    }

    public function destroy($id)
    {
        $result = Model\Permission::find($id);
        if (!$result) {
            throw new BusinessException(404);
        }
        return $result->delete();
    }*/


	/*public $currentSort = 'backend';

    public function behaviors()
    {
        return [];
    }

    public function actionSettingSort()
    {
		$this->currentSort = 'all';
		$this->searchModel = $this->getModel();
		$operation = Yii::$app->request->get('operation');
		if ($operation) {
			$sort = Yii::$app->request->get('sort');
			$ids = Yii::$app->request->get('selections');
			if (!empty($sort) && !empty($ids)) {
				$this->searchModel->settingSort($sort, $ids);
				$this->returnResult(['status' => 200, 'message' => '菜单类别设置成功']);
			}
		}
		
		$this->searchModel['listOperations'] = [
			'put-backend' => [
				'name' => '商家菜单',
				'confirm' => '针对选中的菜单设置为商家专用？',
				'mCode' => 'backend_menu_setting-sort',
				'method' => 'get',
				'query' => 'operation=1&sort=merchant',
			],
			'put-merchant' => [
				'name' => '后台菜单',
				'confirm' => '针对选中的菜单设置为商家专用？',
				'mCode' => 'backend_menu_setting-sort',
				'method' => 'get',
				'query' => 'operation=1&sort=backend',
			],
			'put-merback' => [
				'name' => '通用菜单',
				'confirm' => '针对选中的菜单设置为通用？',
				'mCode' => 'backend_menu_setting-sort',
				'method' => 'get',
				'query' => 'operation=1&sort=merback',
			],
		];
        return $this->_listinfoTree($this->searchModel);
    }

	public function actionCheckSingle()
	{
		$sort = $this->getInputParams('sort');
		$update = $this->getInputParams('update');
		if (!empty($sort)) {
		    return $this->model->checkSort($update);
		}
		$infos = $this->model->getInfos(['indexBy' => 'code']);
		$datas = $infos;
		$ponds = [''];
		for ($i = 1; $i <= 3; $i++) {
    		foreach ($datas as $key => $data) {
    			if (in_array($data['parent_code'], $ponds)) {
    				$ponds[] = $key;
    				unset($datas[$key]);
    			}
    		}
		}
		foreach ($datas as $key => $data) {
			echo $key . '--' . $data['name'] . '--' . $data['parent_code'] . "<br />";
		}
		exit();
	}

	public function getSubnavExt()
	{
		return [
			['url' => $this->getMenuUrl('setting-sort'), 'name' => '菜单设置'],
			['url' => $this->getMenuUrl('check-single'), 'name' => '菜单检查'],
			['url' => $this->getMenuUrl('check-single') . '?sort=1', 'name' => '菜单类型检查'],
		];
    }*/
}
