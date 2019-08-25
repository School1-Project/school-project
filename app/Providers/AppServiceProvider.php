<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.box.formBox', 'formBox');
        Blade::component('components.box.box', 'box');
        Blade::component('components.form.textInput', 'textInput');
        Blade::component('components.form.checkBoxInput', 'checkBoxInput');
        Blade::component('components.form.numberInput', 'numberInput');
        Blade::component('components.form.emailInput', 'emailInput');
        Blade::component('components.form.fileInput', 'fileInput');
        Blade::component('components.form.passwordInput', 'passwordInput');
        Blade::component('components.form.selectInput', 'selectInput');
        Blade::component('components.form.multiSelectInput', 'multiSelectInput');
        Blade::component('components.form.datePicker', 'datePicker');
        Blade::component('components.table', 'table');
        Blade::component('components.dataTable', 'dataTable');
        Blade::component('components.badge', 'badge');
        Blade::component('components.action', 'action');

        Schema::defaultStringLength(191);
    }
}
