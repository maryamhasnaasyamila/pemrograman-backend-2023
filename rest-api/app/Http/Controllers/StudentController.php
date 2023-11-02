<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menggunakan model Student untuk select data
		echo "Show All Data <br>";
        $students = Student::all();

        // $data = [
        //     'message' => 'Get all students',
        //     'data' => $students
        // ];

        if (!empty($students)) {
			$response = [
				'message' => 'Menampilkan Data Semua Student',
				'data' => $students,
			];
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data tidak ada'
			];
			return response()->json($response, 200);
		}
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "# Update Student. <br><br>";
        $input = [
			'nama' => $request->nama,
			'nim' => $request->nim,
			'email' => $request->email,
			'jurusan' => $request->jurusan
		];

		$student = Student::create($request->all());

		$response = [
			'message' => 'Data Student Berhasil Dibuat',
			'data' => $student,
		];

		return response()->json($response, 201);
	}

    public function destroy(Request $request, $id){
        echo "# Delete Student (id:$id). <br><br>";

        // menghapus data di animals
        $student = Student::find($id);
        $student->delete();

        //pesan konfirmasi
        $response = [
            'message' => 'Data Student Berhasil Dihapus',
        ];

        // memanggil method index
        return response()->json($response, 200);
    }

    public function update(Request $request, $id){
        echo "# Update Student. <br><br>";

        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        // Validasi data input
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'jurusan' => 'required',
        ]);

        // Update data mahasiswa
        $student->nama = $request->input('nama');
        $student->nim = $request->input('nim');
        $student->email = $request->input('email');
        $student->jurusan = $request->input('jurusan');
        $student->save();

        $data = [
            'message' => "Student updated successfully",
            'data' => $student,
        ];

        return response()->json($data, 200);
    }
}


    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }

