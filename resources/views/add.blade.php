@extends('layouts.default')
@section('content')
  @foreach($items as $item)
  <tr>
    <td>
      {{$item->updated_at}}
    </td>
    <form action="/update" method="get">
      <td><input type='text' name="todo_content" style="width:85%;height:20px;" value={{$item->content}}></td>
      <td><input type="submit" value="更新" class="update_button" ></td>
      <td><input type="submit" value="削除" class="delete_button" formaction="/delete"></td>
    </form>
  </tr>
  @endforeach
@endsection