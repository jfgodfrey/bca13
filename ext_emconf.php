<?php

/**
 * Extension Manager/Repository config file for ext "ddev_bca".
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'bca13',
    'description' => 'Production site for spirit.org',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'BelgradeChristianAssembly\\Bca13\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'John F. Godfrey',
    'author_email' => 'jfgodfrey@gmail.com',
    'author_company' => 'Belgrade Christian Assembly',
    'version' => '1.0.0',
];
