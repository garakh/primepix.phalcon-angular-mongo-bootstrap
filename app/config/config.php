<?php

return new \Phalcon\Config(array(
    'mongo' => array(
        'connectionString' => 'mongodb://localhost:27017',
        'dbname'   => 'trackLab',
        'useCreds' => false,
        'username' => '',
        'password' => ''
    ),
	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'pluginsDir'     => __DIR__ . '/../../app/plugins/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		'cacheDir'       => __DIR__ . '/../../app/cache/',
		'baseUri'        => '/trackLab/',
	)
));
