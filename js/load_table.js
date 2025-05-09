
let dados_tabela = document.getElementById("dados")
let html = "";

async function load_table(){
    
    let dados_php = await fetch('./actions/carrega_tabela.php');
    let response = await dados_php.json();

    for(var i = 0; i < response.length; i++){
        html += '<tr>';
        html += '<td>';
        html += response[i].id_prod;
        html += '</td>';
        html += '<td>';
        html += response[i].nome;
        html += '</td>';
        html += '<td>';
        html += response[i].descricao;
        html += '</td>';
        html += '<td>';
        html += response[i].quantidade;
        html += '</td>';
        html += '<td>';
        html += response[i].preco;
        html += '</td>';
        html += '<td>';
        html += response[i].tipo;
        html += '</td>';
        html += '</tr>';
    }
    dados_tabela.innerHTML = html;
}


