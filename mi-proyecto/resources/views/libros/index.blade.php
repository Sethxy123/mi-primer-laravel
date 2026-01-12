<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1> Biblioteca en Laravel</h1>

    <a href="{{route('libros.create')}}">+ Agregar Nuevo Libro</a>
    <hr>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista_libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>${{ number_format($libro->precio, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($lista_libros->isEmpty())
        <p style="text-align: center; color: gray;">No hay libros registrados aún.</p>
    @endif
</body>
</html>