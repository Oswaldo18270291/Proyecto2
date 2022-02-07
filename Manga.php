<?php
//require 'Book.php';

class Manga extends Book{
    private $ilustrdor;
    private $vol;
    public function __construct($author, $title, $price, $stock, $id, array $ilustrador, int $vol)
    {
        $this ->ilustrador=$ilustrador;
        $this ->vol=$vol;
        parent::__construct($author, $title, $price, $stock, $id);
    }

    public function getInfo(){
        $result = "Protegido: Volumen: $this->vol";
        $ul="<ul>--Ilustradores--";
        foreach($this->ilustrador as $ilustrador){
            $ul .="<li>$ilustrador</li>";
        }
        $ul .="</ul>";
        echo parent::getInfo();
        echo $result .= $ul;
    }

}

$manga1 = new Manga(
    'Hajime Isayama',
    'SNK',
    120.00,
    90,
    2,
    ['Hajime Isayama'],
    5
);


?>