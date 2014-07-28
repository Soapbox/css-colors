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
		$this->package('SoapBox/Csscolor');
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
			$loader->alias('Csscolor', 'SoapBox\Csscolor\Facade');
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
