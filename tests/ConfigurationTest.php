<?php

namespace mglaman\OfficeRND\Tests;

use mglaman\OfficeRND\Configuration;
use PHPUnit\Framework\TestCase;

final class ConfigurationTest extends TestCase {
  public function testConfiguration() {
    $config = new Configuration('fakeslug', 'faketoken');
    $this->assertEquals('fakeslug', $config->getSlug());
    $this->assertEquals('faketoken', $config->getToken());
  }
}
