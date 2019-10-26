<?php
/**
 * Question View Page
 */
?>

@extends('layouts.default')

@section('content')
    <div class="w-100 text-center mb-4" itemscope itemtype="http://schema.org/Question">
        <h1 itemprop="text">{{ $question->question }}</h1>
    </div>
    
    @include('question.answer')
    @include('question.answers')

    <div class="w-100 mb-4">
        <a href="/">Back to other questions</a>
    </div>
@stop