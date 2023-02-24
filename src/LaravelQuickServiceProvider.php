<?php
/**
 * Created by PhpStorm.
 * User: youxingxiang
 * Date: 2020/7/23
 * Time: 9:17 AM
 */

namespace Surpaimb\LaravelQuick;

use Illuminate\Support\ServiceProvider;
use Surpaimb\LaravelQuick\Console\CreateRepositoryCommand;
use Surpaimb\LaravelQuick\Console\CreateServiceCommand;
use Surpaimb\LaravelQuick\Console\CreateTraitCommand;
use Surpaimb\LaravelQuick\Services\CacheService;

class LaravelQuickServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
        CreateTraitCommand::class,
        CreateServiceCommand::class,
        CreateRepositoryCommand::class,
    ];

    /**
     * @see 注册服务
     */
    public function register()
    {
        $this->registerServices();
        $this->commands($this->commands);
    }


    public function boot()
    {
        $this->registerPublishing();
    }

    protected function registerServices()
    {
        $this->app->singleton('quick.cache.service', CacheService::class);
    }

    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config' => config_path()]);
            $this->publishes([__DIR__ . '/../resources/lang' => resource_path('lang')]);
        }
    }
}
