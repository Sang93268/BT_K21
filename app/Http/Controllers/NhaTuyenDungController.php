<?php

namespace App\Http\Controllers;

use App\Models\NhaTuyenDung;
use Illuminate\Http\Request;

class NhaTuyenDungController extends Controller
{
    public function login(Request $request)
    {
        $nhaTuyenDung = NhaTuyenDung::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if (!$nhaTuyenDung) {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản không tồn tại'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                'token' => $nhaTuyenDung->createToken('token_nha_tuyen_dung')->plainTextToken
            ]);
        }
    }
}
