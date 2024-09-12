<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\FundingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', function (Request $request) {
    return response ()->json(['Home', 'Profile', 'About', 'Contact Us']);
});

Route::get('/donatur', function (Request $request) {
    return response ()->json([
        [
            'id' => 1,
            'name' => 'Eddo',
        ],
        [
            'id' => 2,
            'name' => 'Rizky',
        ],
        [
            'id' => 3,
            'name' => 'Rizal',
        ],
    ]);
});

// API CRUD Funding
Route::get('/funding', [FundingController::class, 'index']); // get all data
Route::post('/funding', [FundingController::class, 'store']); // create new data
Route::get('/funding/{id}', [FundingController::class, 'show']); // get data by id
Route::put('/funding/{id}', [FundingController::class, 'update']); // update data by id
Route::delete('/funding/{id}', [FundingController::class, 'destroy']); // delete data by id

// API CRUD Donation
//Route::get('/donation', [DonationController::class, 'index']); // get all data
Route::apiResource('donation', controller: DonationController::class); // get all data

//buat route menuju url /donatur dengan method get
//buat response berupa data json seperti berikut
/*
    [{
        "id": 1,
        "name": "Eddo",

    },
    {
        "id": 2,
        "name": "Rizky",
    },
    {
        "id": 3,
        "name": "Rizal",
    }]
*/
