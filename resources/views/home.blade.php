@extends('layout/main')
@section('judul', 'Home')
@section('isi_utama')
<div class="container">
    <h1 class="display-1">Home Here</h1>

    <div class="card" style="width: 18rem;">
        <img src="{{ asset('images/bunnygirl.png')}}" alt="">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

</div>
@endsection
