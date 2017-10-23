<?php
/**
 * Created by PhpStorm.
 * User: ���
 * Date: 10.08.2016
 * Time: 14:13
 */

namespace app\commands;

use Yii;
use yii\console\Controller;

/**
 * RBAC generator
 */
class RbacController extends Controller
{
    /**
     * Generates roles
     */
    public function actionInit()
    {
        $auth = Yii::$app->getAuthManager();
        $auth->removeAll();

        $adminPanel = $auth->createPermission('adminPanel');
        $adminPanel->description = '������ ��������������';
        $auth->add($adminPanel);

        $user = $auth->createRole('user');
        $user->description = '������������';
        $auth->add($user);

        $admin = $auth->createRole('admin');
        $admin->description = '�������������';
        $auth->add($admin);

        $auth->addChild($admin, $user);
        $auth->addChild($admin, $adminPanel);

        $this->stdout('Done!' . PHP_EOL);
    }
}