<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>@yield('judul')</title>
</head>

<body style="background-color: #fffbf1">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#ff9c8a">
        <a class="navbar-brand" href="/home"><img src="{{ asset('images/mascot.png')}}" alt="" style="width:42px;height:42px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/header">Page 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dalam">Page 2</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('isi_utama')

{{-- <div class="align-middle"  style="width:100%;height:60px;background-color:#ff9c8a">
    © 2020 Copyright: Heychelle
</div> --}}
&nbsp
<div class="p-3 mb-2 text-dark" style="margin-bottom: 0; background-color: #ff9c8a">
        <div class="col-md-12" style="text-align: center">    © 2020 Copyright: <a href="/home" class="text-reset">Heychelle</a>        </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

</html>
