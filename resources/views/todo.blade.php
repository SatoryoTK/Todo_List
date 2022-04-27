@extends('layouts.default')
@section('content')
  @foreach($items as $item)
  <tr>
    <td>
      {{$item->created_at}}
      {{$item->updated_at}}
    </td>
    <form action="/todo/update" method="post" name="todo_content">
    @csrf
      <td>
        <input type='text' name="todo_content" style="width:85%;height:20px;" value="{{$item->content}}">
      </td>
      <td>
        <button class="update_button" type='submit'>更新</button>
      </td>
      <td>
        <button class="delete_button" formaction="/todo/delete">削除</button>
      </td>
    </form>
  </tr>
  @endforeach
@endsection