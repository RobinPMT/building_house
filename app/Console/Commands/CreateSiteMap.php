<?php

namespace App\Console\Commands;

use App\Models\Library;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = App::make('sitemap');

        // add home pages mặc định
        $sitemap->add(route('home'), Carbon::now(), '1.0', 'daily');

//        $categories = services()->categoryService()->orderByDesc('created_at')->get();
//        foreach ($categories as $category) {
//            $sitemap->add(route('get.detail.post', [$category->slug]), $category->created_at, '0.6', 'daily');
//        }
        $sitemap->add(route('get.register.auth'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.login.auth'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.logout.user.auth'), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.forget.password.auth'), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.reset.password.auth'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.change.password.auth'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.change.profile.auth'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.list.wishlist.product'), Carbon::now(), '1.0', 'daily');

        $sitemap->add(route('get.list.contact'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.list.product'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.list.project'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.list.coffee'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.list.library'), Carbon::now(), '1.0', 'daily');


        $sitemap->add(route('get.list.post', ['tin-tuc']), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.list.post', ['tin-tai-chinh']), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.list.post', ['tin-khuyen-mai']), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.list.post', ['tin-tuc-su-kien']), Carbon::now(), '1.0', 'daily');

        $sitemap->add(route('get.list.question'), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.list.security.policy'), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.list.shopping.policy'), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.list.transport.policy'), Carbon::now(), '1.0', 'daily');
//        $sitemap->add(route('get.list.insurance.policy'), Carbon::now(), '1.0', 'daily');
        $sitemap->add(route('get.list.design'), Carbon::now(), '1.0', 'daily');

        $policies = services()->policyService()->orderByDesc('id')->get();
        foreach ($policies as $policy) {
            $sitemap->add(route('get.detail.policy', [$policy->slug]), $policy->created_at, '0.6', 'daily');
        }

        $posts = services()->postService()->orderByDesc('created_at')->get();
        foreach ($posts as $post) {
            $sitemap->add(route('get.detail.post', [$post->type, $post->slug]), $post->created_at, '0.6', 'daily');
        }

        $products = services()->productService()->orderByDesc('created_at')->get();
        foreach ($products as $product) {
            $sitemap->add(route('get.detail.product', [$product->slug]), $product->created_at, '0.6', 'daily');
        }

        $projects = services()->projectService()->orderByDesc('created_at')->get();
        foreach ($projects as $project) {
            $sitemap->add(route('get.detail.project', [$project->slug]), $project->created_at, '0.6', 'daily');
        }

        $libraries = services()->libraryService()->where('freedom', Library::NOT_FREEDOM)->orderByDesc('created_at')->get();
        foreach ($libraries as $library) {
            $sitemap->add(route('get.detail.library', [$library->slug]), $library->created_at, '0.6', 'daily');
        }


        // lưu file và phân quyền
        $sitemap->store('xml', 'sitemap');
        if (\File::exists(base_path() . '/sitemap.xml')) {
            \File::copy(public_path('sitemap.xml'), base_path('sitemap.xml'));
        }
    }
}
