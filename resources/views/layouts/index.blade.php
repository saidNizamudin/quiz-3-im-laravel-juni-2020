@extends('layouts.master')

@section('content')
    <button type="submit" class="btn btn-primary btn-info"><a href="/article/create" class="text-light">Create New</a></button>
    @foreach ($articles as $article)
        <hr>
        <h4 class="font-weight-bold">Judul : {{$article->judul}}</h4>
        <h5>Slug : {{$article->slug}}</h5>
        <p>{{$article->isi}}</p>
        <button type="submit" class="btn btn-primary btn-info"><a href="/article/{{$article->id}}" class="text-light">Info</a></button>
        <button type="submit" class="btn btn-primary btn-info"><a href="/article/{{$article->id}}/edit" class="text-light">Edit</a></button>
        <form action="/article/{{$article->id}}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary btn-danger " >Delete</button>
        </form>
    @endforeach
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush
