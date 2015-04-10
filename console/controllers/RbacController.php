<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // add "createPost" permission
        $createPost = $auth->createPermission('createUser');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        // add "createPost" permission
        $createPost = $auth->createPermission('viewUser');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        // add "createPost" permission
        $createPost = $auth->createPermission('createUser');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        // add "createPost" permission
        $createPost = $auth->createPermission('deleteUser');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        // add "updatePost" permission
        $updatePost = $auth->createPermission('editUser');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);

        // add "updatePost" permission
        $editUserSelf = $auth->createPermission('editUserSelf');
        $editUserSelf->description = 'Edit User Self';
        $auth->add($editUserSelf);

        // add "author" role and give this role the "createPost" permission
        $author = $auth->createRole('user');
        $auth->add($author);
        $auth->addChild($author, $editUserSelf);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updatePost);
        $auth->addChild($admin, $author);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($author, 2);
        $auth->assign($admin, 1);
    }
}

