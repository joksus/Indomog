<?php
require_once __DIR__.'/vendor/autoload.php';

use Indomog\User\Merchant;
use Indomog\User\Member;

$user = new member();

$user->setId(1);
$user->setName('sonny');
$user->setEmail ('sonny@indomog.com');


echo '<pre>', var_dump($user), '</pre>';



$merchant=new Merchant();
$merchant->setId(1)
		 ->setName('biyono')
		 ->setEmail('biyono@indomog.com');
echo '<pre>', var_dump($merchant), '</pre>';
?>