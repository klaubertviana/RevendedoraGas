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
    $verificaPermissao = mysqli_query($conn, "SELECT * FROM permissao WHERE emailPermissao = '$entrarEmail' AND senhaPermissao = '$entrarSenha'") or die("Erro ao selecionar");
    // VERIFICA USUARIO CADASTRADO    
    if (mysqli_num_rows($verificaPermissao) > 0) 
    {
        echo ("<script>alert('Usuário já cadastrado!');</script>");
        echo ("<script>location.href='index.html';</script>");
    } 
    else 
    {
        echo ("<script>alert('Usuário não foi cadastrado! Tente novamente.');</script>");
        echo ("<script>location.href='index.html';</script>");
    }
    mysqli_close($conn);
?>