<section class="w-100 mb-4 pb-4 border-bottom">
    <h3>Answer the question</h3>
    @include('question.feedback')

    <form method="POST" action="/question/submit/answer">
        {{ csrf_field() }}
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <div class="form-group">
            <label for="answer">Your Answer</label>
            <textarea name="answer" id="answer" class="form-control" placeholder="Enter your answer here" required></textarea>   
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>