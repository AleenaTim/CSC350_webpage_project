<?php

require_once 'GoogleAuthenticator.php';
include('db_connect.php');
session_start();

$ga = new GoogleAuthenticator();

$secret = $ga->createSecret();
$qr = $ga->getQRCodeGoogleUrl('OCCSS', $secret);


$_SESSION['secret'] = $secret;
$_SESSION['qr'] = $qr;

header('location: 2-factor-signup.php');
