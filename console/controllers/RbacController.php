<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\models\User;

class RbacController extends Controller {

    public function actionInit() {
        $auth = Yii::$app->authManager;
        try {
            // create roles
            $admin = $auth->createRole('admin');
            $moderator = $auth->createRole('moderator');
            $author = $auth->createRole('author');
            $guest = $auth->createRole('guest');
            // create permissions
            $postIndex = $auth->createPermission('post index');
            $postCreate = $auth->createPermission('post create');
            $postView = $auth->createPermission('post view');
            $postUpdate = $auth->createPermission('post update');
            $postDelete = $auth->createPermission('post delete');
            $categoryIndex = $auth->createPermission('category index');
            $categoryCreate = $auth->createPermission('category create');
            $categoryView = $auth->createPermission('category view');
            $categoryUpdate = $auth->createPermission('category update');
            $categoryDelete = $auth->createPermission('category delete');
            // add permissions
            $auth->add($postIndex);
            $auth->add($postCreate);
            $auth->add($postView);
            $auth->add($postUpdate);
            $auth->add($postDelete);
            $auth->add($categoryIndex);
            $auth->add($categoryCreate);
            $auth->add($categoryView);
            $auth->add($categoryUpdate);
            $auth->add($categoryDelete);
            // add roles
            $auth->add($admin);
            $auth->add($moderator);
            $auth->add($author);
            $auth->add($guest);
            // give the permissions to author
            $auth->addChild($guest, $postIndex);
            $auth->addChild($guest, $postView);
            $auth->addChild($guest, $categoryIndex);
            $auth->addChild($guest, $categoryView);
            // give the permissions to author
            $auth->addChild($author, $guest);
            $auth->addChild($author, $postCreate);
            // give the permissions to moderator
            $auth->addChild($moderator, $author);
            $auth->addChild($moderator, $postUpdate);
            $auth->addChild($moderator, $postDelete);
            $auth->addChild($moderator, $categoryCreate);
            $auth->addChild($moderator, $categoryUpdate);
            // give permissions to admin
            $auth->addChild($admin, $moderator);
            $auth->addChild($admin, $categoryDelete);
        } catch (yii\console\Exception $e) {
            throw new $e;
        }

    }

    public function actionAssign() {
        $authManager = Yii::$app->authManager;

        try {
            $author = $authManager->getRole('author');
            $moderator = $authManager->getRole('moderator');
            $admin = $authManager->getRole('admin');

            $userAdmin = User::findByUsername('admin');
            $userModerator = User::findByUsername('moderator');
            $userAuthor = User::findByUsername('author');

            $authManager->assign($admin, $userAdmin->id);
            $authManager->assign($moderator, $userModerator->id);
            $authManager->assign($author, $userAuthor->id);
        } catch (yii\console\Exception $ex) {
            throw new $ex;
        }
    }

}
