<?php
$paginas=['home'=> 'Minha Pagina home aqui! ',' 'sobre'=>'Estou na pagina sobre', 'contato=>''];
$paginas['contato']= '<form><imput type="text" placeholder="Seu nome" /><form>';

??


<!DOCTYPE html>
<html>
    <head>
    <title> Site em Php </title>
    <style type="text/css">
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    }
    header{
    backgroung-color:069;
    padding: 8px 10px;
    text-aling: center;
    }
    a{
    display:innline-block;
    margin:0 10px;
    color: white;
    fonte-size:17px;
    }
    </style>
    </head>
    <body>
    <header>
    <?php
       foreach ($paginas as $key=>$value) {
        echo '<a href="?page='.$key.'">'.key.'</a>;
    }
       ?>
       </header>
       <selection>
         <h2><?<php
            $pagina=(isset($_GET['page]) ? $_GET['page'] : 'home');
             if(!array_key_exists($pagina, $paginas)){
                $pagina = 'home';
             }
             echo ucfirst($pagina);
         ?></h2>
         <p><?php echo $paginas[$pagina]; ?></p>
       </selection>
</body>
</html>