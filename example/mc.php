<?php
require __DIR__.'/../vendor/autoload.php';

use Fiber\Helper as f;

f\once(function () {
    $db = new \Fiber\Memcache\Connection('127.0.0.1');
    var_dump($db->add('bar', 123));
});
