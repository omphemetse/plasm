<?php

namespace Plasm\Tests;

use PHPUnit\Framework\TestCase;
use Plasm\Schema;
use Plasm\Tests\Fixtures\EmptySchema;
use Plasm\Tests\Fixtures\TestSchema;

/**
 * @covers \Plasm\Schema
 */
final class SchemaTest extends TestCase
{
    /** @test */
    public function can_be_created_empty()
    {
        $this->assertInstanceOf(
            Schema::class,
            new EmptySchema()
        );
    }

    /** @test */
    public function can_be_created()
    {
        $this->assertInstanceOf(
            Schema::class,
            new TestSchema()
        );
    }
}


