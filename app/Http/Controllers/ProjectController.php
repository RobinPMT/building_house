<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function projectDetail($slug)
    {
        $project = services()->projectService()->where([
            'active' => Project::ACTIVE,
            'slug' => $slug
        ])->select('id', 'title', 'slug', 'avatar', 'arr_image', 'created_at', 'author_id', 'content')->first();
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

    public function listproject()
    {
        $projects = services()->projectService()->where([
            'active' => project::ACTIVE
        ])->select('title', 'slug', 'avatar')->orderByDesc('id')->paginate(12);
        $viewData = [
            'projects' => $projects
        ];
        return view('project.list', $viewData);
    }
}
