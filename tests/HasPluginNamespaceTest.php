<?php

namespace Newride\OctoberNamespaces\tests;

use Newride\OctoberNamespaces\tests\fixtures\Plugin;
use PHPUnit\Framework\TestCase;

class HasPluginNamespaceTest extends TestCase
{
    public function testBackendUrlIsGenerated()
    {
        $correct = '/skutecznykomornik/benchmark/test';
        $generated = Plugin::backendUrl('test');

        $this->assertSame($correct, $generated);
    }

    public function testTableNameIsGenerated()
    {
        $correct = 'author_name_courts';
        $generated = Plugin::databaseTable('courts');

        $this->assertSame($correct, $generated);
    }
}
