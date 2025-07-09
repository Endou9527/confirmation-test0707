<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\WeightLogController;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterStep1Request;
use App\Http\Requests\RegisterStep2Request;
use App\Models\User;
use App\Models\WeightTarget;


class UserController extends Controller
{
// 会員登録画面（STEP1）を表示する
    public function step1(){
        return view('auth.register_step1');
    }

    // 会員登録画面（STEP2へ移行する）
    public function step2(RegisterStep1Request $request){
       session(['register_step1' => $request->validated()]);
        return view('auth.register_step2');
    }

    // 会員登録処理（DB保存）
    public function register(RegisterStep2Request $request){
        $step1 = session('register_step1');
        $user = User::create([
            'name' => $step1['name'],
            'email' => $step1['email'],
            'password' => bcrypt($step1['password']),
        ]);
        WeightTarget::create([
            'user_id' => $user->id,
            'target_weight' => $request->target_weight,
        ]);
        Auth::login($user);
        return redirect('/login');
    }

    // // ログイン画面を表示する
    // public function login(){
        
    //     return view('auth.login');
    // }

    public function logout(Request $request){
        Auth::logout(); // ログアウト処理

    $request->session()->invalidate(); // セッションを無効化
    $request->session()->regenerateToken(); // CSRFトークンを再生成

    return redirect('/login');
    }
}
