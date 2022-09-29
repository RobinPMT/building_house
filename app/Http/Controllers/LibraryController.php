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

    public function listLibrary($slug)
    {
        $library = services()->libraryService()->where([
            'active' => Library::ACTIVE,
            'slug' => $slug
        ])->with('creator')->select('id', 'title', 'slug', 'description', 'avatar', 'created_at', 'author_id', 'content')->first();
        $tag_ids = $library->tags->pluck('id')->toArray();
        $librarysRelated  = services()->libraryService()
            ->where(['active' => Library::ACTIVE])
            ->whereKeyNot($library->id)
            ->whereHas('tags', function ($query) use ($tag_ids) {
                $query->whereIn('tag_id', $tag_ids);
            })
            ->with('creator')->select('id', 'title', 'slug', 'description', 'avatar', 'created_at', 'author_id', 'content')->limit(3)->get();

        $viewData = [
            'library' => $library,
            'librarysRelated' => $librarysRelated
        ];
        return view('library.detail', $viewData);
    }

    public function libraryDetail()
    {
        $librarys = services()->libraryService()->where([
            'active' => Library::ACTIVE
        ])->with('creator')->select('title', 'slug', 'description', 'avatar', 'created_at', 'author_id')->orderByDesc('id')->paginate(12);
        $viewData = [
            'librarys' => $librarys
        ];
        return view('library.list', $viewData);
    }
}
