<?php

class Book{
    private String $author;
    private String $title;
    private float $price;
    private int $stock;
    private int $id;

    public function __construct($author, $title, $price, $stock, $id)
    {
        $this ->author=$author;
        $this ->title=$title;
        $this ->price=$price;
        $this ->stock=$stock;
        $this ->id=$id;
    }

    public function getInfo(){
        $info = "<b> Publico: $this->title</b> <br>Publico: Escrito por:<i> $this->author</i><br>
                    Protegido: precio: $this->price <br>
                    Publico: existencias: $this->stock<br>
                    Privado: ID: $this->id<br>
        ";
        if($this->stock>0){
            $info .="<b>Protegido: Piezas disponibles: <span style='color:green'> $this->stock </span></b><br>";
        }else  {
            $info .="<b>Protegido: Piezas disponibles: <span style='color:red'> No disponible </span><br><b>";
  
        }
        return $info;
    }


}
$book1 = new Book(
    'Victor Hugo',
    'Los miserables',
    199.90,
    0,
    1
);



?>