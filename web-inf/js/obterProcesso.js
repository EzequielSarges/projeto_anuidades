
var filtroo = $("#filtro-numero");

filtroo.keyup(function() {
var existente = true;
  if(filtroo.val().length > 4){
    $.ajax({
        type: 'GET',
        url: 'http://localhost/CREADF-Divida_Ativa/src/Controllers/ProcessoController.php',
        data: {'dados':{
            tipo: 'obter',
            numero: filtroo.val()
        }},
        dataType: 'json',
        success: function(response) {
            var tabela = $('#corpo-tabela');
            var numeros = document.querySelectorAll("#tdNumero");
            if(numeros.length == 0)
            {
                var linha = "<tr>"+
                                    "<td>"+ response.nome + "</td>"+
                                    "<td id='tdNumero'>"+ response.numero + "</td>"+
                                    "<td>"+ response.ef + "</td>"+
                                    "<td>"+ response.data_debito + "</td>"+
                                    "<td>"+ response.valor_originario + "</td>"+
                                    "<td>"+ response.valor_atualizado + "</td>"+
                                "</tr>";
                        tabela.append(linha);
            }
            if(numeros.length > 0)
            {
                for(i=0;i<numeros.length;i++)
                {
                    var n = numeros[i].textContent;
                    
                    if(response.numero == n)
                    {
                        existente = false;
                    }
                }
                if(existente)
                {
                    var linha = "<tr>"+
                                    "<td>"+ response.nome + "</td>"+
                                    "<td id='tdNumero'>"+ response.numero + "</td>"+
                                    "<td>"+ response.ef + "</td>"+
                                    "<td>"+ response.data_debito + "</td>"+
                                    "<td>"+ response.valor_originario + "</td>"+
                                    "<td>"+ response.valor_atualizado + "</td>"+
                                "</tr>";
                        tabela.append(linha);
                }
            }
        }
    });
  }

  });
/*$.ajax({
    type: 'GET',
    url: 'http://localhost/CREADF-Divida_Ativa/src/Controllers/ProcessoController.php',
    async: false,
    data: {'dados':{
        tipo: 'listar'
    }},
    dataType: 'json',
    success: function(response) {
        valorTotal = 0;
        var tabela = $('#corpo-tabela');
        response.forEach(function(objeto){
            var linha = "<tr>"+
                            "<td>"+ objeto.nome + "</td>"+
                            "<td>"+ objeto.numero + "</td>"+
                            "<td>"+ objeto.ef + "</td>"+
                            "<td>"+ objeto.data_debito + "</td>"+
                            "<td>"+ objeto.valor_originario + "</td>"+
                            "<td>"+ objeto.valor_atualizado + "</td>"+
                        "</tr>";
        tabela.append(linha);
        valorTotal += parseFloat(objeto.valor_atualizado);
        });
        var total = $("#total");
        total.text(valorTotal.toFixed(2));
    }
});*/