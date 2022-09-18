<?php

namespace App\Lib\Helper;

use App\Services\AdminService;
use App\Services\PostService;
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
}
