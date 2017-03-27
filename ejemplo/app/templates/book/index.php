<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Listado de libros</title>
</head>
<body>
<h1>Listado de libros</h1>
<ul>
<?php foreach ($books as $book): ?>
 <li>
 	<a href="/ejemplo/book/show/<?= $book->getId(); ?>"><?= $book->getTitle()?></a> 
 	<a href="/ejemplo/book/update/<?= $book->getId(); ?>"> (Editar)</a> 
 </li>
<?php endforeach ?>
</ul>
<a href="/ejemplo/book/new/"> Nuevo</a> 

</body>
</html>