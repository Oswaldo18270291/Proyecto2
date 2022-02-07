<!DOCTYPE html>
<html>
<head>
 <style type="text/css">
   body{
        background: #21036C;
   }
   .style-text{
       background: #000000;
       color: white;
       font-size: 20px;
       margin-right: 60%;

   }.style-text2{
       background: #5A003C;
       color: white;
       font-size: 20px;
       margin-right: 60%;
   }
    </style>
</head>
<body>
    
    <div class="style-text" align="center" ><h3>SuperClase</h3><?php require_once("./Book.php");
                    
                    echo $book1->getInfo()."<br>";?>
     </div> 
    <div class="style-text2" align="center"><h3>SubClase</h3><?php require_once("./Manga.php");
                    echo $manga1->getInfo();?>
     </div>
           
</body>
</html>
