<?php

require 'vendor/autoload.php';

$app = new \SlimController\Slim(array(
  'view' => new \Slim\Views\Twig(),
  'templates.path' => 'views',
  'controller.class_prefix' =>'',
  'controller.method_suffix' => '',
  'controller.template_suffix' => 'twig'
));

$view =  $app->view();
$view->parserOptions = array(
  'debug' => true,
  'cache' => 'views/cache'
);
$view->parserExtensions = array(new \Slim\Views\TwigExtension());

foreach (glob('controllers/*.php') as $controller) {
  require $controller;
}

$app->addRoutes(array(
  '/' => 'App:index'
));

$app->run();
