<!DOCTYPE html>
<html>
<head>
<title>PÁGINA INICIAL</title>
<meta charset="utf-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/home-styles.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<body>


<div id="co-imagem">
    <img id="creadf" src="./imagens/CREA-DF.png"/>
</div>

<div id="dadosTabela">
        <!--<h1>555%</h1>-->

        <h1 id="total">TOTAL</h1>
</div>

<!--Botão Abrir Modal-->
<div id="botaoModal">
<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#btncadastrar">
  Cadastrar
</button>
</div>


<!-- Modal cadastrar processo-->
<div class="modal fade" id="btncadastrar" tabindex="-1" role="dialog" aria-labelledby="btncadastrar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="btncadastrar">Cadastrar Novo Processo</h5>
        <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">

<!-- formulário cadastrar-->
      <form action= "./src/Controllers/ProcessoController.php" method="POST">
        <div class="form-group">
             <label for="inputNome" class=" col-form-label">Nome</label>
             <div class="col-sm-10">
             <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Nome Completo">
            </div>
        </div>
        <div class="form-group">
             <label for="inputNumero" class="col-form-label">Nº do Processo</label>
             <div class="col-sm-10">
             <input type="text" name="numero" class="form-control" id="inputNumero" placeholder="Numero do Processo">
            </div>
        </div>
        <div class="form-group">
             <label for="inputEf" class=" col-form-label">EF</label>
             <div class="col-sm-10">
             <input type="text" name="ef" class="form-control" id="inputEf" placeholder="Nº EF">
            </div>
        </div>
        <div class="form-group">
             <label for="inputDebito" class=" col-form-label">Data do Débito</label>
             <div class="col-sm-10">
             <input type="text" name="data_debito" class="form-control" id="inputDebito" placeholder="00/00/0000">
            </div>
        </div>
        <div class="form-group">
             <label for="inputValorOriginal" class=" col-form-label">Valor Original</label>
             <div class="col-sm-10">
             <input type="text" name="valor_original" class="form-control" id="inputValorOriginal" placeholder="R$:">
            </div>
        </div>
        <div class="form-group">
             <label for="inputValorAtual" class=" col-form-label">Valor Atualizado</label>
             <div class="col-sm-10">
             <input type="text" name="valor_atualizado" class="form-control" id="inputValorAtual" placeholder="R$:">
            </div>
        </div>
    <div class="form-group row">
        <div class="col-sm-10">
        <input type="submit" name="dados" class="btn btn-primary" value="Cadastrar"></input>
        </div>
    </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- Botão para acionar modal -->
<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modalExemplo">
  Cadastrar
</button>

<!--Input Buscar Processo-->
<div id="buscarprocesso" style="margin: 20px 1100px"><input id="filtro-numero" placeholder="Buscar Processo..."/></div>

<!--tabela-->
<div style="width:100%">
    <table id="tabela" class="table table-outline-darger table-hover mytabela" style="width:100%">
    <thead class="thead-dark">
            <tr id="cabecalho-tabela">
                <th>Name</th>
                <th>Nº Processo</th>
                <th>EF</th>
                <th>Data do Débito</th>
                <th>Valor Original</th>
                <th>Valor Atualizado</th>
            </tr>
        </thead>
        <tbody id="corpo-tabela">
        </tbody>
        <tfoot id="rodape-tabela" class="table-dark">
        <tr>
                <th>Name</th>
                <th>Nº Processo</th>
                <th>EF</th>
                <th>Data do Débito</th>
                <th>Valor Original</th>
                <th>Valor Atualizado</th>
                <th>Ação</th>
            </tr>
        </tfoot>
    </table>
</div>

<!--Modal Excluir dados da tabela-->
<div class="modal fade" id="btnexcluir" tabindex="-1" role="dialog" aria-labelledby="btnexcluir" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="btnexcluir">Excluir Processo!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir o item?
      </div>
      <div class="modal-footer">
        <a href="#"class="btn btn-danger">Excluir</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>



<script src="js/jquery.js"></script>
<script src="js/pegaTotal.js"></script>
<script src="js/obterProcesso.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<!--Script Procurar Processo-->
<script>
  var filtro = document.getElementById('filtro-numero');
var tabela = document.getElementById('tabela');
filtro.onkeyup = function() {
    var nomeFiltro = filtro.value;
    for (var i = 1; i < tabela.rows.length; i++) {
        var conteudoCelula = tabela.rows[i].cells[1].innerText;
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
        tabela.rows[i].style.display = corresponde ? '' : 'none';
    }
};
</script>
</body>
</html>