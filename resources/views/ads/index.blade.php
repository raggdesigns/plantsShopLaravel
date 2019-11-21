@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ads</div>

                <div class="card-body">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Naziv</th>
                            <th>Adresa</th>
                            <th>Telefon</th>
                            <th>Cena</th>
                            <th>Kategorija</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $ad)
                            <tr>
                                <td><img src="{{ '/images/' . $ad->image }}" width="50px"></td>
                                <td>{{ $ad->name }}</td>
                                <td>{{ $ad->address }}</td>
                                <td>{{ $ad->phone }}</td>
                                <td>{{ $ad->price }}</td>
                                <td>{{ isset($ad->category) ? $ad->category->name : '' }}</td>
                                <td>
                                    <a href="{{ route('ad.edit', [ 'ad' => $ad ]) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('ad.delete', [ 'ad' => $ad ]) }}" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
