<?php

namespace Modules\Admin\Http\Controllers;

use App\Jobs\ContactSendMailJob;
use App\Models\Contact;
use App\Models\Wishlist;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
//        dispatch(new ContactSendMailJob('hello', 'phanminhtuan02365@gmail.com'));
        $products = services()->productService()->count();
        $projects = services()->projectService()->count();
        $contacts = services()->contactService()->count();
        $contacts_not_active = services()->contactService()->where(['active' => Contact::NOT_ACTIVE])->count();
        $transactions = services()->wishlistService()->where(['type' => Wishlist::TYPE_TRANSACTION])->count();
        $transactions_not_finished = services()->wishlistService()->where(['type' => Wishlist::TYPE_TRANSACTION, 'status' => Wishlist::STATUS_NOT_FINISHED])->count();
        $users = services()->userService()->count();
        $posts = services()->postService()->count();
        $viewData = [
            'posts' => $posts,
            'products' => $products,
            'projects' => $projects,
            'users' => $users,
            'contacts' => $contacts,
            'contacts_not_active' => $contacts_not_active,
            'transactions' => $transactions,
            'transactions_not_finished' => $transactions_not_finished,
        ];
        return view('admin::dashboard.index', $viewData);
    }
}
