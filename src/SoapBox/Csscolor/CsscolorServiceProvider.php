<?php namespace SoapBox\Csscolor;

use Illuminate\Support\ServiceProvider;

class CsscolorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() {
		/**
	         * If the package method exists, we're using Laravel 4
        	 */
	        if (method_exists($this, 'package')) {
        	    $this->package('SoapBox/Csscolor');
	        }
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		$this->app['csscolor'] = $this->app->share(function($app) {
			return new Csscolor;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Csscolor', 'SoapBox\Csscolor\CsscolorFacade');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return array('csscolor');
	}

}
