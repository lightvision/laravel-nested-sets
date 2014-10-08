<?php namespace Lightvision\LaravelNestedSets;

use Illuminate\Support\ServiceProvider;

class LaravelNestedSetsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
        
        public function boot() {
            $this->package('lightvision/laravel-nested-sets');
        }

        /**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
