Crea un archivo config.php en la raiz del proyecto con la siguiente configuracion:

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$nameDB = 'demo';

return [
    'dataBase' => [
        'host' => $server,
        'dbname' => $nameDB,
        'charset' => 'utf8'
    ],

    'credentials' => [
        'userName' => $user,
        'password' => $password
    ]
];

Cambia los parametros para tu servidor, base de datos, usuario y contraseña. 