<?php
    session_start();
    include("conecta.php");
    // VARIAVEIS METODO GET
    $entrarEmail = $_GET['entrarEmail'];
    $entrarSenha = $_GET['entrarSenha'];
 // VERIFICAR SENHA EM BRANCO
    if($entrarEmail == "" || $entrarSenha == "")
    {
        echo ("<script>alert('Login ou senha em branco!');</script>");
        echo ("<script>location.href='index.html';</script>");
    }
    // QUERY VERIFICAR PERMISSAO DE USUARIOS CADASTRADOS
    $logarPermissao = mysqli_query($conn, "SELECT * FROM permissao WHERE emailPermissao = '$entrarEmail' AND senhaPermissao = '$entrarSenha'") or die("Erro ao selecionar");
    // VERIFICA USUARIO CADASTRADO
    if (mysqli_num_rows($logarPermissao) > 0)
    {
        $nomePermissao = mysqli_query($conn, "SELECT nomePermissao FROM permissao WHERE emailPermissao = '$entrarEmail'");  
        $dadoPermissao = mysqli_fetch_array($nomePermissao);
        // echo 'usuario logado = '.$dadoPermissao['nomePermissao'];
        echo ("<script>location.href='home.php';</script>");
    } 
    else 
    {
        echo 'erro';
        /*echo ("<script>alert('Login ou senha incorretos! Tente novamente.');</script>");
        echo*/ ("<script>location.href='index.html';</script>");
    }
    mysqli_close($conn);

?>