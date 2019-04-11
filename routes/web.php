<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('api')->group(function(){

    Route::prefix('public')->group(function (){

        Route::prefix('ecole')->group(function (){

            Route::get('' , 'Ecole@index');

            Route::get('{id}' , 'Ecole@show');

            Route::get('{id}/transports' , 'Ecole@indexTransport');

            Route::get('{id}/transport/{idTransport}' , 'Ecole@showTransport');

            Route::get('{id}/etudiants' , 'Ecole@indexEtudiant');

            Route::get('{id}/etudiant/{idEtudiant}' , 'Ecole@showEtudiant');


        });

        Route::prefix('chauffeur')->group(function (){

            Route::get('' , 'Chauffeur@index');

            Route::get('{id}' , 'Chauffeur@show');

        });

        Route::prefix('parent')->group(function (){

            Route::get('' , 'Parent_Etd@index');

            Route::get('{id}' , 'Parent_Etd@show');

            Route::get('{id}/etudiants' , 'Parent_Etd@indexEtudiant');

            Route::get('{id}/etudiant/{idEtudiant}' , 'Parent_Etd@showEtudiant');

        });

        Route::prefix('etudiant')->group(function (){

            Route::get('' , 'Etudiant@index');

            Route::get('{id}' , 'Etudiant@show');

            Route::get('{id}/localisation' , 'Etudiant@showLocalisation');

        });

        Route::prefix('transport')->group(function (){

            Route::get('' , 'Transport@index');

            Route::get('{id}' , 'Transport@show');

            Route::get('{id}/localisation' , 'Transport@showLocalisation');

            Route::get('{id}/chauffeur' , 'Transport@showChauffeur');

            Route::get('{id}/notification' , 'Transport@showNotification');

            Route::get('{id}/etudiants' , 'Transport@indexEtudiant');

            Route::get('{id}/etudiant/{idTransport}' , 'Transport@showEtudiant');

        });

        Route::prefix('localisation')->group(function (){

            Route::get('' , 'Localisation@index');

            Route::get('{id}' , 'Localisation@show');
        });

        Route::prefix('notification')->group(function (){

            Route::get('' , 'Notification@index');

            Route::get('{id}' , 'Notification@show');

        });

    });


});

Route::prefix('home')->group(function(){

        Route::get('' , 'HomeController@home');
        Route::get('/homepage' , 'HomeController@home');

});

