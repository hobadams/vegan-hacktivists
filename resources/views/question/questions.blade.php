<section class="w-100 mb-4">
    <h3>Questions</h3>
    @if($questions->count())
        <ul>
            @foreach($questions as $question)
                <li itemscope itemtype="http://schema.org/Question">
                    <a href="/question/{{ $question->id }}" itemprop="text">{{ $question->question }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No one has asked a question yet. Why not ask one?</p>
    @endif
</section>