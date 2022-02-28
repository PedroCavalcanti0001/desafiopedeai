<?php

namespace App\Providers;

use App\Repositories\CategoriesRepository;
use App\Repositories\Impl\Eloquent\CategoriesRepositoryEloquentImpl;
use App\Repositories\Impl\Eloquent\RecipeCategoriesRepositoryEloquentImpl;
use App\Repositories\Impl\Eloquent\RecipeImageRepositoryEloquentImpl;
use App\Repositories\Impl\Eloquent\RecipeRepositoryEloquentImpl;
use App\Repositories\Impl\Eloquent\RecipeStepRepositoryEloquentImpl;
use App\Repositories\RecipeCategoriesRepository;
use App\Repositories\RecipeImageRepository;
use App\Repositories\RecipeRepository;
use App\Repositories\RecipeStepRepository;
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
        $this->app->bind(RecipeRepository::class, RecipeRepositoryEloquentImpl::class);
        $this->app->bind(CategoriesRepository::class, CategoriesRepositoryEloquentImpl::class);
        $this->app->bind(RecipeStepRepository::class, RecipeStepRepositoryEloquentImpl::class);
        $this->app->bind(RecipeImageRepository::class, RecipeImageRepositoryEloquentImpl::class);
        $this->app->bind(RecipeCategoriesRepository::class, RecipeCategoriesRepositoryEloquentImpl::class);
    }
}
