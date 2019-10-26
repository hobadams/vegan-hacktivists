<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionController extends Controller
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
    public function submitQuestion()
    {
        $question = new Question();
        if (!request('question')) {
            session()->flash('error', 'Please ask a question');
            return redirect()->back();
        }
        $question->question = request('question');
        $question->save();
 
        session()->flash('success', 'Thanks for asking a question.');
        return redirect()->back();
    }

    /**
     * Answer Action
     */
    public function submitAnswer()
    {
        $answer = new Answer();
        $questionId = request('question_id');
        if (!request('answer')) {
            session()->flash('error', 'Please add an answer');
            return redirect()->back();
        }
        $answer->answer = request('answer');
        $answer->question_id = $questionId;
        $answer->save();

        session()->flash('success', 'Thanks for answering the question.');
        return redirect()->back();
    }


    /**
     * Question View
     * @todo - Handle Pagination
     */
    public function view($id)
    {
        $question = Question::where('id', $id)
        ->first();

        $answers = Answer::where('question_id', $id)
        ->take(10)
        ->get();

        return view('question.view', compact('question', 'answers'));
    }
}
