<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getRequest()
    {
        return request();
    }

    protected function getService()
    {
        return services()->questionService();
    }

    public function index()
    {
        $questions = $this->getService()->where('active', Question::ACTIVE)->orderByDesc('id')->paginate(20);
        $viewData = [
            'questions' => $questions,
        ];
        return view('question.index', $viewData);
    }
}
