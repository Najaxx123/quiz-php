<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Quiz;

class QuizController extends Controller
{
    function index() {
        $quizzes = Quiz::all();
        return view('quiz', ['quizzes' => $quizzes]);
    }
}
