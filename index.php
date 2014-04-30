<?php
require_once __DIR__.'/vendor/autoload.php';


use Indomog\User\merchant.php;

$merchant=new Merchant();
$merchant->setId(1)
		 ->setName('biyono')
		 ->setEmail('biyono@indomog.com');

?>