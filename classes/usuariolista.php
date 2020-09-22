<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php  include('usuario.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>idusuario</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>setor</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <h1 align="center">Lista de usuários</h1>
            <?php 
                $u = new Usuario(); 
                $lista_usuario = $u->lista();
                foreach($lista_usuario as $lst_user) { ?>
                <tr>
                    <td><?php echo $lst_user->getNoUsuario(); ?></td>
                    <td><?php echo $lst_user->getEmail();?></td>
                    <td><?php echo $lst_user->getIdsetor();?></td>
                    <td>
                        <a href="AlunoAltera.php?editar=<?php echo $lst_alun->getNumatricula(); ?>" class="edit_btn">Alterar</a>
                    </td>
                    <td>
                        <a href="AlunoExclui.php?excluir=<?php echo $lst_alun->getNumatricula(); ?>" 
                           class="del_btn">Remover</a>
                    </td>
                </tr>
            <?php } ?>
            <tfoot>
                <td colspan="4" align="center">
                    <br> <button class="btn" name="listar" type="button" onclick="location.href='AlunoCadastra.php';">Cadastrar Aluno</button>
                </td>
            </tfoot>
        </table>
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>       
    </body>
</html>
