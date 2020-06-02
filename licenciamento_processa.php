<?php

require_once 'conexao.php';
require_once 'sessao.php';



class LicenciamentoProcessa {
    
    public function __construct(){
        if ($_POST['acao'] == 'salvar') {
            if (empty($_POST['id'])) {
                $this->inserir($_POST);
                header('location: licenciamento_lista.php');
            } else {
                $this->alterar($_POST);
                header('location: licenciamento_lista.php');
            }
        } elseif ($_GET['acao'] == 'excluir') {
            $this->excluir($_GET['id']);
            header('location: licenciamento_lista.php');
        }
    }
    
        
    public function pesquisar($buscar){
        
        global $con;
        return mysqli_query($con,"SELECT * FROM licenciamento WHERE nf LIKE '%{$buscar}%' OR produto LIKE '%{$buscar}%' OR razao LIKE '%{$buscar}%'");
                    
        
    }
    
    public function pesquisar_por_id($id){
        global $con;
        return mysqli_query($con, 'SELECT * FROM licenciamento WHERE id = ' . addslashes($id));
    }
    
    public function inserir($licenciamento){  
        
        global $con;
        
        $nf = mysqli_real_escape_string($con, $licenciamento['nf']);
        $razao = mysqli_real_escape_string($con, $licenciamento['razao']);
        $data = mysqli_real_escape_string($con, $licenciamento['data']);
        $revenda = mysqli_real_escape_string($con, $licenciamento['revenda']);
        $produto = mysqli_real_escape_string($con, $licenciamento['produto']);
        $quantidade = mysqli_real_escape_string($con, $licenciamento['quantidade']);
        $tipo = mysqli_real_escape_string($con, $licenciamento['tipo']);
        
        
                return mysqli_query($con,""
                . "INSERT INTO licenciamento ( nf, razao, data, revenda, produto, quantidade, tipo)"
                . "VALUES('{$nf}','{$razao}','{$data}','{$revenda}','{$produto}','{$quantidade}', '{$tipo}' )" );
    }
    
    public function alterar($licenciamento){  
        
        global $con;
        
        $id = mysqli_real_escape_string($con, $licenciamento['id']);
        $nf = mysqli_real_escape_string($con, $licenciamento['nf']);
        $razao = mysqli_real_escape_string($con, $licenciamento['razao']);
        $data = mysqli_real_escape_string($con, $licenciamento['data']);
        $revenda = mysqli_real_escape_string($con, $licenciamento['revenda']);
        $produto = mysqli_real_escape_string($con, $licenciamento['produto']);
        $quantidade = mysqli_real_escape_string($con, $licenciamento['quantidade']);
        $tipo = mysqli_real_escape_string($con, $licenciamento['tipo']);
        
        
    return mysqli_query($con,"UPDATE licenciamento SET nf='{$nf}',razao='{$razao}',data='{$data}',revenda='{$revenda}',produto='{$produto}',quantidade='{$quantidade}',tipo='{$tipo}' WHERE id = '{$id}'");
    }
      
    
    public function excluir($id){
        global $con;
        
        $id = mysqli_real_escape_string($con, $id);
        
        return mysqli_query($con, 
            "DELETE FROM licenciamento WHERE id = {$id}"
        );
       
            
}

            }

$licenciamentos_processa = new LicenciamentoProcessa();      
        
            
            
            
        
        
        
        
    
