<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return array(
        'radiodetector/product/([0-9]+)' => 'product/view/$1',
     'radiodetector/category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
     'radiodetectorode/category/([0-9]+)' => 'catalog/category/$1',
     'radiodetector/catalog/page-([0-9]+)' => 'catalog/view/$1',
     'radiodetector/user/register' => 'user/register',
     'radiodetector/user/login' => 'user/login',

     'radiodetector/user/logout' => 'user/logout',
     'radiodetector/cart/order' => 'cart/order',

     'cart/delete/([0-9]+)' => 'cart/Delete/$1',
     'cart/addAjax/([0-9]+)' => 'cart/AddAjax/$1',
     'radiodetector/cart/add/([0-9]+)' => 'cart/add/$1',
     'radiodetector/cart' => 'cart/index',
     'radiodetector/cabinet/edit' => 'cabinet/edit',
     'radiodetector/cabinet/prepare' => 'cabinet/prepare',
     'radiodetector/cabinet' => 'cabinet/view',
     'radiodetector/contact' => 'contact/view',
     'radiodetector/catalog' => 'catalog/view',


     'radiodetector/admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
     'radiodetector/admin/product/edit/([0-9]+)/([a-z_]+)' => 'adminProduct/editDefin/$1/$2',
     'radiodetector/admin/product/edit/([0-9]+)' => 'adminProduct/edit/$1',
     'radiodetector/admin/product/add' => 'adminProduct/add',
     'radiodetector/admin/product' => 'adminProduct/view',

    '/admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    '/admin/category/edit/([0-9]+)/([a-z_]+)' => 'adminCategory/editDefin/$1/$2',
    'admin/category/edit/([0-9]+)' => 'adminCategory/edit/$1',
     'admin/category/add' => 'adminCategory/add',
     'admin/category' => 'adminCategory/view',
	'admin/product/top/([0-9]+)/([0-9]+)' => 'admin/top/$1/$2',
	'admin/product/buttom/([0-9]+)/([0-9]+)' => 'admin/buttom/$1/$2',
     'admin/product/editPhoto/([0-9]+)' => 'admin/editPhoto/$1',
     'admin/content/edit' => 'admin/contentEdit',
     'admin/product/edit/([0-9]+)' => 'admin/edit/$1',
     'admin/product/delete/([0-9]+)' => 'admin/delete/$1',

     'admin/add' => 'admin/add',
     'admin/login' => 'admin/login',
     'admin/logout' => 'admin/logout',
     'admin' => 'admin/index',

    'details/([0-9]+)' => 'detail/show/$1',



     '' => 'site/list',
     '' => 'site/list'



    );