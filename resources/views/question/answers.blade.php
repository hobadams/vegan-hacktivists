<section class="w-100 mb-4 pb-4">
    <h3>Answers</h3>
    @if($answers->count())
        <ul>
            @foreach($answers as $answer)
                <li>{{ $answer->answer }}</li>
            @endforeach
        </ul>
    @else
        <p>No one has answered this yet. Be the first?</p>
    @endif
</section>
