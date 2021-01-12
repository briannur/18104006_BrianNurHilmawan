<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Student;

class StudentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return response()->json($student, 200);
    }

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
        // data akan di validasi ketika input validasi gagal, akan ditentukan oleh kondisi true or false, dengan pada method fails(). kemudian returnnya berupa response dalam bentuk json.
        $validateData = Validator::make($request->all(),[
            'nim' => 'required|size:8|unique:students,nim',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => ' ',
        ]);

        if($validateData->fails()){
            return response($validateData->errors(), 400);
        } else {
            $mahasiswa = new Student();
            $mahasiswa->nim = $request->nim;
            $mahasiswa->name = $request->nama;
            $mahasiswa->gender = $request->jenis_kelamin;
            $mahasiswa->departement = $request->jurusan;
            $mahasiswa->address = $request->alamat;
            $mahasiswa->save();
            return response()->json([
                'message' => 'student record created'
            ], 201);
        }
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
        //
    }

    public function update(Request $request, $id)
    {
        // fungsi untuk proses pada form update/edit data. data akan di validasi/dicek berdasarkan id kemudian baru dapat melakukan update data
        if(Student::where('id', $id)->exists()) {
            $validateData = Validator::make($request->all(),[
                'nim' => 'required|size:8|unique:students,nim',
                'nama' => 'required|min:3|max:50',
                'jenis_kelamin' => 'required|in:P,L',
                'jurusan' => 'required',
                'alamat' => ' ',
            ]);

            if($validateData->fails()) {
                return response($validateData->errors(), 400);
            }else{
                $mahasiswa = Student::find($id);
                $mahasiswa->nim = $request->nim;
                $mahasiswa->name = $request->nama;
                $mahasiswa->gender = $request->jenis_kelamin;
                $mahasiswa->departement = $request->jurusan;
                $mahasiswa->address = $request->alamat;
                $mahasiswa->save();
                return response()->json([
                    'message' => 'Student record updated'
                ], 201);
            }
        } else {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }
    }

    public function destroy($id)
    {
        // fungsi untuk proses pada form delete/hapus data. data akan di validasi/dicek berdasarkan id kemudian baru dapat melakukan delete data
        if(Student::where('id', $id)->exists()){
            $mahasiswa = Student::find($id);
            $mahasiswa->delete();
            return response()->json([
                'message' => 'Student record deleted'
            ], 404);
        } else {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }
    }
}
