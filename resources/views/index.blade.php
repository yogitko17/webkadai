<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/dayjs"></script>
  <script src="https://unpkg.com/dayjs@1.7.7/locale/ja.js"></script>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/todo.css">

<style>
    .outer-frame {
      background-color: rgb(73, 7, 226);
      width: 100vw;
      height: 100vh;
      position: relative;
    }
    .inner-frame {
      width: 55vw;
      height:cover;
      padding: 30px;
      position:absolute;
      top:50%;
      left:50%;
      background-color: white;
      border-radius: 20px;
      transform: translate(-50%, -50%);
    }
    .inner-ttl{
      font: size 50px;
    }
    .todo-list_content{
      disply:flex;
    }
    .input-main-txt{
      width:80%;
      padding: 10px;
      border-radius:3px;
      border:1px solid rgb(230, 226, 238);
      outline:none;
      font-size:20px;
    }
    .input-btn{
      font-weight:bold;
      padding: 12px 20px;
      border-radius:3px;
      border:1px solid rgb(219, 54, 197);
      color:rgb(219, 54, 197);
      outline:none;
      cursor: pointer;
      margin-left:30px;
      font-size:18px;
      background-color:white;
    }
    table{
      text-aligin:center;
      width:100%;
    }
    tr{
      height:100px;
    }
    th{
      font-size: 22px;
    }
    td{
      font-size: 20px;
    }

    .input-update-txt{
      width:90%;
      padding: 10px;
      border-radius:3px;
      border:1px solid rgb(230, 226, 238);
      outline:none;
      font-size:20px;
    }
    .update-btn{
      font-weight:bold;
      padding: 12px 20px;
      border-radius:3px;
      border:1px solid rgb(224, 98, 60);
      color:rgb(224, 98, 60);
      outline:none;
      cursor: pointer;
      font-size:18px;
      background-color:white;
    }
    .delete-btn{
      font-weight:bold;
      padding: 12px 20px;
      border-radius:3px;
      border:1px solid rgb(83, 235, 209);
      color:rgb(83, 235, 209);
      outline:none;
      cursor: pointer;
      font-size:18px;
      background-color:white;
    }
    .table-date{
      width:30%;
    }
</style>
<body>
    <div class="outer-frame">
      <div class="inner-frame">
        <h1 class="inner-ttl">Todo List</h1>
        <div class="todo-list">
          @if (count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
            <li>
              {{$error}}
            </li>
            @endforeach
          </ul>
          @endif
          <form action="/todo/create" class="todo-list_content" method="POST">
             @csrf
            <input type="text" class="input-main-txt" name="content">
            <input type="submit" class="input-btn" value="追加">
          </form>
          <table>
            <tbody>
              <tr>
                <th>作成日</th>
                <th>タスク名</th>
                <th>更新</th>
                <th>削除</th>
              </tr>
              <tr>
                <td>2021-08-23 07:30:35</td>
                <td>
                  <input type="text" class="input-update-txt" name="content">
                </td>
                <td>
                  <button class="update-btn">更新</button>
                </td>
                <td>
                  <form action="/todo/delete/" method="POST">
                    @csrf
                    <button class="delete-btn">削除</button>                 
                  </form>
                </td>
              </tr>
            </tbody>  
          </table> 
        </div>
      </div>
    </div>

   <script src="js/todo.js"></script>
</body>

</html>
