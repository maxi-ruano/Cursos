@extends('layouts.plantilla')

@section('title','cursos'.$curso->name)
{{-- <style>
 h1   {
    animation:animate__tada; 
  animation-duration: 2s;
    }
</style> --}}
@section('content')
<div class="content-show">
    <br><br><br><br>

<h1 class="text-white font-weight-bold" >WELCOME TO THE COURSE {{$curso->name }}  </h1><br><br>
<div class="mt-5">
<p class="text mb-10">
    <strong>
        CATEGORY:
    </strong>
    {{$curso->categoria}}
</p>
<br><br><br>
<p class="text mb-0"> 
    <strong>
    DESCRIPTION:
    </strong>
    {{$curso->description}}

</p>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a class="btn btn-primary" href="{{route('cursos.edit',$curso)}}" role="button">EDIT</a><br><br>
<form action="{{route('cursos.destroy',$curso)}}" method="POST" class='formulario-eliminar'>
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">DELETE</button>
    <div class='boton-volvercurso'>
    <a class="btn btn-primary" href="{{route('cursos.index')}}" role="button">BACK TO COURSE PAGE</a><br><br>
</div>
</form>

</div>



@endsection









    