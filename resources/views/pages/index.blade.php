<?php
/**
 * Home Page
 */
?>

@extends('layouts.default')

@section('content')
    <div class="w-100 text-center mb-4">
        <h1>Questions &amp; Answers</h1>
    </div>

    @include('question.ask')
    @include('question.list')
    
@stop