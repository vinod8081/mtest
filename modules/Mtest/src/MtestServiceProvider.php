<?php

/**
 * Access control list service provider
 *
 * @category   ServiceProvider
 * @package    MTEST
 * @author     Vinod Pawar <vpawar9091@gmail.com>
 * @name       MtestServiceProvider
 * @version    GIT: <git_id>
 * @link       http://google.com
 * @filesource
 */

namespace Modules\Mtest;

use Illuminate\Support\ServiceProvider;

/**
 * Access control list service provider
 *
 * @category ServiceProvider
 * @package  MTEST
 * @author   Vinod Pawar <vpawar9091@gmail.com>
 * @name     MtestServiceProvider
 * @version  Release:<v.1>
 * @link     http://google.com
 */
class MtestServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap any application services.
     *
     * @name   boot
     * @access public
     * @author Vinod Pawar <vpawar9091@gmail.com>
     *
     * @return void
     */
    public function boot()
    {
        try {
            // loading the routes file
            include __DIR__ . '/routes.php';

            //define the path for the view files
            $this->loadViewsFrom(__DIR__ . '/Views', 'mtest');
            $this->publishMigration();
        }
        catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Register any application services.
     * Register the application bindings.
     *
     * @name   register
     * @access public
     * @author Vinod Pawar <vpawar9091@gmail.com>
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mtest', function ($app) {
            return new Mtest($app);
        });
        $this->app->bind('seo', function ($app) {
            return new Seo($app);
        });
    }

    /**
     * Publish the migration to the application migration folder
     *
     * @name   _publishMigration
     * @access private
     * @author Vinod Pawar <vpawar9091@gmail.com>
     *
     * @return void
     */
    private function publishMigration()
    {
        //Move migration files
        $sourceMigration = realpath(__DIR__ . '/../migrations');
        $this->publishes([$sourceMigration => database_path('migrations')]);
    }

}
