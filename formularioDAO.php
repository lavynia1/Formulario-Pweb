<? php

  include_once 'dao.php';

  class formularioDAO extends DAO {
    public $conexao;

    function  __construct () {
      $host = "localhost" ;
      $nome = "" ;
      $telefone = "" ;
      $banco = "banco_de_usuarios" ;

      $Presente -> conexao = new  PDO ( "mysql: host = $ this-> acolhimento; dbname = $ this-> banco" , "$ this-> nome" , "$ this-> telefone" );
    }

    function  formulario ( $nome , $telefone ) {
      
      $preparacao = $this -> conexao -> prepare ( "INSERT INTO usuario (nome, telefone) VALUES (?,?)" );

      $preparacao->bindParam ( 1 , $nome );
      $preparacao->bindParam ( 2 , $telefone );

        return  null ;
    }