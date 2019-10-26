<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{

    const STATUS_ERROR = 'error';
    const STATUS_SUCCESS = 'success';

    /**
     * Index Action
     */
    public function index()
    {
        $questions = Question::orderBy('created_at', 'desc')
        ->take(20)
        ->get();

        $placeholder = $this->getRandomPlaceholder();
        return view('pages.index', compact('questions', 'placeholder'));
    }

    /**
     * Get a random placeholder
     */
    public function getRandomPlaceholder()
    {
        $placeholders = [
            'Ask me a something funny',
            'Got something on your mind? ask away?',
            'We\'re all friends here....ask me anything'
        ];
        $random = array_rand($placeholders, 1);
        return $placeholders[$random];
    }

    /**
     * Ask Action
     */
    public function submitQuestion()
    {
        $question = new Question();
        $questionText = trim(request('question'));
        if (!$questionText) {
            session()->flash(self::STATUS_ERROR, 'Please ask a question');
            return redirect()->back();
        }

        // If the question is too short
        if (strlen($questionText) < 5) {
            session()->flash(self::STATUS_ERROR, 'Your question must be at least 5 characters long');
            return redirect()->back()->withInput();
        }

        // Add a question mark if it's not the last character
        if (substr($questionText, -1) !== '?') {
            $questionText = $questionText . '?';
        }
        $question->question = $questionText;
        $question->save();
 
        session()->flash(self::STATUS_SUCCESS, 'Thanks for asking a question.');
        return redirect()->back();
    }

    /**
     * Answer Action
     */
    public function submitAnswer()
    {
        $answer = new Answer();
        $questionId = request('question_id');
        $answerText = trim(request('answer'));
        if (!$answerText) {
            session()->flash(self::STATUS_ERROR, 'Please add an answer');
            return redirect()->back();
        }

        // If the question is too short
        if (strlen($answerText) < 5) {
            session()->flash(self::STATUS_ERROR, 'Your answer must be at least 5 characters long');
            return redirect()->back()->withInput();
        }
        $answer->answer = $answerText;
        $answer->question_id = $questionId;
        $answer->save();

        session()->flash(self::STATUS_SUCCESS, 'Thanks for answering the question.');
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
        ->take(20)
        ->orderBy('created_at', 'asc')
        ->get();

        return view('question.view', compact('question', 'answers'));
    }
}
