@extends('layouts.admin')

@section('main-content')
<!-- css animasi loader -->
<!-- comment jika butuh -->
 <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: rgba(0, 0, 0, 0.8);
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      
    }
    </style><script>
    $(document).ready(function(){
      $(".preloader").fadeOut(2000);
    })
    </script>
    <div class="preloader">
      <div class="loading">
        <img src="{{asset('img/loading.gif')}}">
      </div>
    </div>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<style type="text/css">
    .btn-group:hover>.dropdown-menu {
        display: block;
    }
</style>
<!-- Page Heading -->


@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="row mb-3 justify-content-end bg-image" style=" background-image: url('img/tol1.jpg');  height: 40vh;">
    <div class="col-md-7 d-flex align-items-center pb-4">
        <div class="text-white bayangan">
            <h1 class="mb-6">Dashboard</h1>
            <p class="h2 text-end">Hello!
                Welcome back {{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="col-md-5 d-flex align-items-center pb-4">
        <!-- <img class="img-fluid w-75" src="{{ asset('images/image-hero.png') }}" alt="Hero Image"> -->
    </div>
</div>

<div class="position-relative">
    <div class="position-absolute top-0 start-0 translate-middle">
        <form action="" method="get">
            <div class="input-append">
                <input type="text" class="input-large search-query" name="s" placeholder="Pencarian..." value="{{ Request()->s }}"
                    style="width: 65%">
                <button type="submit" class="btn btn-sm btn-primary add-on"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>


  
<form action="" method="get">
    <div class="d-flex justify-content-end mb-5">
        <select class="form-control select2" style="width: 17%" name="q">
            <option value="" selected="selected">All</option>
            @foreach ($groups as $group)
            <option value="{{ $group->id }}" {{ Request()->q == $group->id ? 'selected' : null }}>{{ $group->name }}</option>
            @endforeach
        </select>

        <br><button type="submit" class="btn btn-primary">filter</button></br>
    </div>
</form>
<div class="row row-cols-3 row-cols-md-4 g-6">
@forelse ($applications as $application)
  <div class="col">
  <div class="card border-left-warning shadow h-100 py-2">
      <img class="card-img rounded mx-auto d-block" src="{{ asset("images/{$application->application->image}") }}"   alt="{{$application->application->name }}" style="height:130px; width: 200px; object-fit:cover;">
      <div class="card-body">
      <h6 class="text-xs font-weight-bold md-1">{{$application->application->group->name }}</h6>
        <h5 class="card-title font-weight-bold text-primary">{{ $application->application->name}}</h5>
        <!-- <p class="card-text">Penjelasan singkat</p> -->
  </div>
    <a href="{{ $application->application->url }}" target="_blank" class="stretched-link"></a>
            </div>
    </div>
    @empty
    <p class="text-center">Tidak ada daftar aplikasi</p>
    @endforelse
<!-- <div class="owl-carousel owl-theme partner">
    @forelse ($applications as $application)
    <div class="item">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-header">
                <img class="img-fluid w-100" src="{{ asset("images/{$application->application->image}") }}"
                alt="{{
                $application->application->name }}" style="height:100px; object-fit:cover;">
            </div>
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{
                            $application->application->group->name }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $application->application->name
                            }}</div>
                    </div>
                </div>
                <a href="{{ $application->application->url }}" target="_blank" class="stretched-link"></a>
            </div>
        </div>
    </div>
    @empty
    <p class="text-center">Tidak ada daftar aplikasi</p>
    @endforelse
</div> -->
<br>
<br>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script>
    $('.partner').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            margin: 10,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
</script>
@endsection