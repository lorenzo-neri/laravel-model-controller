@extends ('layout.app')

@section ('content')
<main class="bg-warning">


    <div class="container">
        <h1>
            {{$message}}
        </h1>
        <div class="row row-cols-3">
            @foreach ($movies as $i => $movie)
            <div class="col p-3">
                <div class="card">
                    <img src="https://picsum.photos/500/500?random={{$i}}" class="card-img-top" alt="{{$movie['title']}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$movie['title']}}</h2>
                            <h6 class="card-subtitle mb-2 text-muted ">Original Title: {{$movie['original_title']}}</h6>
                            <p class="card-text">Nationality: {{$movie['nationality']}}</p>
                            <p class="card-text">Date: {{$movie['date']}}</p>
                            <p class="card-text">Vote: {{$movie['vote']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</main>
@endsection