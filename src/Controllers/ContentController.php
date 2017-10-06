<?php

public function sayHello(Twig $twig):string
{
    return $twig->render('test::content.hello');
}
namespace test\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('test::TEMPLATE');
    }
}
