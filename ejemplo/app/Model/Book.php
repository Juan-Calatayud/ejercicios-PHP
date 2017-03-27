<?php
namespace ejemplo\Bookstore\Model;
use ejemplo\Bootstrap\Database as Db;
use PDO;
class Book
{
    private $id;
    private $title;
    private $author;
    private $description;
    public function __construct($title="", $author="", $description="",$id=null){
    $this->id = $id;
    $this->title = $title;
    $this->author = $author;
    $this->description = $description;
    }
   public function getId(){
      return $this->id;
    }
    public function getTitle(){
      return $this->title;
    }
    public function setTitle($title){
      $this->title = $title;
    }
    public function getAuthor(){
      return $this->author;
    }
    public function setAuthor($author){
      $this->author = $author;
    }
    public function getDescription(){
    return $this->description;
    }
    public function setDescription($description){
    $this->description = $description;
    }
    public function save(){
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO libro ( titulo, autor, descripcion) VALUES ( :title, :author, :description);');
      $req->execute(array(':title' => $this->getTitle(),
                           ':author' => $this->getAuthor(),
                            ':description' => $this->getDescription()
                            )
                            );

    }


    public function update(){
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE libro SET titulo = :title, autor = :author , descripcion = :description  WHERE id = :id;');
      $req->execute(array(':id' => $this->getId(),
                          ':title' => $this->getTitle(),
                           ':author' => $this->getAuthor(),
                            ':description' => $this->getDescription()

                            )
                            );

    }

    

    public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM libro');
    foreach($req->fetchAll() as $book) {
    $list[] = new Book($book['titulo'], $book['autor'], $book['descripcion'],$book['id']);
    }
    return $list;
    }
    public static function find($id) {
       $db = Db::getInstance();
       $id = intval($id);

       $req = $db->prepare('SELECT * FROM libro WHERE id = :id');
       $req->execute(array('id' => $id));
       $book = $req->fetch();
       return new Book($book['titulo'],
      $book['autor'], $book['descripcion'],$book['id']);
    }

    public static function delete($id){
         $db = Db::getInstance();
         $id = intval($id);
         $req = $db->prepare('DELETE FROM libro WHERE id = :id');
         $req->execute(array('id' => $id));

    }



}