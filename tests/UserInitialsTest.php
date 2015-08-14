<?php

/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 14.08.2015
 * Time: 14:14
 */

namespace userinitials\tests;

use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamWrapper;

class UserInitialsTest extends \PHPUnit_Framework_TestCase {
  private $root;

  public function setUp()
  {
    $this->root = vfsStream::setup("test");
  }

  /**
   * test options override
   */
  public function testOptions() {

    $options = array(
      'width' => 2000,
    );

    $userinitials = new \userinitials\UserInitials($options);

    $this->assertEquals($userinitials->getOption("width"), 2000);

  }

  /**
   * Test fiel creation
   */
  public function testSVGCreationWorks(){
    $userinitials = new \userinitials\UserInitials();


    $testStreamUrl = vfsStream::url('test/test.svg');

    $userinitials->createSVGFile("SH",$testStreamUrl);


    $this->assertTrue($this->root->hasChild("test.svg"));

    $this->assertTrue($this->root->getChild("test.svg")->size() > 0);

  }

}
