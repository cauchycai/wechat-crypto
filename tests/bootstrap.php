<?php
require __DIR__ . '/Psr4Autoloader.php';

$autoloader_1435908479 = new Psr4Autoloader();
$autoloader_1435908479->addNamespace('WechatCrypto\\', __DIR__ . '/../src/');
$autoloader_1435908479->addNamespace('WechatCrypto\\Tests\\', __DIR__ . '/');
$autoloader_1435908479->register();
