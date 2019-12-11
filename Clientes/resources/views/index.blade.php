<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <button
            style="
                margin-top: -25px;
                left: 50%;
                margin-left: 450px;"
            class="btn btn-info";
           {{-- onclick="window.location='{{ \Illuminate\Support\Facades\URL::route('users.index') }}'"--}}
    >Cadastrar clientes</button>
    <div style="
      text-align: center;
      position: absolute;
      top: 50%;
      margin-top: -25px;
      left: 50%;
      margin-left: -100px;
">
        <h1>Em construção!</h1>
        <img src="{{asset('resources/images/emConstrucao.jpg')}}">

    </div>
    </body>
</html>