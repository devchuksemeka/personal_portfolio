<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

Route::post('/send-contact-mail',function(Request $request){
    ini_set("max_execution_time",100);
    try{
        Mail::to('devchuksemeka@gmail.com')
            ->send(new \App\Mail\SendContactUsEmail($request));
        return response()->json([
            'status' => true,
            'message' => 'Email sent successfully.'
        ]);
    }catch(Exception $exception){
        return response()->json([
            'status' => false,
            'error' => 'Message could not be sent now. Kindly try again',
            'extras' => $exception->getMessage(),
        ]);
    }


});