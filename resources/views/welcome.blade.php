<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    </head>
    <body>
        <div class="row">

            <div class="col-lg-5"></div>
            <div class="col-lg-2 text-center border border-warning">
                <h1>Tareas</h1>
        <form method="post" action=" {{ 'task' }}" >
            {!! csrf_field() !!}
            <input type="text" name="task" class="form-control" required>
            <hr>
            <input type="submit" value="Add" class="btn btn-success">
            <button class="btn btn-danger">Delete</button>
        </form>
        <br>
            </div>
            <div class="col-lg-5"></div>

    </div>
    </body>
</html>
