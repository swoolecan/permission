<?php

declare(strict_types = 1);

namespace App\Controller\Passport;

class ManagerBackendController extends AbstractController
{
    /*public function _addData()
    {
        return ['scenario' => 'create'];
    }

    protected function _getScenario()
    {
        return 'update';
    }

    public function actionEditInfo()
    {
        $model = $this->model->getInfo(Yii::$app->user->identity->id);
        $model->setScenario('edit-info');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'new infos was saved.'));
            }
            return $this->redirect('/');
        }

        return $this->render('@views/backend/common/change', [
            'model' => $model,
            'currentView' => $this->viewPrefix,
            'type' => 'edit-info',
        ]);
    }

    public function actionEditPassword()
    {
        $model = $this->model->getInfo(Yii::$app->user->identity->id);
        $model->setScenario('edit-password');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //$model->setPassword($model->password, 'password');
            $model->generateAuthKey();
            $model->status = 1;
            if ($model->save()) {
			    Yii::$app->user->logout();
			    $this->returnResult(['status' => 200, 'message' => '密码修改成功，请重新登录']);
            }
        }

        return $this->render('@views/backend/common/change', [
            'model' => $model,
            'currentView' => $this->viewPrefix,
            'type' => 'edit-password',
        ]);
    }*/
}
