<section class="w-100 mb-4 pb-4 border-bottom">
    <h2>Ask me anything?</h2>
    <form method="POST" action="/question/ask">
        {{ csrf_field() }}
        <label for="question">Question</label>
        <textarea name="question" id="question" placeholder="Enter your question here"></textarea>
        <button type="submit">Submit</button>
    </form>
</section>