<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class PostController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function postDetail($type, $slug, Request $request)
    {
        $post = services()->postService()->where([
            'active' => Post::ACTIVE,
            'slug' => $slug
        ])->with('creator')->first();

        SEOTools::setTitle($post->title_seo);
        SEOTools::setDescription($post->description_seo);
        SEOMeta::addKeyword($post->keyword_seo);
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
        OpenGraph::addImage(env('APP_URL') . pare_url_file($post->avatar, 'posts'), ['height' => 300, 'width' => 300]);

        $tag_ids = $post->tags->pluck('id')->toArray();
        $postsRelated  = services()->postService()
            ->where(['active' => Post::ACTIVE])
            ->whereKeyNot($post->id)
            ->whereHas('tags', function ($query) use ($tag_ids) {
                $query->whereIn('tag_id', $tag_ids);
            })
            ->with('creator')->select('id', 'title', 'slug', 'description', 'avatar', 'created_at', 'author_id', 'content', 'type')->limit(3)->get();

        $viewData = [
            'post' => $post,
            'postsRelated' => $postsRelated
        ];
        return view('post.detail', $viewData);
    }

    public function listPost($type, Request $request)
    {
        switch ($type) {
            case 'tin-tuc-su-kien':
                $title = 'Tin tức sự kiện';
                break;
            case 'tin-khuyen-mai':
                $title = 'Tin khuyến mãi';
                break;
            case 'tin-tai-chinh':
                $title = 'Tin tài chính';
                break;
            case 'tin-tuc':
                $title = 'Tin tức';
                break;
            default:
                $title = 'Tin tức';
        }
        $tags = services()->tagService()->where('active', Tag::STATUS_PUBLIC)->inRandomOrder()->limit(10)->get();
        SEOTools::setTitle($title);
        SEOTools::setDescription($title);
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
        foreach ($tags as $tag) {
            SEOMeta::addKeyword([$tag->title]);
        }
        $posts = services()->postService()->where([
            'active' => Post::ACTIVE,
            'type' => $type
        ])->with('creator')->select('title', 'slug', 'description', 'avatar', 'created_at', 'author_id', 'type')->orderByDesc('id')->paginate(12);
        $viewData = [
            'posts' => $posts
        ];
        return view('post.list', $viewData);
    }
}
