<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Http\Resources\QuestionnaireResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class QuestionnaireController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param Questionnaire $$questionnaire
     * @return ResourceCollection
     */
    public function index(): ResourceCollection
    {
        $questionnaires = Questionnaire::paginate(10);
        return QuestionnaireResource::collection($questionnaires);
    }

    /**
     * Display the specified resource.
     *
     * @param Questionnaire $$questionnaire
     * @return QuestionnaireResource
     */
    public function show(Questionnaire $questionnaire): QuestionnaireResource
    {
        return new QuestionnaireResource($questionnaire->loadMissing('questions'));
    }
}
