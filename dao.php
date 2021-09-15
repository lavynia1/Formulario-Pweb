<? php

    class  DAO {
        public  $host = "localhost" ;
        public  $nome = "" ;
        public  $telefone = "" ;
        public  $banco = "banco_de_respostas" ;
        public  $conexao ;

        function  prepararBanco () {
            $this-> conexao = new  PDO ( "mysql: host = $ this-> acolhimento; dbname = $ this-> banco" , "$ this-> nome" , "$ this-> telefone" );
        }
    }