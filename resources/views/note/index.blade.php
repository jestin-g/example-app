<ul>
@foreach($notes as $note)
    <li>
        {{$note->contenu}}
        <form action="{{ route('note.show',[$note]) }}" method="POST">
            @method('GET')
            @csrf
            <button type="submit">afficher</button>
        </form>
    </li>
    @endforeach
</ul>