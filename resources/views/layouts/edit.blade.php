@extends('layouts.master')

@section('content')
@foreach($article as $key => $value)
    <form role="form" action="/article/{{$value->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="{{$value->judul}}">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" placeholder="Isi" name="isi" value="{{$value->isi}}">
            </div>
            <div class="form-group">
                <label for="tag">Tag</label>
                {{-- @php
                  echo dd($value->tag)
                @endphp --}}
                <input type="text" class="form-control" id="tag" placeholder="Isi tag dipisahkan dengan spasi ' '(Boleh Kosong)" name="tag" value="{{$value->tag}}">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endforeach
@endsection
