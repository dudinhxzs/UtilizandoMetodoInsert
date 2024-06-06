<?php
require_once '../controller/conexao.php';
//inclui o arquivo conexao dentro da pasta controller
 

 class pessoa{
    // Propriedades da classe pessoa
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;


    // Métodos getters e setters para as propriedades da classe pessoa
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
    $this->nome = $nome;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
    $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
    $this->bairro = $bairro;
    }

    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
    $this->cep = $cep;
    }

    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    
    //metodo construtor
    public function __construct(){
        $this->conexao = new Conexao();
    }

    //  comando para inserir os dados na tabela cliente
    public function inserir(){
        $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        
        
        $stmt = $this->conexao->getConexao()->prepare($sql);// Prepara a declaração SQL pra executar


        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        return $stmt->execute(); // Executa a declaração preparada

    }
}
?>