<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix("v1")->group(function (){
    Route::prefix("auth")->namespace("User")->group(function (){
        Route::post("/login","UserController@login");
    });
    Route::middleware("jwt")->group(function (){
        Route::prefix("events")->namespace("Event")->group(function (){
            Route::post("/","EventController@create");
            Route::get("/","EventController@getEvents");
            Route::prefix("/{event_id}")->group(function (){

                Route::get("/","EventController@getEventDetail");

                Route::prefix("/auditions")->group(function (){
                    Route::post("/","EventAuditionController@create");
                    Route::get("/centers","EventController@getAuditionCenters");
                    Route::put("/update-status","EventController@updateAuditionStatus");
                });

                Route::prefix("/talents")->group(function (){
                    Route::get("/","EventController@getTalents");
                    Route::post("/registration","EventController@registration");
                    Route::put("/{talent_id}/update-selection-status","EventController@updateTalentSelectionStatus");
                });

                Route::prefix("/selections")->group(function (){
                    Route::put("/update-visibility","EventController@updateSelectionVisibility");
                    Route::get("/passed","EventController@getPassedTalents");
                });

                Route::prefix("/registrations")->group(function (){
                    Route::put("/update-status","EventController@updateRegistrationStatus");
                });

                Route::put("/toggle-visibility","EventController@toggleVisibility");

            });
        });
    });

    Route::prefix("viewers")->group(function (){
        Route::prefix("events")->namespace("Event")->group(function (){
            Route::post("/","EventController@create");
            Route::get("/","EventController@getVisibleEvents");
            Route::get("/closed-audition","EventController@getAuditionClosedEvent");

            Route::prefix("/{event_id}")->group(function (){

                Route::prefix("/auditions")->group(function (){
                    Route::post("/","EventAuditionController@create");
                    Route::get("/centers","EventController@getAuditionCenters");
                });

                Route::prefix("/talents")->group(function (){
                    Route::get("/","EventController@getTalents");
                    Route::post("/registration","EventController@registration");
                    Route::put("/{talent_id}/update-selection-status","EventController@updateTalentSelectionStatus");
                });

                Route::prefix("/selections")->group(function (){
                    Route::put("/update-visibility","EventController@updateSelectionVisibility");
                    Route::get("/passed","EventController@getPassedTalents");
                });

                Route::put("/toggle-visibility","EventController@toggleVisibility");

            });
        });
    });


});
