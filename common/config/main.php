<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\DbCache',
        // default name of table is cache simply need to create cache table 
        // http://www.yiiframework.com/doc-2.0/yii-caching-dbcache.html#$cacheTable-detail    
        // 'db' => 'mydb',            
        //'cacheTable' => 'cache',           
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'auth_item',
            'itemChildTable' => 'auth_item_child',
            'assignmentTable' => 'auth_assignment',
            'ruleTable' => 'auth_rule',
            'defaultRoles' => ['guest'],
        ],
        'session' => [
        // default name of table is session simply need to create session table 
        // http://www.yiiframework.com/doc-2.0/yii-web-dbsession.html#$sessionTable-detail            
            'class' => 'yii\web\DbSession',
        // 'db' => 'mydb',
        //'sessionTable' => 'session',
        ]
    ],
];
