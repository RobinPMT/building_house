<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Tag;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class LibraryController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function libraryDetail($slug, Request $request)
    {
        $library = services()->libraryService()->where([
            'active' => Library::ACTIVE,
            'freedom' => Library::NOT_FREEDOM,
            'slug' => $slug
        ])->first();

        SEOTools::setTitle($library->title_seo);
        SEOTools::setDescription($library->description_seo);
        SEOMeta::addKeyword($library->keyword_seo);
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
        OpenGraph::addImage(env('APP_URL') . pare_url_file($library->avatar, 'libraries'), ['height' => 300, 'width' => 300]);

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

    public function listLibrary(Request $request)
    {
//        $tags = services()->tagService()->where('active', Tag::STATUS_PUBLIC)->inRandomOrder()->limit(10)->get();
        SEOTools::setTitle('Thư viện ảnh');
        SEOTools::setDescription('Nơi lưu giữ lại những khoảnh khắc của dự án');
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
//        foreach ($tags as $tag) {
//            SEOMeta::addKeyword([$tag->title]);
//        }
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
