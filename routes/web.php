<?php
/**
 * Routes
 */

 // Homepage
 Route::get('/','QuestionsController@index');
 Route::post('/question/ask','QuestionsController@submit');
