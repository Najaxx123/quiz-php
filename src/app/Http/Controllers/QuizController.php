<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Quiz;

class QuizController extends Controller
{
    function index() {
        $quizs = Quiz::all();
        return view('quiz', ['quizs' => $quizs]);
    }
}
