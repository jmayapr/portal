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

$app->post('/reports', function (Request $request) use ($app){
	
	$reportRequestedBy = $request->get('reportRequestedBy');
	$reportDepartamento  = $request->get('reportDepartamento');
	
	$reportPurpose = $request->get('reportPurpose');
	$reportRange = $request->get('reportRange');
	$reportDetail = $request->get('reportDetail');
	$reportReq = $request->get('reportReq');
	$now = date('Y-m-d H:i:s');
	$dateRequested = $now;

	$app['db']->insert('requestreport' , array('requestedBy'=>$reportRequestedBy , 'reportDepartment'=>$reportDepartamento ,'dateRequested'=>$dateRequested , 'reportPurpose'=>$reportPurpose , 'reportEval'=>$reportRange , 'reportDetail'=>$reportDetail , 'reportReq'=>$reportReq ));

    return new Response ('Thank you ' , 201);
});

$app->post('/equipment', function (Request $request) use ($app){
	
	$equipmentType = $request->get('equipmentType');
	$equipmentDate  = $request->get('equipmentDate');
	$equipmentTime  = $request->get('equipmentTime');

	
	$now = date('Y-m-d H:i:s');
	$currDate = $now;

	$app['db']->insert('equipmentrequest' , array('equipmentDate'=>$equipmentDate , 'equipmentTime'=>$equipmentTime ,'equipmentType'=>$equipmentType ));

    return new Response ('Thank you ' , 201);
});

$app->post('/access', function (Request $request) use ($app){
	
	$accessType = $request->get('accessType');
	/*
	$accessEmpName  = $request->get('accessEmpName');
	$accessDep  = $request->get('accessDep');
	$accessEmpID  = $request->get('accessEmpID');
	$accessLicence  = $request->get('accessLicence');
	$accessClone  = $request->get('accessClone');
	
	$now = date('Y-m-d H:i:s');
	$currDate = $now;
	*/
	$app['db']->insert('equipmentrequest' , array('accessType'=>$accessType));
	
    return new Response ('Thank you ' , 201);
});

$app->run();

?>
