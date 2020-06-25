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
    
     
     
     'radiodetector/admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
     'radiodetector/admin/product/edit/([0-9]+)/([a-z_]+)' => 'adminProduct/editDefin/$1/$2',
     'radiodetector/admin/product/edit/([0-9]+)' => 'adminProduct/edit/$1',
     'radiodetector/admin/product/add' => 'adminProduct/add',
     'radiodetector/admin/product' => 'adminProduct/view',
     
     'radiodetector/details/([0-9]+)' => 'detail/show/$1',
    
     'radiodetector' => 'site/list',
     'radiodetector' => 'site/list'
    
     
      
    );