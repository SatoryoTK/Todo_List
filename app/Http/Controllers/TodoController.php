<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from todo_content');
        return view('todo', ['items' => $items]);
    }
    public function add()
    {
        return redirect('add');
    }
    public function create(Request $request)
    {
        $param = [
            'todo_contents' => $request->add,
        ];
        DB::table('todo_contents')->insert($param);
        return view('add');
    }
}
