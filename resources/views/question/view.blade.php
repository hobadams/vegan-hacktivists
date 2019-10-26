<?php
/**
 * Question View Page
 */
?>

@extends('layouts.default')

@section('content')
    <div class="w-100 text-center mb-4">
        <h1>{{ $question->question }}</h1>
    </div>
    
    @include('question.answer')
    @include('question.answers')
@stop