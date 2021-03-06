<?php

namespace Anodoc\Tests\Unit;

use Anodoc\Collection\TagGroup;

class TagGroupTest extends \PHPUnit_Framework_TestCase {

  function testSettingTagNameOfTagGroup() {
    $collection = new TagGroup('foo', array());
    $this->assertEquals('foo', $collection->getTagname());
  }

  function testSettingANonTagThrowsException() {
    $this->setExpectedException('Anodoc\Collection\NotATagException');
    $collection = new TagGroup('foo', array('bar' => ''));
  }

}