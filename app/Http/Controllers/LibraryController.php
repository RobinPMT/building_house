<?php

namespace App\Http\Controllers;

use App\Models\Library;

class LibraryController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function libraryDetail($slug)
    {
        $library = services()->libraryService()->where([
            'active' => Library::ACTIVE,
            'freedom' => Library::NOT_FREEDOM,
            'slug' => $slug
        ])->select('id', 'title', 'slug', 'avatar', 'arr_image')->first();

        $librariesRelated  = services()->libraryService()
            ->where([
                'active' => Library::ACTIVE,
                'freedom' => Library::NOT_FREEDOM
            ])
            ->whereKeyNot($library->id)
            ->select('id', 'title', 'slug', 'avatar')->inRandomOrder()->limit(3)->get();

        $viewData = [
            'library' => $library,
            'librariesRelated' => $librariesRelated
        ];
        return view('library.detail', $viewData);
    }

    public function listLibrary()
    {
        $libraries = services()->libraryService()->where([
            'active' => Library::ACTIVE,
            'freedom' => Library::NOT_FREEDOM
        ])->select('id', 'title', 'slug', 'avatar')->orderByDesc('id')->paginate(6);
        $slides = services()->libraryService()->where([
            'active' => Library::ACTIVE,
            'freedom' => Library::FREEDOM
        ])->select('id', 'avatar')->orderByDesc('id')->get();
        $viewData = [
            'libraries' => $libraries,
            'slides' => $slides
        ];
        return view('library.list', $viewData);
    }
}
