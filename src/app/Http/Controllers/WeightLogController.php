<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Models\WeightTarget;

class WeightLogController extends Controller
{

    // 管理画面を表示
    public function show(){
        $weightLogs = WeightLog::all();
        $targetWeight = WeightTarget::first();
        $latestWeight = WeightLog::orderBy('date','desc')->first();
        $gapWeight = $latestWeight->weight - $targetWeight->target_weight ;
        return view('admin',compact('weightLogs','targetWeight','latestWeight','gapWeight'));
    }
    // 「追加」登録
    public function create(Request $request){
        $weightLog = $request->all();
        WeightLog::create([
            'user_id' => Auth::id(),
            'date' => $request->date,
            'weight' => $request->weight,
            'calories' => $request->calories,
            'exercise_time' => $request->exercise_time,
            'exercise_content' => $request->exercise_content
        ]);
        return redirect('/weight_logs');
    }
    // 体重検索結果を表示
    public function search(){
        return view('search');
    }
    // 体重記録の詳細を表示
    public function detail(){
        return view('detail');
    }
    // 体重記録を更新する
    public function update(){
        redirect('/admin');
    }
    // 体重記録を削除する
    public function destroy(){
        redirect('/admin');
    }
    // 目標設定画面を表示する
    public function setting(){
        return view('goal_setting');
    }
    // 目標体重を更新する
    public function target(){
        redirect('/admin');
    }
}
