<section class="w-100 mb-4 pb-4 border-bottom">
    <h3>Ask me anything?</h3>
    @include('question.feedback')
    <form method="POST" action="/question/submit/question">
        {{ csrf_field() }}
        <label for="question">Question</label>
        <textarea name="question" id="question" placeholder="Enter your question here" required></textarea>
        <button type="submit">Submit</button>
    </form>
</section>