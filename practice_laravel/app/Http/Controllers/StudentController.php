<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DataTables;

class StudentController extends Controller
{
    //mengambil data dari database
    public function index(){
        $data['student'] = Student::all();
        return view ('student', $data);
    }

    //menetapkan data pada form untk input
    public function create(){
        $data['gender'] = ['L','P'];
        $data['departement'] = ['S1 RPL','S1 Informatika', 'S1 Sistem Informasi'];

        return view('student_create', $data);
    }

    //menginputkan data ke database
    public function store(Request $request){
        $request->validate([
            'nim' => 'required|size:8,unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'departement' => 'required',
            'address' => '',
        ]);
    $student = new Student();
    $student->nim = $request->nim;
    $student->name = $request->name;
    $student->gender = $request->gender;
    $student->departement = $request->departement;
    $student->address = $request->address;
    $student->save();

    return redirect(route('student.index'))->with('pesan','Data Berhasil Ditambahkan');
    }

    //menetapkan data pada form untk update
    public function edit($id){
        $data['gender'] = ['L','P'];
        $data['departement'] = ['S1 RPL','S1 Informatika', 'S1 Sistem Informasi'];
        $data['student'] = Student::find($id);

        return view ('student_edit', $data);
    }

    //menginputkan data pada database
    public function update(Request $request, $id){
        $request->validate([
            'nim' => 'required|size:8,unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'departement' => 'required',
            'address' => '',
        ]);
        $student = Student::find($id);
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->departement = $request->departement;
        $student->address = $request->address;
        $student->save();
    
        return redirect(route('student.index'))->with('pesan','Data Berhasil Diupdate');
    }

    //menghapus data pada database
    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();

        return redirect(route('student.index'))->with('pesan','Data Berhasil dihapus!');
    }
    
    // fungsi untuk  proses pada membaca data menggunakan DataTables
    public function data(Request $request) {
        if ($request->ajax()) {
            $data = Student::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="'.route('student.edit',['id' => $row->id]).'" class="edit btn btn-success btn-sm">Edit</a>
                                <a href="'.route('student.data.destroy',['id' => $row->id]).'" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </div>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        // return menampilakn student_data
        return view('student_data');
    }
}
