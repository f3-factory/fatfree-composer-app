<?php 
// composer autoloader for required packages and dependencies
require_once('lib/autoload.php');

/** @var \Base $f3 */
$f3 = \Base::instance();
// F3 autoloader for application business code
$f3->set('AUTOLOAD', 'app/');

// $f3->route('GET /','Controller\Foo->bar');
$f3->config('routes.ini');

$f3->run();