<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Prueba formulario</title>
</head>
<body>
<form action="/ejemplo/book/updateOrCreate" method="POST">
<input type="hidden" name="id" required value="<?= $book->getId() ?? ''; ?>">
 <label for="">Titulo:</label>
 <input type="text" name="title" required value="<?= $book->getTitle() ?? ''; ?>">
 <label for="">Autor:</label>
 <input  name="author" type="" required  value="<?= $book->getAuthor() ?? ''; ?>">
  <label for="">Descripcion:</label>
 <input  name="description" type="" required  value="<?= $book->getDescription() ?? ''; ?>">
 <input type="submit" value="Enviar">
</form>
</body>
</html>