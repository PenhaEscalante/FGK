<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.modal').modal();
    });
    $(document).ready(function() {
        $('select').formSelect();
    });
    </script>



    <link rel="stylesheet" href="css/estilos.css">

    <title>EeLO</title>
</head>

<body>
    <main>
        <div class="container">
            <iframe id="frame" src="Class.php" frameborder="0" name="framePrincipal"
                style="width: 100%; min-height: 100%; height: auto !important; position: fixed; top:0; left:0;"></iframe>
        </div>
    </main>
</body>

</html>