<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
    #use RefreshDatabase;

    public function test_confirm_password_screen_can_be_rendered()
    {
        $user = new User;
        $user->name = "hung";
        $user->save();
        print_r($user);
        $user1 = User::factory()->create();
        print_r($user1);

    }
}
