@extends('layouts.default')
@section('content')
  @foreach($items as $item)
  <tr>
    <td>
      {{$item->created_at}}
    </td>
    <form action="/update" method="post">
      @csrf
      <td>
        <input type='text' name="todo_content" style="width:85%;height:20px;" value="{{$item->content}}">
      </td>
      <td>
        <button class="update_button" >更新</button>
      </td>
      <td>
        <button class="delete_button" formaction="/delete">削除</button>
      </td>
    </form>
  </tr>
  @endforeach
@endsection