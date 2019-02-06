<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WebsiteUpTest extends TestCase
{
    protected $successUrl = 'www.kumarravi.me';
    protected $failureUrl = 'www.asfasasfsafdf.me';

    /**
     * Test user received ping response.
     *
     * @return void
     */
    public function testIfTheWebsiteIsUpAndGivingSuccessStatus()
    {
        $response = $this->call('POST','/up/'.$this->successUrl);
        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIfTheWebsiteIsNotUpAndGivingFailureStatus()
    {
        $response = $this->call('POST','/up/'.$this->failureUrl );
        $response->assertStatus(201);
    }
}
