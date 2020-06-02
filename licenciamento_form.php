<?php
    include 'licenciamento_processa.php';
    include 'cabecalho.php';

      // Usuário
    $licenciamento = array();
    
    // Recurso para editar cliente
    if (isset($_GET['id'])) {
        $licenciamentos = $licenciamentos_processa->pesquisar_por_id($_GET['id']);
        $licenciamento = mysqli_fetch_assoc($licenciamentos);
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
    
    <body>
        <br><br> 
        <div class="container" style="max-width: 600px">
           <div class="panel panel-default">
    <div class="panel-heading">
        <h3 style="margin: 6px 0;">Cadastro de NFs</h3>
    </div>
    <div class="panel-body">
        <form action="licenciamento_processa.php" method="post">
            <input type="hidden" name="acao" value="salvar">
            <input type="hidden" name="id" value="<?php echo $licenciamento['id']; ?>">
            <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                    <label for="nf">NF</label>
                    <input type="text" required name=nf class="form-control" name="nf   " id="nf" value="<?php echo $licenciamento['nf']; ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                    <label for="razao">Razão Social</label>
                    <input type="text" required name=razao class="form-control" name="razao" id="razao" value="<?php echo $licenciamento['razao']; ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                    <label for="data">Data</label>
                    <input type="text" required name=data class="form-control" name="data" id="data" value="<?php echo $licenciamento['data']; ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                    <label for="revenda">Revenda</label>
                    <input type="text" required name=revenda class="form-control" name="revenda" id="revenda" value="<?php echo $licenciamento['revenda']; ?>">
                </div>
            </div>
                <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                    <label for="produto">Produto</label>
                    <input type="text" required name=produto class="form-control" name="produto" id="produto" value="<?php echo $licenciamento['produto']; ?>">
                </div>
            </div>
                <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" required name=quantidade class="form-control" name="quantidade" id="quantidade" value="<?php echo $licenciamento['quantidade']; ?>">
                </div>
            </div>
                <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                    <label for="tipo">Tipo</label>
                    <input type="text" required name=tipo class="form-control" name="tipo" id="tipo" value="<?php echo $licenciamento['tipo']; ?>">
                </div>
            </div>
             
            
            
                    
            
            <div class="row" style="margin-top: 15px">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="licenciamento_lista.php" class="btn btn-link">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div> 
                        
            
            
        </div>
       
    </body>
    
    </html>

