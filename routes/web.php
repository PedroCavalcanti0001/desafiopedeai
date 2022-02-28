<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get("/api/recipes", "RecipesController@getAll");
$router->get("/api/recipes/steps", "RecipeStepController@getAll");
$router->get("/api/categories", "CategoriesController@getAll");
$router->group(["prefix" => "/api/recipe"], function () use ($router) {
    $router->get("/{id}", "RecipesController@get");
    $router->post("/", "RecipesController@store");
    $router->put("/{id}", "RecipesController@update");
    $router->delete("/{id}", "RecipesController@destroy");
});
$router->group(["prefix" => "/api/categories"], function () use ($router) {
    $router->get("/{id}", "CategoriesController@get");
    $router->post("/", "CategoriesController@store");
    $router->put("/{id}", "CategoriesController@update");
    $router->delete("/{id}", "CategoriesController@destroy");
});

$router->group(["prefix" => "/api/recipe/steps"], function () use ($router) {
    $router->get("/{id}", "RecipeStepController@get");
    $router->post("/", "RecipeStepController@store");
    $router->put("/{id}", "RecipeStepController@update");
    $router->delete("/{id}", "RecipeStepController@destroy");
});

$router->group(["prefix" => "/api/recipe/images"], function () use ($router) {
    $router->get("/{id}", "RecipeImageController@get");
    $router->post("/", "RecipeImageController@store");
    $router->put("/{id}", "RecipeImageController@update");
    $router->delete("/{id}", "RecipeImageController@destroy");
});

$router->group(["prefix" => "/api/recipe/categories"], function () use ($router) {
    $router->get("/{id}", "RecipesCategoriesController@get");
    $router->post("/", "RecipesCategoriesController@store");
    $router->put("/{id}", "RecipesCategoriesController@update");
    $router->delete("/{id}", "RecipesCategoriesController@destroy");
});
