<?php

namespace App\Http\Controllers;

use App\Models\CongViec;
use App\Models\NhaTuyenDung;
use App\Models\UngTuyen;
use App\Models\UngVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UngVienController extends Controller
{
    public function login(Request $request)
    {
        $ungVien = UngVien::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if (!$ungVien) {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản không tồn tại'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                'token' => $ungVien->createToken('token_ung_vien')->plainTextToken
            ]);
        }
    }
}
