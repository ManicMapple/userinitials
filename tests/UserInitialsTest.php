<?php

/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 14.08.2015
 * Time: 14:14
 */
class UserInitialsTest extends PHPUnit_Framework_TestCase {

  public function testOptions() {

    $options = array(
      'width' => 2000,
    );

    $userinitials = new \userinitials\UserInitials($options);

    $this->assertEquals($userinitials->getOption("width"), 2000);

  }
}
