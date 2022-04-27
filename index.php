<?php
    $paginas = ['home'=> 'Minha página home aqui!', 'sobre'=> 'Estpu na página sobre', 'contato'=>''];
    
    $paginas ['contato'] = '<form><input type="text" placeholder="Digite seu nome: ... "/></form>' //html
?>

<!DOCTYPE html>
<html>
<head>

    <title> Site PHP</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
           box-sizing: border-box;
            text-align: center;
            
        }
        header{
                
                background-color: #069;
                padding: 8px 10px;
                text-align: center;
        }
    </style>
</head>
<body>
    <?php
        foreach ($paginas as $key => $value){
            echo '<a href="?page='.$key.'">'.$key.'</a>';

        }
    ?>
</body>
</html>