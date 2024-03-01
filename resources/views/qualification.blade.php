<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body text="orange">
    <h1>formulario</h1>
    
    <form action="{{route('qualification.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Nota 1:
        <br>
        <input type="number" name="nota1">
    </label>
    <br> 
        Nota 2:
        <br> 
        <input type="number" name="nota2">
    </label>
    <br> 
        Nota 3:
        <br> 
        <input type="number" name="nota3">
    </label>
    <br>
    <button type="submit" id="btn1">Enviar Formulario:</button>
    </form>
</body>
</html>