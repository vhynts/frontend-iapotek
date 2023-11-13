<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/point-of-sale', 'Pos::index');

$routes->get('/item', 'Master::item');

$routes->get('/purchase-list', 'Purchase::purchase_list');
$routes->get('/purchase-invoice', 'Purchase::purchase_invoice');

$routes->get('/sales-list', 'Sale::sales_list');
$routes->get('/sales-invoice', 'Sale::sales_invoice');
$routes->get('/sales-order', 'Sale::sales_order');
$routes->get('/sales-return', 'Sale::sales_return');
