<section class="w-100 mb-4 pb-4 border-bottom">
    <h3>Ask me anything?</h3>
    @include('question.feedback')
    <form method="POST" action="/question/submit/question">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="question">Your Question</label>
            <textarea name="question" id="question" class="form-control" placeholder="{{ $placeholder }}" required>{{ old('question') }}</textarea>   
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>