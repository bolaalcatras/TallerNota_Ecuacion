<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body text="orange">
    <h1>formulario</h1>
    
    <form action="{{route('result.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    
    <label>
        Ingrese el valor de a:
        <br>
        <input type="number" name="a">
    </label>
    <br> 
        Ingrese el valor de b:
        <br> 
        <input type="number" name="b">
    </label>
    <br> 
        Ingrese el valor de c:
        <br> 
        <input type="number" name="c">
    </label>
    <br>
    <button type="submit" id="btn1">Enviar Formulario:</button>
    </form>
</body>
</html>