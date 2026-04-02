<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
class LoginTest extends TestCase
{

    public function test_login_success()
    {
        $response = $this->postJson('/api/login', [
            'email' => 'test@gmail.com',
            'password' => '123456'
        ]);

        $response->assertStatus(200);
    }

    public function test_login_fail()
    {
        $response = $this->postJson('/api/login', [
            'email' => 'sai@gmail.com',
            'password' => 'sai'
        ]);

        $response->assertStatus(401);
    }
}