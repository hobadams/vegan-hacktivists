<section class="w-100 mb-4 pb-4">
    <h3>Answers (<span itemprop="answerCount">{{ $answers->count() }}</span>)</h3>
    @if($answers->count())
        <ul class="list-group">
            @foreach($answers as $answer)
                <li class="list-group-item" itemscope itemtype="http://schema.org/Answer">
                    <p itemprop="text"><strong>{{ $answer->answer }}</strong></p>
                    <time datetime="{{ date('y-M-d', strtotime($answer->created_at)) }}">{{ date('g:ia - dS M y', strtotime($answer->created_at)) }}</time>
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-info" role="alert">
            No one has answered this yet. Be the first?
        </div>
    @endif
</section>
