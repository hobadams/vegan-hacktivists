<section class="w-100 mb-4">
    <h3>Questions</h3>
    @if($questions->count())
        <ul class="list-group">
            @foreach($questions as $question)
                <li class="list-group-item" itemscope itemtype="http://schema.org/Question">
                    <a href="/question/{{ $question->id }}" itemprop="text">{{ $question->question }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-info" role="alert">
            No one has asked a question yet. Be the first?
        </div>
    @endif
</section>