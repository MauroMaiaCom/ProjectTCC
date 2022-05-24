<?php

date_default_timezone_set('America/Sao_Paulo');

class Useradm
{
    private $pdo;

    // --------------Construtor---------------

    public function __construct($dbname, $host, $usuario, $senha)
    {
        try
        {
            $this -> pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $usuario, $senha);
        }
        catch (PDOException $e)
        {
            echo "Erro com o Banco de Dados: ".$e->getMessage();
        }
        catch (Exception $e)
        {
            echo "Erro: ".$e->getMessage();
        }
    }

    // --------------Cadastrar----------------
    /*
    public function Cadastrar($nome, $email, $senha)
    {
        // Verificar se ja esta Cadastrado
        $cmd = $this -> pdo -> prepare("SELECT id FROM ussadm WHERE email = :e");
        $cmd -> bindValue(":e", $email);
        $cmd -> execute();

        if ($cmd -> rowCount() >0)
        {
            return false;
        }
        else //Nao veio ID  
        {
            // Cadastrar
            $cmd = $this -> pdo -> prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:n, :e, :s)");
            $cmd -> bindValue(":n", $nome);
            $cmd -> bindValue(":e", $email);
            $cmd -> bindValue(":s", md5($senha));
            $cmd -> execute();
            return true;
        }
    }*/

    // --------------Logar--------------------
    public function Logar($nick, $senha)
    {
        $cmd = $this -> pdo -> prepare("SELECT * FROM usuario WHERE email = :e AND senha = :s");
        $cmd -> bindValue(":e", $nick);
        $cmd -> bindValue(":s", md5($senha));
        $cmd -> execute();

        if ($cmd -> rowCount() >0) //se foi encontrado essa pessoa
        {
            $dados = $cmd -> fetch();
            session_start();
            $_SESSION['id_ADM'] = $dados['id_usuario'];
            return true; //encontrado
        }
        else
        {
            return false; //nao encontrado
        }
    }

    // --------------DADOS--------------------
    public function buscarDadosUser($id)
    {
        $cmd = $this -> pdo -> prepare("SELECT * FROM usuario WHERE id_usuario = :id");
        $cmd -> bindValue(":id", $id);
        $cmd -> execute();

        $dados = $cmd -> fetch();
        return $dados;
    }

    // ---------------SalvandoD-----------------
    public function salvandoDadosRp($sensor01, $sensor02, $sensor03, $pressao, $exaustor, $resistencia, $fruta, $stats)
    {
        $cmd = $this -> pdo -> prepare("UPDATE dados_r SET stats='$stats', fruta='$fruta', sensor01='$sensor01', sensor02='$sensor02', sensor03='$sensor03', pressao='$pressao', exaustor='$exaustor', resistencia='$resistencia' WHERE id_dadosr='1'");
        $cmd -> execute();
        
    }
}


/*
prepare("INSERT INTO savespr (stats, sensor01, sensor02, sensor03, pressao, exaustor, resistencia, fruta, dia, horario) VALUES (:sa, :sb, :sc, :sd, :se, :sf, :sg, :sh, :si, :sj)");
        $cmd -> bindValue(":sa", $sensor01);
        $cmd -> bindValue(":sb", $sensor02);
        $cmd -> bindValue(":sc", $sensor03);
        $cmd -> bindValue(":sd", $pressao);
        $cmd -> bindValue(":se", $exaustor);
        $cmd -> bindValue(":sf", $resistencia);
        $cmd -> bindValue(":sg", $fruta);
        $cmd -> bindValue(":sh", $stats);
        $cmd -> execute();

$cmd -> bindValue(":si",  date('Y-m-d'));
        $cmd -> bindValue(":sj", date('H:i'));*/

?>