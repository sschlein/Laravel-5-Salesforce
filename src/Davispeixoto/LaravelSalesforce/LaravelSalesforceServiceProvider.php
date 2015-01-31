<?php namespace Davispeixoto\LaravelSalesforce;

use Illuminate\Support\ServiceProvider;

class LaravelSalesforceServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->publishes([
		    __DIR__.'/../../config/config.php' => config_path('salesforce.php'),
		]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{	
		$this->mergeConfigFrom(
		    __DIR__.'/../../config/config.php', 'salesforce'
		);

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Salesforce', 'Davispeixoto\LaravelSalesforce\Facades\Salesforce');
			$loader->alias('SF', 'Davispeixoto\LaravelSalesforce\Facades\Salesforce');
		});

		$this->app->bindShared('salesforce', function($app) {
			return new Salesforce();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['salesforce'];
	}

}
?>