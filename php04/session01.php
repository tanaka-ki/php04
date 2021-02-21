<?php
session_start();
$sid=session_id();

##var_dump($sid);
$_SESSION['name']='田中';
$_SESSION['age']='23';
$_SESSION['loveFood']='肉';

$birthPlace='宮崎県';
