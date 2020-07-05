@extends('layouts.master')

@section('content')
    <form role="form" action="/article" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" placeholder="Isi" name="isi">
            </div>
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" class="form-control" id="tag" placeholder="Isi tag dipisahkan dengan spasi ' '(Boleh Kosong)" name="tag">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
