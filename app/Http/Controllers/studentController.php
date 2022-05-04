<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  consulta a bd
        $estudiantes = Student::all();
        // dd($estudiantes [0]->id);
        return view('students/index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $aux = $_POST['apellido'];
        // dd($aux);
        // $aux = $request -> apellido;
        // dd($aux);

            // forma 1: instanciando un objeto
        // $student = new Student();
        // dd($student);
        // $student->nombre = $request->nombre;
        // $student->apellido = $request->apellido;
        // $student->dni = $request->dni;
        // $student->email= $request->email;
        // $student->password = $request->password; 
        // $student->save();
        // dd($student);
        
            // forma 2: usando elocuent -- agregar en model Student (protected $fillable = ['nombre', 'apellido', 'dni', 'email', 'password'];)
        $student = Student::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'dni'=>$request->dni,
            'email'=>$request->email,
            'password'=>'123'
        ]);

        // redireccionamiento a la ruta index
        return redirect()->route('student.index');
        
            // forma 3 DB
            // Students hace referencia al nombre de la tabla
        // DB::table('Students')->insert(
        //     array('nombre'=>$request->nombre,
        //         'apellido'=>$request->apellido,
        //         'dni'=>$request->dni,
        //         'email'=>$request->email,
        //         'password'=>'123' 
        //         // agregar un created_at y updated_at (fecha)   
        //     )
        // );

            //4ta forma
        // DB::insert('insert into Students (nombre, apellido, dni, email, password) values (?, ?, ?, ?, ?)', 
        //     [$request->nombre, $request->apellido, $request->dni, $request->email, $request->password]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $estudiante = Student::find($id);
        // $estudiantes->nombre='Javier';

        // $estudiantes->save();
        return view('students/edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = Student::find($id);
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->dni = $request->dni;
        $estudiante->email= $request->email;
        $estudiante->password = $request->password; 
        $estudiante->save();
        
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id', $id)->delete();
        return redirect()->route('student.index');
    }
}
