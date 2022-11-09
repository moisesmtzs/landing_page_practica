<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandingContactoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_formulario()
    {
        $response = $this->post('/contact', [
            'name' => '',
            'email' => 'correMalo',
            'message' => 'hola'
        ]);
        
        $response->assertSessionHasErrors([
            'name',
            'email',
            'message',
        ]);

    }

    public function test_formulario_parametro()
    {
        $response = $this->get('/contact/1234');
        
        $response->assertStatus(200);
    }

}
