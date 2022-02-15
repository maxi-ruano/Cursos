<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use App\Models\Curso;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;

class CursoController extends Controller




{

    public function __construct()
    {
        $this->middleware('can:cursos.create')->only('create');
        $this->middleware('can:cursos.edit')->only('edit');
        $this->middleware('can:cursos.destroy')->only('destroy');
    }
    public function index(){
         $cursos=Curso::simplePaginate();
         

        return view('cursos.index',compact('cursos'));

    }


    public function create(){
        return view('cursos.create');
    }
    public function show($id){

        $curso= Curso::find($id);

        return view('cursos.show',compact('curso'));
    }

    public function store(Request $request){
$message=$request->validate([
'name' =>'required',
'description' =>'required',
'categoria'=>'required',
]);
// Mail::to('ruanomaxi@gmail.com')->send(new MessageReceived);


// return 'mensaje enviado';

        $curso = new Curso();
        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->categoria=$request->categoria;

         $curso ->save();
        return redirect()->route('cursos.show',$curso);

        
    }
   
public function edit(Curso $curso){
   

    return view('cursos.edit',compact('curso'));
}

public function update(Request $request ,Curso $curso){
    $request->validate([
        'name' =>'required|max:15',
        'description' =>'required|max:300',
        'categoria'=>'required|max:30',
        ]);
    
        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->categoria=$request->categoria;
     $curso->save();
     
     return redirect()->route('cursos.show',$curso);
    
}
public function destroy(Curso $curso){
    $curso->delete();
    return redirect()->route('cursos.index',$curso);
}

}
