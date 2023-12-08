<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_m;
use Illuminate\Http\Request;
use Validator;

class MahasiswaController extends Controller
{
    public function dashboard() {
        return view('mahasiswa.dashboard');
    }

    public function profile() {
        return view('mahasiswa.profile.profile');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'email' => 'required',
            'catatan' => 'required',
        ]);

        Mahasiswa_m::create([
            'name' => $request->name,
            'status' => $request->status,
            'email' => $request->email,
            'catatan' => $request->catatan,
        ]);

        return redirect('/mahasiswa/dashboard');
    }

    public function createData(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required',
            'email' => 'required',
            'catatan' => 'required|max:100'
        ]);

        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ]);
        }

        Mahasiswa_m::create([
            'name' => $request->name,
            'status' => $request->status,
            'email' => $request->email,
            'catatan' => $request->catatan,
        ]);

        return response()->json([
            'message' => 'Success create data'
        ]);
    }

    public function getAllData(){
        $products = Mahasiswa_m::take(10)->get();
        return response()->json([
            'products' => $products
        ]);
    }

    public function getData($id){
        $mahasiswa = Mahasiswa_m::findOrFail($id);

        return response()->json([
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function searchData(Request $request){
        $mahasiswa = Mahasiswa_m::where('name', 'like', '%'.$request->product_name.'%')->get();
        return response()->json([
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function updateData(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required',
            'email' => 'required',
            'catatan' => 'required|max:100'
        ]);

        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ]);
        }

        $products = Mahasiswa_m::findOrFail($id)->update([
            'name' => $request->name,
            'status' => $request->status,
            'email' => $request->email,
            'catatan' => $request->catatan,
        ]);

        return response()->json([
            'message' => 'Success update data'
        ]);
    }

    public function deleteData($id){
        $mahasiswa = Mahasiswa_m::destroy($id);
        
        if ($mahasiswa == 0) {
            return response()->json([
                'message' => 'Failed delete data, Id tidak ditemukan'
            ]);# code...
        }
        return response()->json([
            'message' => 'Success delete data'
        ]);
    }
}
