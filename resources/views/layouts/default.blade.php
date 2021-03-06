<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <style>
  h1{
  margin-left: 4%;
  }
  .background{
    background-color:blueviolet;
    position: relative;
    height: 100vh;
    margin: -10px -10px ;
  }
  .main_contents{
    position: absolute;
    top: 32%;
    left:20%;
    background-color: white;
    border-radius: 10px;
    width: 60%;
    padding:0 10px 25px;
  }
  .register{
    text-align: center;
    margin-bottom: 0px;
  }
  .addition_button{
    display:inline;
    border-radius: 10%;
    border-color: rgb(137, 137, 254);
    color: rgb(137, 137, 254);
    padding:6px 16px;
    margin-left:10px;
    background-color: white;
    font-size:15px;
  }
  .addition_button:hover{
    color:white;
    background-color: rgb(137, 137, 254);
    transition: 1s;
  }
  th{
    table-layout:fixed;
    width: 400px;
    height: 60px;
  }
  td{
    table-layout:fixed;
    width: 400px;
    text-align: center;
  }
  .update_button{
    display: inline-block;
    border-radius: 10%;
    border-color: rgb(204, 177, 0);
    font-size: 15px;
    color: rgb(204, 177, 0);
    padding: 5px 15px;
    margin-left: 10px;
    background-color: white;
  }
  .update_button:hover {
    color: white;
    background-color: rgb(204,177,0);
    transition: 1s;
  }
  .delete_button {
    display: inline-block;
    border-radius: 10%;
    border-color: rgb(190, 188, 188);
    font-size: 15px;
    color: rgb(190, 188, 188);
    padding: 5px 15px;
    margin-left: 10px;
    background-color: white;
  }
  .delete_button:hover {
    color: white;
    background-color: rgb(190,188,188);
    transition: 1s;
  }
  </style>
</head>
<body>
  <div class="background"></div>
  <div class="main_contents">
    <h1>Todo List</h1>
    <form action='/todo/create' method='post' class="register" name="add">
    @csrf
      <input type='text' name="add" style="width:85%;height:30px;" class="addition_content" required minlength='1' maxlength='20'>
      <button type='submit' class="addition_button">??????</button>
    </form>
    <div class="todo_table">
      <table>
      <tr class="ttl">
        <th>?????????</th>
        <th>????????????</th>
        <th>??????</th>
        <th>??????</th>
      </tr>
      @yield('content')
      </table>
    </div>
</body>
</html>