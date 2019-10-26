<section class="w-100 mb-4 pb-4">
    <h3>Answers (<span itemprop="answerCount">{{ $answers->count() }}</span>)</h3>
    @if($answers->count())
        <ul>
            @foreach($answers as $answer)
                <li itemscope itemtype="http://schema.org/Answer">
                    <div itemprop="text">{{ $answer->answer }}</div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No one has answered this yet. Be the first?</p>
    @endif
</section>
