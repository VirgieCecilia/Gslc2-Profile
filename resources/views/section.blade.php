@extends('welcome')

@section('content')
    <div class="content-container">
        @foreach($data as $data)
        <div class="card mb-3 ml-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ $data['img'] }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title mb-3">{{ $data["nama"]}}</h5>
                    <div class="content-container">
                        <p class="card-text ">{{ $data["nim"]}}</p><br>
                        <div class="birth-content">
                        <img src="{{ asset('images/calendar.png') }}" alt="">
                        <p>{{ $data["birth-date"]}}</p>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-dark" href="{{ url('/$data['alt']') }}">Profile</button>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
