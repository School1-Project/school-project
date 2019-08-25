<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $adminNameSpace = 'App\Http\Controllers\Admin';
    protected $studentNameSpace = 'App\Http\Controllers\Student';
    protected $librarianNameSpace = 'App\Http\Controllers\Librarian';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->mapAdminRoutes();
        $this->mapStudentRoutes();
        $this->mapLibrarianRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    public function mapAdminRoutes()
    {
        /*'web', 'auth', 'role:admin'*/
        Route::middleware(['web','Admin'])
             ->namespace($this->adminNameSpace)
             ->prefix('admin')
             ->as('admin.')
             ->group(base_path('routes/admin/admin.php'));
    }

    public function mapStudentRoutes()
    {
        /*'web', 'auth', 'role:admin'*/
        Route::middleware(['web','Student'])
             ->namespace($this->studentNameSpace)
             ->prefix('student')
             ->as('student.')
             ->group(base_path('routes/student/student.php'));
    }

    public function mapLibrarianRoutes()
    {
        /*'web', 'auth', 'role:admin'*/
        Route::middleware(['web','Librarian'])
             ->namespace($this->librarianNameSpace)
             ->prefix('librarian')
             ->as('librarian.')
             ->group(base_path('routes/librarian/librarian.php'));
    }
}
