<?php

/**
 * The application configuration file, used to setup globally used values throughout the application
 */
return array(

    /**
     * The name of the application, will be used in the main management areas of the application
     */
    'name' => 'Your Fantastic CMS',

    /**
     * The email address associated with support enquires on a technical basis
     */
    'support_email' => 'example@example.com',

    /**
     * The base path to put uploads into
     */
    'upload_base_path'=>'uploads/',

    /**
     * The URL key to access the main admin area
     */
    'access_url'=>'admin',

    /**
     * The menu items shown at the top and side of the application
     */
    'menu_items'=>array(
        'posts'=>array(
            'name'=>'Добавить товар',
            'icon'=>'list',
            'top'=>true
        ),
        'blocks'=>array(
            'name'=>'Добавить категорию',
            'icon'=>'th-large',
            'top'=>true
        ),
        'galleries'=>array(
            'name'=>'Галерея',
            'icon'=>'picture',
            'top'=>true
        ),
        'users'=>array(
            'name'=>'Пользователи',
            'icon'=>'user',
            'top'=>true
        ),
        'settings'=>array(
            'name'=>'Настройки',
            'icon'=>'cog',
            'top'=>true
        )
    )
);
