@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ads</div>

                <div class="card-body">
                    @foreach($ads as $ad)
                        {{ $ad->name }} <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
