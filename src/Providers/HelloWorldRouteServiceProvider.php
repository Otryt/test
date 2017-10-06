<?php
public function map(Router $router)
{
    $router->get('hello','test\Controllers\ContentController@sayHello');
}
namespace test\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {

    }
}
