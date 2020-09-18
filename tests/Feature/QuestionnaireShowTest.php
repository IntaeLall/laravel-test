<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Questionnaire;

class UnitShowTest extends TestCase
{
    /**
     * Test endpoint.
     *
     * @return void
     */
    public function test_endpoint_exists()
    {

        $questionnaire = factory(Questionnaire::class)->create();

        $response = $this->get('api/questionnaires/' . $questionnaire->slug);

        $response->assertStatus(200);
    }

}