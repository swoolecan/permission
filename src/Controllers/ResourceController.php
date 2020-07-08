<?php

declare(strict_types = 1);

namespace Swoolecan\Permission\Controllers;

class ResourceController extends AbstractController
{
}

	/*public function actionAddMenu()
	{
        $model = $this->getModel();
		$method = Yii::$app->request->get('action');
		$methods = ['checkMenu', 'checkAction', 'updateMenu'];
		if (in_array($method, $methods)) {
			$this->model->$method();
			exit();
		}
		if ($this->currentMethod == 'post') {
    		$loadData = $this->loadDatas($model);
			if ($loadData) {
			   	$result = $model->addMenu();
				if ($result['status'] == 400) {
					exit($result['message']);
				}
    			return $this->returnResult($result);
            }
		}
		$viewData = ['view' => $this->addView, 'currentView' => $this->viewPrefix, 'type' => 'add-menu'];
		return $this->returnInfoResult($model, $viewData);
    }

	public function actionCreateMap()
	{
		$this->model->createMap();
		$this->returnResult(['status' => 200, 'message' => '操作完成']);
	}

	public function getSubnavExt()
	{
		$url = $this->clientUrl;
		if (strpos($url, 'full=') === false) {
			$url .= strpos($url, '?') !== false ? '&full=1' : '?full=1';
		}
        //print_R($this->getMenuUrl('backend_base-elem_add-menu', ['action' => 'checkMenu']));exit();

		return [
			['url' => $url, 'name' => '资源详情'],
            ['url' => $this->getMenuUrl('backend_base-elem_add-menu', ['action' => 'checkMenu']), 'name' => '检查菜单'],
            //['url' => $this->getMenuUrl('backend_base-elem_add-menu', ['action' => 'checkAction']), 'name' => '检查事件'],
            ['url' => $this->getMenuUrl('backend_base-elem_add-menu', ['action' => 'updateMenu']), 'name' => '更新菜单'],
		];
    }*/
