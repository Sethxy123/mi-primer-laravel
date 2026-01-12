<!DOCTYPE html>
<html>
<head>
    <title>Mi Primer Laravel</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; background-color: #f4f4f4; }
        .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: inline-block;}
        h1 { color: #ff2d20; } 
    </style>
</head>
<body>
    <div class="card">
        <h1>Hola,{{$nombre_usuario}}!</h1>
        <p>Veo que estás trabajando en:</p>
        <h3 style="color: blue;">{{ $trabajo}}</h3>
        
        <p>Laravel hace esto muy fácil.</p>
    </div>
</body>
</html>