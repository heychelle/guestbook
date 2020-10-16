@extends('layout.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <h1 class="col">
Masukkan Data
        </h1>
    </div>
<div class="row">
<div class="col">
<form action="{{route('event.store')}}" method="post">
    {{csrf_field()}}
<div class="form-group">
    <label>Title:</label>
<input type="text" class="form-control" name="title">
</div>
<div class="form-group">
<label>Description:</label>
<textarea class="form-control" name="description"></textarea>
</div>
<div class="form-group">
    <label for="tanggal">Event Date:</label>
    <input type="date" class="form-control" name="event_date">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
    @endsection