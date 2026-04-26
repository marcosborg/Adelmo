<?php

namespace Tests\Feature;

use App\Models\ContactSubmission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_loads_successfully(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Adelmo Top')
            ->assertSee('Gestão e consultoria para negócios que precisam de resultados, não de teoria.');
    }

    public function test_contact_form_creates_a_submission(): void
    {
        $this->seed();

        $response = $this->post('/contactos', [
            'name' => 'Sara Borges',
            'company' => 'Adelmo Top',
            'email' => 'sara@example.com',
            'phone' => '+351910000000',
            'message' => 'Precisamos de apoio à gestão operacional.',
        ]);

        $response->assertRedirect('/#contactos');

        $this->assertDatabaseHas(ContactSubmission::class, [
            'name' => 'Sara Borges',
            'email' => 'sara@example.com',
        ]);
    }
}
