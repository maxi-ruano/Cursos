@extends('layouts.plantilla')

@section('title','cursos create')
@section('content')
<div class='content-create'>

    <br><br><br><br><br>
<h1 class="text-white font-weight-bold">COURSE CREATE</h1>

<br><br><br><br><br><br><br><br><br>
<div class="row gx-4 gx-lg-5 justify-content-center mb-5">
    <div class="col-lg-6">
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" action="{{route('cursos.store')}}" method="POST" >
            @csrf
            <!-- Name input-->
            <div class="form-floating mb-8">
                <input class="form-control" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" value='{{old('name')}}' />
                <label for="name">CURSO</label>
                @error('name')
            <br>
              <small>{{$message}}</small>
              <br>
              @enderror
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <br>
            <!-- Email address input-->
            
            <!-- Phone number input-->
            
            <!-- Message input-->
            <div class="form-floating mb-3">
                <textarea class="form-control"  type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" name='description' rows='5' >{{old('description')}}'</textarea>
                <label for="message">DESCRIPTION</label>
                @error('description')
              <br>
              <small>{{$message}}</small>
              <br>
              @enderror
                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="categoria" type="text" placeholder="Enter your name..." data-sb-validations="required" value='{{old('categoria')}}' />
                <label for="name">CATEGORY</label>
                @error('categoria')
               <br>
               <small>{{$message}}</small>
               <br>
               @enderror
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    {{-- <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> --}}
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <br><br><br><br><br>
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Submit Button-->
            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">SUBMIT FORM</button></div>
        </form>
    </div>
</div>





{{-- <div class="row gx-2 gx-lg-2 justify-content-center mb-4">
    <div class="col-lg-3">
<form id="contactForm" action="{{route('cursos.store')}}" method="POST">
    @csrf

    <label>
     <p>Name:</p> 
      <input class="form-control" placeholder="Enter your name..." data-sb-validations="required"  type="text" name="name" value='{{old('name')}}'></label>
    </label>
    @error('name')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
    <br>
    <label>
        <p>DESCRIPTION:</p>
        <textarea class="form-control"placeholder="Enter the description..." name='description' rows='5' >{{old('description')}}' </textarea>
    </label>
    @error('description')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
    <br>
    <label>
      <p>Category:</p> 
        <input class="form-control" placeholder="Enter the category..." type="text" name="categoria" value='{{old('categoria')}}'>
        
    </label>
    @error('categoria')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <button type="submit" class="btn btn-success">ENVIAR FORMULARIO</button>
</form>
    </div>
</div>
</div> --}}
@endsection






