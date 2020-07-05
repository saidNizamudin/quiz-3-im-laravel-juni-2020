@extends('layouts.master')

@section('content')
    @foreach ($article as $article)
        <h4 class="font-weight-bold">Judul : {{$article->judul}}</h4>
        <h5>Slug : {{$article->slug}}</h5>
        <p>{{$article->isi}}</p>
        @foreach($tag as $item)
        <button type="submit" class="btn btn-primary btn-success">{{$item}}</button>
        @endforeach
        <br><br><hr>
        <button type="submit" class="btn btn-primary btn-info"><a href="/article" class="text-light">Back</a></button>
        <button type="submit" class="btn btn-primary btn-info"><a href="/article/{{$article->id}}/edit" class="text-light">Edit</a></button>
        <form action="/article/{{$article->id}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary btn-danger " >Delete</button>
        </form>
    @endforeach
@endsection
