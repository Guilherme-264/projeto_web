<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
@foreach($pokemon as $entidade)
    <div class="text-bg-dark">
        <h3>{{ $entidade->nome }}</h3>
        <p>{{ $entidade->tipo }}</p>
        <p>{{ $entidade->pontos_de_poder }}</p>
        <a href="{{ url('pokemon/'.$entidade->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$entidade->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach