<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TodoController extends Controller
{
    public function index()
    {
        $items = DB::table('todo_contents')->get();
        return view('todo', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $param = [
            'content' => $request->add,
            'created_at' => Carbon::now(),
        ];
        DB::table('todo_contents')->insert($param);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'content' => $request->content,
            'updated_at' => Carbon::now(),
        ];
        DB::table('todo_contents')->where('id', $request->id)->update($param);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $param = [
            'id' => $request->id,
        ];
        DB::table('todo_contents')->where('id', $request->id)->delete();
        return redirect('/');
    }
}