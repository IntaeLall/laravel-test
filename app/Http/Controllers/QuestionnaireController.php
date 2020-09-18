<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Http\Resources\QuestionnaireResource;

class QuestionnaireController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param Questionnaire $$questionnaire
     * @return ApiResource
     */
    public function index()
    {
        $questionnaires = Questionnaire::paginate(10);
        return QuestionnaireResource::collection($questionnaires);
    }

    public function show(Questionnaire $questionnaire): QuestionnaireResource
    {
        return new QuestionnaireResource($questionnaire->loadMissing('questions'));
    }
}
