<?php
    // This is the main Web application configuration. Any writable
    // CWebApplication properties can be configured here.
    Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

    return array(
            'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
            'name'=>"Davids Real Estate",




     // preloading 'log' component
            'preload'=>array('log'),

            // autoloading model and component classes
            'import'=>array(
                    'application.models.*',
                    'application.components.*',
            ),
     'theme'=>'bootstrap', // requires you to copy the theme under your themes directory

            'modules'=>array(
                    // uncomment the following to enable the Gii tool

                    'gii'=>array(
    'generatorPaths'=>array(
                    'bootstrap.gii',
                ),
                            'class'=>'system.gii.GiiModule',
                            'password'=>'teamgreen',
                            // If removed, Gii defaults to localhost only. Edit carefully to taste.
                            'ipFilters'=>array('127.0.0.1','::1', '10.0.0.1' ),
                    ),

            ),

            // application components
            'components'=>array(
		'user'=>array(
                            // enable cookie-based authentication
                            'allowAutoLogin'=>true,
			    'class' => 'WebUser'
                    ),
    'bootstrap'=>array(
                'class'=>'bootstrap.components.Bootstrap',
            ),
                    // uncomment the following to enable URLs in path-format

                    'urlManager'=>array(
                            'urlFormat'=>'path',
                            'rules'=>array(
                                    '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                                    '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                                    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                            ),
                    ),

				    //Establishing connection for sqlite db.
                   'db'=>array(
            'connectionString'=>'sqlite:protected/data/davidDB.db',
            'tablePrefix'=>'tbl_',
        ),


                    // uncomment the following to use a MySQL database
                    /*
                    'db'=>array(
                            'connectionString' => 'mysql:host=localhost;dbname=test.db',
                            'emulatePrepare' => true,
                            'username' => 'root',
                            'password' => '',
                            'charset' => 'utf8',
                    		'tablePrefix' => 'tbl_',
                    ), */

                    'log'=>array(
                    'class'=>'CLogRouter',
                    'routes'=>array(
            array(
                'class'=>'CFileLogRoute',
                'levels'=>'error, warning',
            ),
            array (
                'class' => 'CWebLogRoute'
            )
        ),
    ),

                    'errorHandler'=>array(
                            // use 'site/error' action to display errors
                            'errorAction'=>'site/error',
                    ),
                    'log'=>array(
                            'class'=>'CLogRouter',
                            'routes'=>array(
                                    array(
                                            'class'=>'CFileLogRoute',
                                            'levels'=>'error, warning',
                                    ),
                                    // uncomment the following to show log messages on web pages
                                    /*
                                    array(
                                            'class'=>'CWebLogRoute',
                                    ),
                                    */
                            ),
                    ),
            ),

            // application-level parameters that can be accessed
            // using Yii::app()->params['paramName']
            'params'=>require(dirname(__FILE__).'/params.php'),


    );


    // Define a path alias for the Bootstrap extension as it's used internally.
    // In this example we assume that you unzipped the extension under protected/extensions.
    return array('components'=>array(  'themeManager' => array('basePath' => __DIR__ . '/../extensions/bootstrap')  ));
    ?>

