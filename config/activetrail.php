<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Activetrail Api key
    |--------------------------------------------------------------------------
    */

    'api_key' => env('ACTIVETRAIL_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Extra Fields Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may define the extra fields in ActiveTrail.
    |
    */

    'fields' => [
        'locale' => 'ext1',
        'userId' => 'ext2',
        'parentId' => 'ext3',
        'frequency' => 'ext4'
    ],
];
