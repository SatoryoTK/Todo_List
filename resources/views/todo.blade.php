@extends('layouts.default')
@section('content')
  @foreach($items as $item)
  <tr>
    <td>
      @empty($item->updated_at)
        <p>{{$item->created_at}}</p>
      @else
        <p>{{$item->updated_at}}</p>
      @endempty
    </td>
    <form action="/todo/update" method="post" name="content">
    @csrf
      <td>
        <input type="hidden" value="{{$item->id}}" name="id">
        <input type='text' name="content" style="width:85%;height:20px;" value="{{$item->content}}" required minlength='1' maxlength='20'>
      </td>
      <td>
        <button class="update_button" type='submit'>更新</button>
      </td>
      <td>
        <button class="delete_button" formaction="/todo/delete" type="submit">削除</button>
      </td>
    </form>
  </tr>
  @endforeach
@endsection