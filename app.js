function selecionar(idcidade) {
    let url = `./back/cidade_selecionar.php?idcidade=${idcidade})`
    let req = new XMLHttpRequest()
    req.open('GET', url, false)
    req.send()
    let res = JSON.parse(req.responseText)
    console.log(res)

    document.getElementById('idcidade').value = ''
    document.getElementById('cidade').value = ''
    document.getElementById('estado').value = ''
}

function listar(){
    //Monta a url que será executada para chamar o back-end
    let url = `./back/cidade_listar.php`;
    
    //Cria a requisição http
    let req = new XMLHttpRequest();
    
    //Configura a requisição
    req.open('GET', url, false);
    
    //Executa a requisição
    req.send();
    
    //Transforma a resposta recebida do back-end em formato json
    let res = JSON.parse(req.responseText);
    
    //Exibe a resposta no console
    console.log(res);
    //Capturar o elemento TBody da table
    let t = document.getElementById(`tabela-cidade`);
    
    //Limpar as linhas existentes
    t.innerHTML = '';
    //Fazer um loop na lista de cidade e desenhar o html na table
    for (i in res){
    t.innerHTML = t.innerHTML + `<tr>
    <th scope="row">${res[i].idcidade}</th>
    <td>${res[i].cidade}</td>
    <td>${res[i].estado}</td>
    <td><button onclick="selecionar(${res[i].idcidade})"
    class="btn btn-success"
    data-toggle="modal" data-target="#modalCidade">Alterar</button>
    </td>
    <td><button onclick="excluir(${res[i].idcidade})"
    class="btn btn-danger">Excluir</button></td>
    </tr>`;
    }
}