<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Libro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Nuevo Libro </h1>
    
    <form action="{{ route('libros.store') }}" method="POST">
        
        @csrf

        <label>Título:</label>
        <input type="text" name="titulo" required>

        <label>Autor:</label>
        <input type="text" name="autor" required>

        <label>Género:</label>
        <input type="text" name="genero">

        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required>

        <button type="submit">Guardar Libro</button>
        <a href="{{ route('libros.index') }}">Cancelar</a>
    </form>
</body>
</html>