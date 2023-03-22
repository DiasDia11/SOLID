<?php

require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;
use src\Whatsapp;

// ------ canal E-mail
$msg = new Mensageiro(new Email());
$msg->enviarToken();

// ------ canal sms
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

// ------ canal whatsapp
$msg2 = new Mensageiro(new Whatsapp());
$msg2->enviarToken();