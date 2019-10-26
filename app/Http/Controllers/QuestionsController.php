<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    /**
     * Index Action
     */
    public function index()
    {
        $questions = Question::all();
        return view('pages.index', compact('questions'));
    }

    /**
     * Ask Action
     */
    public function submit()
    {
        //die('hob');

        $question = new Question();
        $question->question = request('question');
        $question->save();
 
        return redirect('/');
    }
}
