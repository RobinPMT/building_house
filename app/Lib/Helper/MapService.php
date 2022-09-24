<?php

namespace App\Lib\Helper;

use App\Services\AdminService;
use App\Services\CategoryService;
use App\Services\ContactService;
use App\Services\LibraryService;
use App\Services\PostService;
use App\Services\ProductService;
use App\Services\SettingKeyProductService;
use App\Services\SettingService;
use App\Services\UserService;
use Psr\Container\ContainerInterface;

class MapService
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function userService(): UserService
    {
        return c(UserService::class);
    }

    public function adminService(): AdminService
    {
        return c(AdminService::class);
    }

    public function postService(): PostService
    {
        return c(PostService::class);
    }

    public function settingService(): SettingService
    {
        return c(SettingService::class);
    }

    public function contactService(): ContactService
    {
        return c(ContactService::class);
    }

    public function libraryService(): LibraryService
    {
        return c(LibraryService::class);
    }

    public function productService(): ProductService
    {
        return c(ProductService::class);
    }

    public function categoryService(): CategoryService
    {
        return c(CategoryService::class);
    }

    public function settingKeyProductService(): SettingKeyProductService
    {
        return c(SettingKeyProductService::class);
    }
}
