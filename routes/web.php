<?php

use Bright\Contactform\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


// Route::get("ContactController", function(){
//     return "Good";
// });

Route::middleware(["guest","web"])->group(function () {
    Route::get("/contactpage",[ContactController::class,"contactpage"])->name("contactpage");
    Route::post("/brightsendmail",[ContactController::class,"brightsendmail"])->name("brightsendmail");


});
