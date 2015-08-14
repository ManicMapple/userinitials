<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 14.08.2015
 * Time: 13:41
 */

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use userinitials\UserInitials;

$ui = new UserInitials(array('width' => 100, 'height' => 100));

print $ui->createSVG("SH");

$file = "test.svg";
$ui->createSVGFile("AC", $file);

?>

<img src="test.svg" width="100px"/>
