<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa_m;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors(),
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['name'] = $user->name;

        return response()->json([
            'success' => true,
            'message' => 'Sukses Register',
            'data' => $success
        ]);
    }

    public function login(Request $request){
        if(Auth::attempt(['regist_id' => $request->id, 'password' => $request->password])){
            $mahasiswa = DB::table('mahasiswa')
            ->select('NAMA', 'ID', 'ANGKATAN', 'IDPRODI', 'CSS', 'SETTINGTAMPILAN')
            ->where('ID', $request->id)
            ->where('STATUS', 'A')
            ->first();

            if (isset($mahasiswa)) {
                $success['status'] = 'Mahasiswa';
                $success['name'] = $mahasiswa->NAMA;
                $success['id'] = $mahasiswa->ID;
                $success['angkatan'] = $mahasiswa->ANGKATAN;
                $success['idprodi'] = $mahasiswa->IDPRODI;
                $success['css'] = $mahasiswa->CSS;
                $success['settingtampilan'] = $mahasiswa->SETTINGTAMPILAN;
            }

            $dosen = DB::table('dosen')
            ->select('NAMA', 'ID', 'CSS', 'SETTINGTAMPILAN')
            ->where('ID', $request->id)
            ->where('STATUS', 'A')
            ->first();

            if (isset($dosen)) {
                $success['status'] = 'Dosen';
                $success['name'] = $dosen->NAMA;
                $success['id'] = $dosen->ID;
                $success['css'] = $dosen->CSS;
                $success['settingtampilan'] = $dosen->SETTINGTAMPILAN;
            }

            $admin = DB::table('user')
            ->select(
                'NAMA',
                'TINGKAT',
                'JENIS',
                'IDPRODI',
                'SETTINGTAMPILAN',
                'CSS',
                'LOGINWAKTU',
                DB::raw('IF(CURTIME() >= JAM1 AND CURTIME() <= JAM2, 1, 0) AS STATUSWAKTU'),
                'JAM1',
                'JAM2'
            )
            ->where('ID', $request->id)
            ->first();

            if (isset($admin)) {
                $success['status'] = 'Admin';
                $success['name'] = $admin->NAMA;
                $success['tingkat'] = $admin->TINGKAT;
                $success['jenis'] = $admin->JENIS;
                $success['idprodi'] = $admin->IDPRODI;
                $success['settingtampilan'] = $admin->SETTINGTAMPILAN;
                $success['css'] = $admin->CSS;
                $success['loginwaktu'] = $admin->LOGINWAKTU;
                $success['statuswaktu'] = $admin->STATUSWAKTU;
                $success['jam1'] = $admin->JAM1;
                $success['jam2'] = $admin->JAM2;
            }

            $auth = Auth::user();
            $token = $auth->createToken('auth_token')->plainTextToken;

            return response()->json([
                'success' => true,
                'message' => 'Login Sukses',
                'data' => $success,
                'token' => $token
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Cek ID dan Password',
                'data' => null
            ]);
        }
    }

    public function getMahasiswa(){
        $products = Mahasiswa_m::take(10)->get();
        return response()->json([
            'products' => $products
        ]);
    }
}
