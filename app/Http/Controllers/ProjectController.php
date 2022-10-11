<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tag;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ProjectController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function projectDetail($slug, Request $request)
    {
        $project = services()->projectService()->where([
            'active' => Project::ACTIVE,
            'slug' => $slug
        ])->first();

        SEOTools::setTitle($project->title_seo);
        SEOTools::setDescription($project->description_seo);
        SEOMeta::addKeyword($project->keyword_seo);
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
        OpenGraph::addImage(env('APP_URL') . pare_url_file($project->avatar, 'projects'), ['height' => 300, 'width' => 300]);

        $projectRandoms = services()->projectService()
            ->where([
                'active' => Project::ACTIVE,
            ])
            ->whereKeyNot($project->id)
            ->select('id', 'title', 'slug', 'avatar')->inRandomOrder()->limit(4)->get();

        $viewData = [
            'project' => $project,
            'projectRandoms' => $projectRandoms
        ];
        return view('project.detail', $viewData);
    }

    public function listproject(Request $request)
    {
        $tags = services()->tagService()->where('active', Tag::STATUS_PUBLIC)->inRandomOrder()->limit(10)->get();
        SEOTools::setTitle('Dự án của chúng tôi');
        SEOTools::setDescription('Hãy cùng xây dựng ngôi nhà mơ ước của bạn!');
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
        foreach ($tags as $tag) {
            SEOMeta::addKeyword([$tag->title]);
        }
        $projects = services()->projectService()->where([
            'active' => project::ACTIVE
        ])->select('title', 'slug', 'avatar')->orderBy('order')->paginate(12);
        $viewData = [
            'projects' => $projects
        ];
        return view('project.list', $viewData);
    }
}
