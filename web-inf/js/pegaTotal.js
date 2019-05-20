$.ajax({
    type: 'GET',
    url: 'http://localhost/CREADF-Divida_Ativa/src/Controllers/ProcessoController.php',
    async: false,
    data: {'dados':{
        tipo: 'total'
    }},
    dataType: 'json',
    success: function(response) {
        var valor = parseFloat(response);
        var total = $("#total");
        total.text(formatarValor(valor));
        
    }
});
function formatarValor(valor) {
    return valor.toLocaleString('pt-BR', { minimumFractionDigits: 2 } );
}



