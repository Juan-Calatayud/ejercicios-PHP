<?php

//require_once '../conexion.php';


class Book
{
    private $pdo;
    private $id;
    private $titulo;
    private $autor;
    private $descripcion;

    function __construct($titulo,$autor=null, $descripcion=null){

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->descripcion = $descripcion;

    }

    function getId(){
        return $this->id;
    }

    function getTitulo(){
        return $this->titulo;
    }

    function setTitulo($titulo){
        $this->titulo = $titulo;
        return $this;
    }

    static function connection(){
        return new PDO("mysql:host=localhost;dbname=biblioteca;charset=utf8",'root', '');
    }


    static function getAll(){
        //return self::connection()->query("SELECT*FROM biblioteca")->fetchAll();
        $libros = self::connection()->query("SELECT * FROM libros")->fetchAll();
        foreach ($libros as $libro) {
            $res=[];
            $res[] = [$libro['titulo'],$libro['autor'],$libro['descripcion']];
        }
        return $res;

    }

    static function find($id){
        //return self::connection()->query("SELECT*FROM biblioteca WHERE ID={$id}")->fetch();
        $res = self::connection()
            ->query("SELECT*FROM biblioteca WHERE ID={$id}")
            ->fetch();
        $book = new Book($res['titulo'],$res['autor'],$res['descripcion']);
        $book->id = $res['id'];
        return $book;
    }



}

$books = Book::getAll();
//$book = Book::find()


$manolo = new Book;

echo $manolo->getAll();

