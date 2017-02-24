<?php

namespace console\controllers;

use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth= \Yii::$app->authManager;
        $auth->removeAll();

        $admin = $auth->createRole('admin');
        $editor = $auth->createRole('editor');
        $user = $auth->createRole('user');
        $guest = $auth->createRole('guest');

        $auth->add($admin);
        $auth->add($editor);
        $auth->add($user);
        $auth->add($guest);

        $authorRule = new \common\rbac\AuthorRule;
        $auth->add($authorRule);

        $createPost = $auth->createPermission('createPost');
        $createPost->description = ('Create post');

        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = ('Update post');

        $readPost = $auth->createPermission('readPost');
        $readPost->description = ('Read all posts');

        $deletePost = $auth->createPermission('deletePost');
        $deletePost->description = ('Delete post');

        $viewAdminPage = $auth->createPermission('viewAdminPage');
        $viewAdminPage->description = ('Перегляд адмінки ');

        $updateOwnPost = $auth->createPermission('updateOwnPost');
        $updateOwnPost->description = ('Редагувати власного посту');

        $updateOwnPost->ruleName = $authorRule->name;

        $auth->add($createPost);
        $auth->add($updatePost);
        $auth->add($readPost);
        $auth->add($deletePost);
        $auth->add($viewAdminPage);
        $auth->add($updateOwnPost);

        $auth->addChild($guest,$readPost);

        $auth->addChild($user, $guest);
        $auth->addChild($user, $createPost);
        $auth->addChild($user,$updatePost);
        $auth->addChild($user,$deletePost);
        $auth->addChild($user, $updateOwnPost);

        $auth->addChild($editor,$user);
        $auth->addChild($updatePost, $updateOwnPost);

        $auth->addChild($admin,$editor);
        $auth->addChild($admin, $viewAdminPage);


        $auth->assign($admin,1);
        $auth->assign($editor,2);
        $auth->assign($user,3);
        $auth->assign($guest,4);
    }
}