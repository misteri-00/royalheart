<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPagesTest extends TestCase
{
    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('RoyalHeart');
    }

    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('About Us');
    }

    public function test_causes_page_returns_successful_response(): void
    {
        $response = $this->get('/causes');
        $response->assertStatus(200);
        $response->assertSee('Our Causes');
    }

    public function test_cause_detail_page_returns_successful_response(): void
    {
        $response = $this->get('/causes/detail');
        $response->assertStatus(200);
        $response->assertSee('Cause Details');
    }

    public function test_events_page_returns_successful_response(): void
    {
        $response = $this->get('/events');
        $response->assertStatus(200);
        $response->assertSee('Our Events');
    }

    public function test_event_detail_page_returns_successful_response(): void
    {
        $response = $this->get('/events/detail');
        $response->assertStatus(200);
        $response->assertSee('Event Details');
    }

    public function test_contact_page_returns_successful_response(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSee('Contact Us');
    }

    public function test_donate_page_returns_successful_response(): void
    {
        $response = $this->get('/donate');
        $response->assertStatus(200);
        $response->assertSee('Donate Now');
    }

    public function test_contact_form_submission_redirects(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Fajar Test',
            'email' => 'fajar@example.com',
            'subject' => 'Pertanyaan',
            'message' => 'Halo tim RoyalHeart.'
        ]);

        $response->assertStatus(302);
        $response->assertSessionHas('success');
    }
}
