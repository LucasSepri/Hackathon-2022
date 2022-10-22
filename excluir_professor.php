<?php
session_start();
include('conexao.php');

$id = filter_input(INPUT_GET, 'path', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM tb_usuario WHERE Rm='$id'";
	$resultado_usuario = mysqli_query($connn, $result_usuario);
	if(mysqli_affected_rows($connn)){
		echo "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: pagina-editar-professor.php");
	}else{
		
		echo "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: pagina-editar-professor.php");
	}
}
?>

<?php

            /* if (isset($_POST['excluir'])) {
            $sql = 'DELETE FROM categoria WHERE cd_categoria=' . $_GET['excluir'];
            $res = $conn->query($sql);
            if ($res) {
                echo "<script>alert('Cadastro excluido');</script>";
            } else {
                echo "Erro ao Excluir: " . $conn->error;
            }
        }*/

            /* if ($_POST) {
            $sql = 'UPDATE tb_anuncio SET nm_anuncio="' . $_POST['titulo'] . '"';
            $sql = 'UPDATE tb_anuncio SET ds_anuncio="' . $_POST['descricao'] . '"';
            $res = $conn->query($sql);
            if ($res) {
                echo "Cadastro Atualizado";
            } else {
                echo "Erro ao atualizar";
            }
        } */
            ?>