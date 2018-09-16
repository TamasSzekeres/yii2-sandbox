<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'language' => 'en-US',
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'db' => 'db',
                    'sourceLanguage' => 'en-US', // Fejlesztés nyelve
                    'sourceMessageTable' => '{{%language_source}}',
                    'messageTable' => '{{%language_translate}}',
                   // 'cachingDuration' => 86400,
                   // 'enableCaching' => true,
                ],
            ],
        ],
    ],
    'modules' => [
        'translatemanager' => [
            'class' => lajax\translatemanager\Module::class,
        ],
        'person' => common\modules\person\Module::class,
        'tries' => common\modules\tries\Module::class,
    ],
];
