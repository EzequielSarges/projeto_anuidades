$.ajax({
    type: 'GET',
    url: 'http://localhost/CREADF-Divida_Ativa/src/Controllers/ProcessoController.php',
    data: {'dados':{
        tipo: 'cadastrar',
        nome: 'Teste1',
        numero: '29720/2008',
        ef: 'Teste1',
        data_debito: '2015-05-04',
        valor_original: 325.2,
        valor_atualizado: 324.1
    }},
    dataType: 'json',
    success: function(response) {
      console.log(response);
    }
});