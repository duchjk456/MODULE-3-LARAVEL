<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Kiếm tra email hợp lệ:</h1>
    <form action="{{route('checkEmail')}}" method="post">
        @csrf
        Email <br><br>
        <input type="text" name="email">
        <button>Check</button>
    </form>
    @if(isset($isEmail))
        Kết quả: {{$isEmail?'Đúng định dạng':'Sai định dạng'}}
    @endif
</div>
</body>
</html>
