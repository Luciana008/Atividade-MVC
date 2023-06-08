<?php

require_once("../model/BancoDeDados.php");



class Controlador{

    //Atributo
    private $bancoDeDados;

    function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }


    public function cadastrarProduto($nome, $fabricante, $descricao, $valor){

        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function visualizarProdutos(){
        $produtos = "";
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            $produtos.="<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }

        return $produtos;
    }

    public function cadastrarCliente($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha){
        $Cliente = new Cliente($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha);
        $this->bancoDeDados->inserirCliente($Cliente);
    }

    public function visualizarClientes(){
        $resultado = "";
        $listaClientes = $this->bancoDeDados->retornarClientes();
    
        while($clientes = mysqli_fetch_assoc($listaClientes)){
            $resultado .= "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $clientes["nome"] . "</h2>" .
                   "<p>CPF: " . $clientes["cpf"] . "</p>" .
                   "<p>Sobrenome: " . $clientes["sobrenome"] . "</p>" .
                   "<p>Data de Nascimento: " . $clientes["dataNascimento"] . "</p>" .
                   "<p>Telefone: " . $clientes["telefone"] . "</p>" .
                   "<p>E-mail: " . $clientes["email"] . "</p>" .
                   "<p>Senha: " . $clientes["senha"] . "</p>" .
                   "</section>";
        }
    
        return $resultado;
    }
    



    public function cadastrarFuncionario($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $salario){
        $Funcionario = new Funcionario($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $salario);
        $this->bancoDeDados->inserirFuncionario($Funcionario);
    }



    public function visualizarFuncionario(){
        $resultado = ""; 
        $listaFuncionario = $this->bancoDeDados->retornarFuncionarios();
    
        while($Funcionario = mysqli_fetch_assoc($listaFuncionario)){
            $resultado .= "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $Funcionario["nome"] . "</h2>" .
                   "<p>CPF: " . $Funcionario["cpf"] . "</p>" .
                   "<p>Sobrenome: " . $Funcionario["sobrenome"] . "</p>" . 
                   "<p>Data de Nascimento: " . $Funcionario["dataNascimento"] . "</p>" .
                   "<p>Telefone: " . $Funcionario["telefone"] . "</p>" .
                   "<p>E-mail: " . $Funcionario["email"] . "</p>" .
                   "<p>Salario: " . $Funcionario["salario"] . "</p>" .
                   "</section>";
        }
    
        return $resultado;
    }
    

}

?>