@extends('layouts.plantilla')

@section('title','home')
@section('content')
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">ONLINE PROGRAMMING</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">You will find everything about programming courses in a dynamic and effective way</p>
                <a class="btn btn-primary btn-xl" href="#about">Requirements</a>
            </div>
        </div>
    </div>
</header>
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">....</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">have a lot of desire to learn, have 2 or 3 hours a day and most importantly you do not need previous experience, from here you will leave as a programmer!</p>
                <a class="btn btn-light btn-xl" href="{{route('cursos.store')}}">ARE YOU READY?</a>
            </div>
        </div>
    </div>
</section>



@endsection


