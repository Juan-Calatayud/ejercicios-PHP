<?php
namespace framework\Bookstore\Controller;

class BookController

{

    public function index(){

        echo "Listado de libros";
    }

    public function show($id){

        echo "Ficha del libro: ". $id;
    }
}