<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CursoLink</title>

</head>
<body>
    <style>
        body{
            background-color: #7C3BD9;
        }

        .title{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 50px;
            color: white
        }
    </style>

    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; height: 80vh;">
        <div>
          <img src=" {{ asset('img/logoCursoLink.png') }} " alt="logocurso">
        </div>
        <h1 class="title">Bem Vindos a Melhor
            Plataforma de Cursos Grátis</h1>

            @component('components.botao', ['url' => url('/cursos')])
                Vamos lá
            @endcomponent
      </div>



</body>
</html>
