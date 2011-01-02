<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*', // giix components
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
			'gii' => array(
				'class' => 'system.gii.GiiModule',
				'generatorPaths' => array(
					'ext.giix-core', // giix generators
					
				),
				'password'=>'motdepasse',
			),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=pcp',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'motdepasse',
			'charset' => 'utf8',
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
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
                'FilmsGenres'=>array(
                                '1'=>'Action',
                                '2'=>'Animation',
                                '3'=>'Arts Martiaux',
                                '4'=>'Aventure',
                                '5'=>'Biopic',
                                '6'=>'Bollywood',
                                '7'=>'Comédie',
                                '8'=>'Comédie dramatique',
                                '9'=>'Comédie musicale',
                                '10'=>'Dessin animé',
                                '11'=>'Divers',
                                '12'=>'Documentaire',
                                '13'=>'Drame',
                                '14'=>'Epouvante-horreur',
                                '15'=>'Erotique',
                                '16'=>'Espionnage',
                                '17'=>'Famille',
                                '18'=>'Fantastique',
                                '19'=>'Guerre',
                                '20'=>'Historique',
                                '21'=>'Judiciaire',
                                '22'=>'Musical',
                                '23'=>'Péplum',
                                '24'=>'Policier',
                                '25'=>'Romance',
                                '26'=>'Science fiction',
                                '27'=>'Thriller',
                                '28'=>'Western',
                                '29'=>'Autre'
                    ),
	),
);
