<?php
/**
 * Routes
 */

 // Homepage
Route::get('/', function () {
    $questions = DB::table('questions')->get();
    return view('pages.index', ['questions' => $questions]);
});
