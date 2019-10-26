<section class="w-100 mb-4 pb-4 border-bottom">
    <h3>Answer the question</h3>
    <form method="POST" action="/question/submit/answer">
        {{ csrf_field() }}
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <label for="answer">Answer</label>
        <textarea name="answer" id="answer" placeholder="Enter your answer here" required></textarea>
        <button type="submit">Submit</button>
    </form>
</section>