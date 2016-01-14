<?php
namespace Illuminate3\Kotoba;

use Illuminate\Support\ServiceProvider;

class KotobaServiceProvider extends ServiceProvider
{
	/**
	 * @var bool $defer Indicates if loading of the provider is deferred.
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['kotoba'] = $this->app->share(function($app)
		{
			return new Kotoba;
		});
	}


	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadTranslationsFrom(__DIR__.'/../lang/', 'kotoba');
	}


	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('kotoba');
	}

}
