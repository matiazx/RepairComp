<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        // add "createPost" permission
        $createAvaria = $auth->createPermission('createAvaria');
        $createAvaria->description = 'Create avaria';
        $auth->add($createAvaria);

        // add "updatePost" permission
        $updateAvaria = $auth->createPermission('updateAvaria');
        $updateAvaria->description = 'Update avaria';
        $auth->add($updateAvaria);

        $createDispositivo = $auth->createPermission('createDispositivo');
        $createDispositivo->description = 'Create dispositivo';
        $auth->add($createDispositivo);

        $updateDispositivo = $auth->createPermission('updateDispositivo');
        $updateDispositivo->description = 'Update dispositivo';
        $auth->add($updateDispositivo);

        // add "author" role and give this role the "createPost" permission
        $cliente = $auth->createRole('cliente');
        $auth->add($cliente);
        $auth->addChild($cliente, $createAvaria);
        $auth->addChild($cliente, $updateAvaria);

        $tecnico = $auth->createRole('tecnico');
        $auth->add($tecnico);






        // criar role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $gestor = $auth->createRole('gestor');
        $auth->add($gestor);



        // add "createUser" permission
        $createUser = $auth->createPermission('createUser');
        $createUser->description = 'Criar utilizador';
        $auth->add($createUser);

        // add "updateUser" permission
        $updateUser = $auth->createPermission('updateUser');
        $updateUser->description = 'Update post';
        $auth->add($updateUser);


        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role

        $auth->addChild($admin, $updateUser);
        $auth->addChild($admin, $createUser);

        $auth->addChild($admin, $gestor);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($gestor, 2);
        $auth->assign($admin, 1);
    }
}