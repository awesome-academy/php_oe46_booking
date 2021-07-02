<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
      echo env('DB_HOST', 'Laravel');
      print_r($_ENV);
        $this->assertTrue(true);
    }
}
