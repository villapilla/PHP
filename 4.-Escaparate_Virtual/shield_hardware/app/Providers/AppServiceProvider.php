<?php namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use View;


class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
            /**
             * Todas las categorias de productos para poder cargarlas en 
             * el menu de navegación
             */
            $category = Category::all();
            View::share('category', $category);
            /**
             * Array que conforma el select de ordenación de los productos
             */
            $select = ['0' => '----', '1' => 'A-Z', '2' => 'Z-A', '3' => 'Precio Mayor', '4' => 'Precio Menor'];
            View::share('selectOrder', $select);
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
