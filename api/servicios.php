<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array (
            'driver'    => 'pdo_mysql',
            'host'      => '192.168.70.2',
            'port'      => '3306',
            'dbname'    => 'pos',
            'user'      => 'cafe',
            'password'  => 'maiz',
        ),
));

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->post('/getCafeteria', function (Request $request) use ($app) {
	$user     = $request->get('empid');
	
	$sql = "select descripcion , precio , fecha , qty , id from productos, orden where orden.proid = productos.sku and fecha between (select desde from  chronos) and   (select hasta from chronos) and orden.empid = ? order by fecha ";
	
    $post = $app['db']->fetchAll($sql , array ((int) $user) );
    
    return  new response (json_encode($post) , 201);
});

$app->post('/getCafeteriaTotal', function (Request $request) use ($app) {
    $user     = $request->get('empid');
    
    $sql = "select concat('$' , format (sum(precio*qty) , 2))  as foo from productos, orden where orden.proid = productos.sku and fecha between (select desde from  chronos) and   (select hasta from chronos) and orden.empid = ? order by fecha ";
    
    $post = $app['db']->fetchAll($sql , array ((int) $user) );

    if($post[0]['foo'] != null)
        return new response (json_encode($post) , 201);
    else
        return new response (json_encode($post) , 404);
    

});

$app->run();

?>
