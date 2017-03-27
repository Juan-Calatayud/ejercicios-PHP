<?php



namespace ejemplo\Bookstore\Controller;
use ejemplo\Bookstore\View\View;
use ejemplo\Bookstore\Model\Book;

class BookController
{
 public function show($id){
 $view = new View('app/templates/book');
 $book = Book::find($id);
 $view->render('show.php', ['book' => $book]);
 }

 public function index(){
 $view = new View('app/templates/book');
 $books = Book::all();
 $view->render('index.php', ['books' => $books]);
 }
  public function delete($id){
 $view = new View('app/templates/book');
 Book::delete($id);
 $books = Book::all();
 $view->render('index.php', ['books' => $books]);
 }

 public function new(){
 	 $view = new View('app/templates/book');
 	if(isset($_POST['title'])){
 		$book = new Book (  $_POST['title'],
 							$_POST['author'],
 							$_POST['description']
 			);

        $book->save();
 		$this->index();
 	}else{
 		$book = new Book();
 		 $view->render('form.php', ['book'=>$book]);
 	}
 }

 public function update($id){
 	$view = new View('app/templates/book');
 	$book = Book::find($id);
 	if(isset($_POST['title'])){
 		$book->setTitle($_POST['title']);
 		$book->setAuthor($_POST['author']); 
 		$book->setDescription($_POST['description']); 
         
        $book->update();
 		header("location: /ejemplo/book");
 	}else{
    $view->render('form.php',['book' => $book]);}

 }

 public function updateOrCreate(){

 	if($_POST['id']==""){
 		$this->new();
	 }else{
	 	$this->update($_POST['id']);
	 }
}



}

