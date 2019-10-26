<?php
/**
 * Routes
 */

 // Homepage
 Route::get('/','QuestionController@index');

 // Questions
 Route::post('/question/submit/question','QuestionController@submitQuestion');
 Route::post('/question/submit/answer','QuestionController@submitAnswer');
 Route::get('question/{id}', 'QuestionController@view');
