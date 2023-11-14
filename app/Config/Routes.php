<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'AuthController::index');

$routes->get('/dashboard', 'HomeController::index');

$routes->get('/point-of-sale', 'PosController::index');

$routes->get('/item', 'MasterController::index');

$routes->get('/purchase-list', 'PurchaseController::purchase_list');
$routes->get('/purchase-invoice', 'PurchaseController::purchase_invoice');

$routes->get('/sales-list', 'SaleController::sales_list');
$routes->get('/sales-invoice', 'SaleController::sales_invoice');
$routes->get('/sales-order', 'SaleController::sales_order');
$routes->get('/sales-return', 'SaleController::sales_return');
