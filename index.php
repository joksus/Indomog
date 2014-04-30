<?php

use Indomog\User\member;

$user = new member();

$user->setId(1);
$user->setName('sonny');
$user->setEmail ('sonny@indomog.com');


echo '<pre>', var_dump($user), '</pre>';

?>