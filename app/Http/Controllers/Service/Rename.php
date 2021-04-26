<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Player;

class Rename extends Controller
{
    //
    public function ShowPlayerList()
    {
        $userId = Auth::id();
        $playerList = Player::where('account_id', $userId)->get();
        return view("service.rename", ['playerList' => $playerList]);
    }

    public function RenamePlayer(Request $request)
    {
        // dd($request->session());
        $validateData = $request->validate([
            'name' => [
                'regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u',
                'min:4'],
            'gold' => 'gte:100000',
        ], [
            'name.regex' => '禁止使用特殊字符',
            'name.min' => '至少需要4个字符',
            'gold.gte' => '金币不足',
        ]);
        $player = Player::find($request->id);
        $player->name = $request->name;
        if ($player->gold < 100000) {
            return \redirect('rename')->with('message',['type'=>'warning','content'=>'金币不足']);
        }
        $player->gold = $player->gold - 100000;
        $player->save();
        return \redirect('rename')->with('message',['type'=>'success','content'=>'改名成功']);
    }
}
