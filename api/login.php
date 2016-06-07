<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array (
            'driver'    => 'pdo_mysql',
            'host'      => '192.168.62.36',
            'port'      => '3306',
            'dbname'    => 'sistemas',
            'user'      => 'sistemas',
            'password'  => 'Stevejobs@1',
        ),
));

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->post('/login', function (Request $request) use ($app) {
	$user     = $request->get('user');
	$password = $request->get('password');
	$sql = "select * from usuarios  where empID = ? and password = ? ";
	
    $post = $app['db']->fetchAll($sql , array ($user , $password) );
    
    return  json_encode($post);
});

$app->get('/reset/{users}', function ($users) use ($app) {
	$sql = "select * from usuarios";
    $post = $app['db']->fetchAll($sql);
    
    return  json_encode($post);
});

$app->run();

?>
