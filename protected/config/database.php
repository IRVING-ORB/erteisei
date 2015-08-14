<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=erteisei',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	
        /*
        'connectionString' => 'oci:dbname=//192.168.0.140:1521/orcl',
        //'emulatePrepare' => true,
        'username' => 'ADMONERT',
	'password' => 'ert3is3i',
	'charset' => 'utf8',
        */
    /*
        'class' => 'yii\db\Connection',
        'dsn'=>'oci:dbname=//192.168.0.140:1521/ORCL;charset=UTF8',
        'username' => 'ADMONERT',
	'password' => 'ert3is3i',
         */
    //

);