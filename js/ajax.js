/**
 * Função Ajax genérica
 * @param string url Url para execução de rotina
 * @param string method Método de envio de informações: POST, PUT, GET
 * @param array form Formulário de dados
 * @param string type Tipo de retorno: HTML, JSON, TEXT
 * @param integer timeout Tempo máximo de execução
 * @param string callSuccess String com nome de função a ser executada quando a função for bem-sucedida
 * @param string callError String com nome de função a ser executada quando a função apresentar algum erro
 * @returns {undefined}
 */
 function C (url, method, form, type, timeout, callSuccess, callError) {
    $.ajax({
        type: method, 
        url: url, 
        data: form, 
        dataType: type, 
        timeout: timeout
    }).done(function(data) {
        if (data.isSuccess === true) {
            var funcName = callSuccess;
            window[funcName](data);
        } else {
            var funcName = callError;
            window[funcName](data);
        }
    }).fail(function(jqXHR, textStatus ) {
        if (textStatus === 'timeout') {     
            alert('Limite de tempo de execução atingido. Por favor, tente novamente.'); 
        } else {
            alert('Falha em requisição: ' + textStatus);
        }
        return false;
    });
}