<?php

namespace TinhPHP\Tool;

use App\Models\Plugin;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use TinhPHP\Tool\Console\InstallToolPackage;

class ToolServiceProvider extends ServiceProvider
{
    public $pluginName = 'tool';

    public function boot()
    {
        // check enable and disable plugin
        if ($this->plugin()->status != Plugin::STASTUS_ACTIVE) {
            return null;
        }

        // config
        if ($this->app->runningInConsole()) {
            // load migration
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

            // install package
            $this->commands(
                [
                    InstallToolPackage::class,
                ]
            );

            // public config
            $this->publishes(
                [
                    __DIR__ . '/../config/config.php' => config_path('config_package_tool.php'),
                ],
                'config'
            );
        }

        // route middleware

        // route
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/admin.php');

        // view
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'view_tool');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'lang_tool');
    }

    public function plugin()
    {
        // check enable and disable plugin
        $plugin = Plugin::query()->where('code', $this->pluginName)->first();
        if (empty($plugin)) {
            $plugin = Plugin::query()->updateOrCreate(
                [
                    'code' => $this->pluginName,
                ],
                [
                    'version' => '1.0.1',
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),

                ]
            );
        }

        return $plugin;
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'config_package_tool');
        $this->mergeConfigFrom(__DIR__ . '/../config/constant.php', 'constant');
    }

    protected function registerRoutes()
    {
        Route::group(
            $this->routeConfiguration(),
            function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
                $this->loadRoutesFrom(__DIR__ . '/../routes/admin.php');
            }
        );
    }

    protected function routeConfiguration()
    {
        return [
            'middleware' => ['auth'],
        ];
    }

    /**
     * Merge the given configuration with the existing configuration.
     *
     * @param $path
     * @param $key
     * @return void
     */
    protected function mergeConfigFrom($path, $key)
    {
        $config = $this->app['config']->get($key, []);

        $this->app['config']->set($key, $this->mergeConfig(require $path, $config));
    }

    /**
     * Merges the configs together and takes multi-dimensional arrays into account.
     *
     * @param array $original
     * @param array $merging
     * @return array
     */
    protected function mergeConfig(array $original, array $merging)
    {
        $array = array_merge($original, $merging);

        foreach ($original as $key => $value) {
            if (!is_array($value)) {
                continue;
            }

            if (!Arr::exists($merging, $key)) {
                continue;
            }

            if (is_numeric($key)) {
                continue;
            }

            $array[$key] = $this->mergeConfig($value, $merging[$key]);
        }

        return $array;
    }
}
