<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Libro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Nuevo Libro </h1>
    
    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        
        @csrf
@method('PUT')
<input type="hidden" name="_method" value="PUT">
        <label>Título:</label>
<input type="text" name="titulo" value="{{ $libro->titulo }}" required>

<label>Autor:</label>
<input type="text" name="autor" value="{{ $libro->autor }}" required>

<label>Género:</label>
<input type="text" name="genero" value="{{ $libro->genero }}">

<label>Precio:</label>
<input type="number" name="precio" step="0.01" value="{{ $libro->precio }}" required>

        <button type="submit">ActualizarLibro</button>
        <a href="{{ route('libros.index') }}">Cancelar</a>
    </form>
</body>
</html>