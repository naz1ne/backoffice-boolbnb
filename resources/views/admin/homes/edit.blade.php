@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 py-4">Edit {{$home->title}}</h1>
    </div>
    <form action="{{route('admin.homes.update', $home->slug)}}" method="post" class="card p-3" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="mb-3">
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome" value="{{old('title', $home->title)}}" aria-describedby="helpId" required>
        </div>
        <div class="mb-3">
            <input type="number" name="rooms" id="rooms" class="form-control" placeholder="Stanze" value="{{old('rooms', $home->rooms)}}" aria-describedby="helpId" required>
        </div>
        <div class="mb-3">
            <input type="number" name="beds" id="beds" class="form-control" placeholder="Letti" value="{{old('beds', $home->beds)}}" aria-describedby="helpId" required>
        </div>
        <div class="mb-3">
            <input type="number" name="bathrooms" id="bathrooms" class="form-control" placeholder="Bagni" value="{{old('bathrooms', $home->bathrooms)}}" aria-describedby="helpId" required>
        </div>
        <div class="mb-3">
            <input type="number" name="square_meters" id="square_meters" class="form-control" placeholder="Metri quadrati" value="{{old('square_meters', $home->square_meters)}}" aria-describedby="helpId" required>
        </div>
        <div class="mb-3">
            <input type="text" name="address" id="address" class="form-control" placeholder="Indirizzo, Numero Civico" value="{{old('address', $home->address)}}" aria-describedby="helpId" required>
        </div>
        <div class="mb-3">
            <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitudine" value="{{old('latitude', $home->latitude)}}" aria-describedby="helpId" required>
        </div>
        <div class="mb-3">
            <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Longitudine" value="{{old('longitude', $home->longitude)}}" aria-describedby="helpId" required>
        </div>
        <div class="mb-3 d-flex">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="1" @if(old('visible',$home->visible)=="1") checked @endif name="visible" id="visible_1" >
                <label class="form-check-label" for="flexRadioDefault1">
                    Visible
                </label>
            </div>
            <div class="form-check px-5">
                <input class="form-check-input" value="0" type="radio" name="visible" value="0" @if(old('visible',$home->visible)=="0") checked @endif id="visible_0" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Not Visible
                </label>
            </div>
        </div>
        <div class="mb-3 d-flex align-items-center gap-4">
            <img width="200px" src="{{asset('storage/' . $home->cover_image)}}">
            <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder="Aggiungi un'immagine" aria-describedby="coverImgHelper">
        </div>
        <button type="submit" class="btn btn-primary">Invia!</button>
    </form>
</div>
@endsection