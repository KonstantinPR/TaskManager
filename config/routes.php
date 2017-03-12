<?php
return array(
    'indexall' => 'index/indexall',
    'auth' => 'auth/auth',
    'insert' => 'report/insert',
    'change/([0-9]+)' => 'report/get/$1',
    'report/([0-9]+)' => 'report/update/$1',
    'done/([0-9]+)' => 'report/done/$1',
    'restore/([0-9]+)' => 'report/restore/$1/$2',
    'delete/([0-9]+)' => 'report/delete/$1',
    'update/([0-9]+)' => 'report/update/$1',
    'up/([0-9]+)' => 'report/up/$1',
    'down/([0-9]+)' => 'report/down/$1',
    'index/([0-9]+)' => 'index/view/$1',
    'index' => 'index/index',

);


