<?php
$db_params = [
    'hostname'  => '',
    'username'  => '',
    'password'  => '',
    'database'  => '',
];
return [
    'db' => [
        'dsn'       => 'mysql:dbname='.$db_params['database'].';host='.$db_params['hostname'],
        'database'  => $db_params['database'],
        'username'  => $db_params['username'],
        'password'  => $db_params['password'],
        'hostname'  => $db_params['hostname'],
    ],
];
