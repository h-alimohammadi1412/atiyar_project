<?php

namespace Modules\Sellers\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class SellersServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower  = 'Sellers';

    /**
     * @var string $moduleName
     */
    protected $moduleName = 'modules/sellers';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleNameLower, 'Database/Migrations'));

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleNameLower, 'Config/config.php') => config_path($this->moduleName . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleNameLower, 'Config/config.php'), $this->moduleName
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleNameLower, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleName . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleName);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleName);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleName);
            $this->loadJsonTranslationsFrom($langPath, $this->moduleName);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleNameLower, 'Resources/lang'), $this->moduleName);
            $this->loadJsonTranslationsFrom(module_path($this->moduleNameLower, 'Resources/lang'), $this->moduleName);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleName)) {
                $paths[] = $path . '/modules/' . $this->moduleName;
            }
        }
        return $paths;
    }

}
