@extends('layouts.default')
@section('content')
  @foreach($items as $item)
  <tr>
    <td>
      {{$item->created_at}}
      {{$item->updated_at}}
    </td>
    <form action="/update" method="post" name="content">
    @csrf
      <td>
        <input type='text' name="content" style="width:85%;height:20px;" value="{{$item->content}}">
      </td>
      <td>
        <button class="update_button" type='submit'>更新</button>
      </td>
      <td>
        <button class="delete_button" formaction="/delete">削除</button>
      </td>
    </form>
  </tr>
  @endforeach
@endsection