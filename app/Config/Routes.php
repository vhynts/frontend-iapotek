<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'AuthController::index');

$routes->get('/dashboard', 'HomeController::index');

$routes->get('/point-of-sale', 'PosController::index');

$routes->get('/item', 'MasterController::item_list');
$routes->get('/item-add', 'MasterController::item_add');

$routes->get('/item-unit', 'MasterController::item_unit');
$routes->get('/item-cat', 'MasterController::item_cat');
$routes->get('/dept', 'MasterController::dept');


$routes->get('/customer', 'MasterController::customer_list');
$routes->get('/customer-add', 'MasterController::customer_add');
$routes->get('/customer-group', 'MasterController::customer_group_list');

$routes->get('/supplier', 'MasterController::supplier_list');
$routes->get('/supplier-add', 'MasterController::supplier_add');

$routes->get('/purchase-list', 'PurchaseController::purchase_list');
$routes->get('/purchase-invoice', 'PurchaseController::purchase_invoice');

$routes->get('/purchase-return', 'PurchaseController::return_list');
$routes->get('purchase-return/create', 'PurchaseController::purchase_return_create');


$routes->get('/sales-list', 'SaleController::sales_list');
$routes->get('/sales-invoice', 'SaleController::sales_invoice');
$routes->get('/sales-detail', 'SaleController::sales_detail');
$routes->get('/print-si', 'SaleController::print_si');
$routes->get('/print-receipt', 'SaleController::print_receipt');
$routes->get('/sales-order', 'SaleController::sales_order');
$routes->get('/sales-return', 'SaleController::sales_return');
