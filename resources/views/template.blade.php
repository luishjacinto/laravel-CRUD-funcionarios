<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="/inicio">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/gerenciar">Gerenciar</a>
        </li>
        <li class="nav-item">
            <form action="<?php echo action('IndexController@busca'); ?>" method="POST" class="form-inline md-form form-sm mt-0">
            <div class="input-group mb-3">
                    <div class="input-group-append">                 
                        {{ csrf_field() }}
                        <input name="pesquisa" type="text" class="form-control"   placeholder="Buscar por matricula/nome">
                        <button class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </form>
        </li>
        
    </ul>
<div class="container">
    @yield('content')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>