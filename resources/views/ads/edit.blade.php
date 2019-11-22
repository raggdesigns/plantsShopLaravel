@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ads</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('ad.update') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label for="name">Naziv : </label>
                            <input type="text" value="{{ $ad->name }}" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="price">Cena : </label>
                            <input type="text" value="{{ $ad->text }}" class="form-control" name="price"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Opis : </label>
                            <input type="text" value="{{ $ad->description }}" class="form-control" name="description"/>
                        </div>
                        <div class="form-group">
                            <label for="address">Adresa : </label>
                            <input type="text" value="{{ $ad->address }}" class="form-control" name="address"/>
                        </div>
                        <div class="form-group">
                            <label for="city">Grad : </label>
                            <input type="text" value="{{ $ad->city }}" class="form-control" name="city"/>
                        </div>
                        <div class="form-group">
                            <label for="category">Kategorija: </label>
                            <select class="custom-select" name="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($ad->$category) && $ad->$category->id == $category->id ? 'selected' : '' }}> {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Slika: </label>
                            <input type="file" class="form-control" name="image"/>
                            <span>
                                <img src="{{ '/images/' . $ad->image }}" width="50px">
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Izmeni oglas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
