<?php
    
include 'cabecalho.php';
include 'licenciamento_processa.php';



$licenciamentos = $licenciamentos_processa->pesquisar($_GET['busca']);






?>
<div class="container" style="max-width: 1500px">
    <br><br>
    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 style="margin: 5px 0;">NFs Microsoft</h3><br>
    </div>
    <div class="panel-body">
        <div class="panel-buttons">
            <div class="pull-left">
                <a href="licenciamento_form.php" class="btn btn-primary">Novo</a>
                <a href="index.php" class="btn btn-default">Voltar</a>
            </div><br>
            <div class="pull-right">
                <form method="get">
                    
                    <div class="pull-left">
                        <input type="text" class="form-control inline" name="busca" autofocus="true" value="<?php echo $_GET['busca'] ?>" placeholder="Pesquisar...">
                    </div>
                    <div class="pull-right" style="margin-left: 5px;"><br>
                        <button type="submit" class="btn btn-primary">Buscar</button><br>
                    </div>
                </form><br>
            </div>
        </div>

        <table width="1%" class="table">
            <thead>
                <tr>
                   
                    <th>NF</th>
                    <th>Razão</th>
                    <th>Data</th>
                    <th>Revenda</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($licenciamento = mysqli_fetch_assoc($licenciamentos)) : ?>
                    
                        <tr>
                        
                        <td><?php echo $licenciamento['nf']; ?></td> 
                        <td><?php echo $licenciamento['razao']; ?></td>
                        <td><?php echo $licenciamento['data']; ?></td>
                        <td><?php echo $licenciamento['revenda']; ?></td>
                        <td><?php echo $licenciamento['produto']; ?></td>
                        <td><?php echo $licenciamento['quantidade']; ?></td>
                        <td><?php echo $licenciamento['tipo']; ?></td>
                        <td class="text-right">
                            
                            
                            <a href="licenciamento_form.php?id=<?php echo $licenciamento['id']; ?>" class="btn btn-primary">Editar</a>
                            <a href="licenciamento_processa.php?acao=excluir&id=<?php echo $licenciamento['id']; ?>" class="btn btn-danger">Excluir</a>
                        </td>
        </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
    
    
</div>