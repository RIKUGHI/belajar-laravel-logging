<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    public function testLoggin()
    {
        Log::info('Hello Info');
        Log::warning('Hello Warning');
        Log::error('Hello Error');
        Log::critical('Hello Critical');
    
        self::assertTrue(true);
    }

    public function testContext()
    {
        Log::info('Hello Info', ['user' => 'bambang']);

        self::assertTrue(true);
    }
}
