<?php

    if(!empty($_GET['idcadastro']))
    {
        include_once('config.php');

        $id = $_GET['idcadastro'];

        $sqlSelect = "SELECT *  FROM usuarios WHERE idcadastro=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cadastros WHERE idcadastro=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>