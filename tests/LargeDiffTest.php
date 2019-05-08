<?php

namespace Deviantintegral\PhpstormPhpUnitLargeDiff\Tests;

use PHPUnit\Framework\TestCase;

class LargeDiffTest extends TestCase {

  public function testLargeString() {
    $letters = 'abcdef';
    $words = [];
    for ($i = 0; $i < 60000; $i++) {
      $words[] = str_shuffle($letters);
    }

    $shuffled = $words;
    shuffle($words);
    $this->assertEquals(implode('\r\n', $words), implode('\r\n', $shuffled) );
  }

}
