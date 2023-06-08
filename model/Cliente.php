<?php

class Cliente
{
    //Atributos
    protected $cpf;
    protected $nome;
    protected $sobrenome;
    protected $dataNascimento;
    protected $telefone;
    protected $email;
    protected $senha;


    public function __construct($CPF, $Nome, $Sobrenome, $DataNascimento, $Telefone, $Email, $Senha)
    {
        $this->cpf = $CPF;
        $this->nome = $Nome;
        $this->sobrenome = $Sobrenome;
        $this->dataNascimento = $DataNascimento;
        $this->telefone = $Telefone;
        $this->email = $Email;
        $this->senha = $Senha;
    }




    //Getter e Setter

    public function get_CPF()
    {
        return ($this->cpf);
    }

    public function set_CPF($CPF)
    {
        $this->cpf = $CPF;
    }
    public function get_Nome()
    {
        return ($this->nome);
    }

    public function set_Nome($Nome)
    {
        $this->nome = $Nome;
    }

    public function get_Sobrenome()
    {
        return ($this->sobrenome);
    }

    public function set_Sobrenome($Sobrenome)
    {
        $this->sobrenome = $Sobrenome;
    }

    public function get_DataNascimento()
    {
        return ($this->dataNascimento);
    }

    public function set_DataNascimento($DataNascimento)
    {
        $this->dataNascimento = $DataNascimento;
    }

    public function get_Telefone()
    {
        return ($this->telefone);
    }

    public function set_Telefone($Telefone)
    {
        $this->telefone = $Telefone;
    }

    public function get_Email()
    {
        return ($this->email);
    }

    public function set_Email($Email)
    {
        $this->email = $Email;
    }

    public function get_Senha()
    {
        return ($this->senha);
    }

    public function set_Senha($Senha)
    {
        $this->senha= $Senha;
    }
}
