@extends ('layouts.master', ['title' => 'thoughtbubble.cc - '. $comic->title])
@section('content')
        <ul>
            @foreach ($comics as $comic)
                <li> {{ $comic->title }} </li>
            @endforeach
        </ul>
            <div class="container text-center" id="main-container">
                <div class="box">
                    <img  id="comic-image" src="/images/comic.png">
                </div>
            </div>
 @endsection
