<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Artesaos\SEOTools\Facades\SEOTools;
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

    public function index(Request $request)
    {
        SEOTools::setTitle('Câu hỏi thường gặp');
        SEOTools::setDescription('Câu hỏi thường gặp');
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
        $questions = $this->getService()->where('active', Question::ACTIVE)->orderByDesc('id')->paginate(20);
        $viewData = [
            'questions' => $questions,
        ];
        return view('question.index', $viewData);
    }
}
