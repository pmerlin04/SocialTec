var burguer =   document.querySelector('.burguer');
var navLinks =  document.querySelector('.nav-links');
var burguer1 = document.querySelector('.burguer div:nth-child(1)');
var burguer3 = document.querySelector ('.burguer div:nth-child(3)');
var burguer2 = document.querySelector ('.burguer div:nth-child(2)');

/*function do botao menu*/
burguer.addEventListener('click', () => {
    alert('oi');
    navLinks.classList.toggle('exibir');
    burguer1.classList.toggle('close1');
    burguer3.classList.toggle('close3');
    burguer2.classList.toggle('close2');
})





/*function do modo dark*/
var chk = document.getElementById('chk');

// grupos
var grupos = document.querySelector('.grupos');
var gHTML = document.querySelector('.grupoHTML');
var gCSS = document.querySelector('.grupoCSS');
var gJS = document.querySelector('.grupoJS');
var gPHP = document.querySelector('.grupoPHP');
var nomeGrupos = document.querySelector('.grupos h1');
var nomeGrupoHTML = document.querySelector('.grupoHTML h2');
var nomeGrupoCSS = document.querySelector('.grupoCSS h2');
var nomeGrupoJS = document.querySelector('.grupoJS h2');
var nomeGrupoPHP = document.querySelector('.grupoPHP h2');
var nomeGrupoJAVA = document.querySelector('.grupoJAVA h2');


// publicações
var publicacoes = document.querySelectorAll('div.pub');
var nomeUser = document.querySelectorAll('div.pub h3');
var txt = document.querySelectorAll('textarea.txt');
var nometrechoCod = document.querySelectorAll('textarea.trechoCod');


// comentários
var nomeComentario = document.querySelector('#nomeComentario');
var nomeComentFeito = document.querySelectorAll('.nomeComentFeito');
var txtComentFeito = document.querySelectorAll('.txtComentFeito');


// nova publicação
var box = document.querySelector('.box');
var legenda = document.querySelector('legend');
var labelInput = document.querySelector('label.labelInput');
var txtNP = document.querySelector('#txtNP');
var textoNP = document.querySelector('#textoNP');
var txtCodNP = document.querySelector('#txtCodNP');
var textoCodNP = document.querySelector('#textoCodNP');
var trechoNP = document.querySelector('#trechoNP');


/*nav2*/
var divPerfil = document.querySelector('div.classPerfil');
var novosUsuarios = document.querySelector('div.novosUsuarios');
var nomeUsuario = document.querySelector('#nomeUsuario');
var caixa = document.querySelector('.caixa h1');
var pessoas = document.querySelector('.fotoPessoa');


/*imagens*/
var chat = document.querySelector("#chat");
var wiki = document.querySelector("#wiki");
var comunicado = document.querySelector("#comunicado");
var light = document.querySelector("#light-mode");
var lupa = document.querySelector("#lupa");
var notificacao = document.querySelector("#notificacao");
var more = document.querySelector("#more");
var sair = document.querySelector("#sair");


chk.addEventListener('change', ()=>{
    document.body.classList.toggle('dark');

    barra.classList.toggle('dark1');
    pesquisar.classList.toggle('dark4');
    

    grupos.classList.toggle('dark4');
    gHTML.classList.toggle('dark1');
    gCSS.classList.toggle('dark1');
    gJS.classList.toggle('dark1');
    gPHP.classList.toggle('dark1');
    nomeGrupos.classList.toggle('dark3');
    nomeGrupoHTML.classList.toggle('dark3');
    nomeGrupoCSS.classList.toggle('dark3');
    nomeGrupoJS.classList.toggle('dark3');
    nomeGrupoPHP.classList.toggle('dark3');
    nomeGrupoJAVA.classList.toggle('dark3');


    chat.setAttribute('src', 'imagens/imagens/chat-b.png');
    wiki.setAttribute('src', 'imagens/imagens/wiki-b.png');
    comunicado.setAttribute('src', 'imagens/icons-feed/comunicados-b.png');
    light.setAttribute('src', 'imagens/icons-feed/light-mode.png');
    lupa.setAttribute('src', 'imagens/icons-feed/lupa-b.png');
    notificacao.setAttribute('src', 'imagens/notificacao-b.png');
    more.setAttribute('src', 'imagens/icons-feed/mais-b.png');
    sair.setAttribute('src', 'imagens/icons-feed/sair-b.png');
    
    //publicações
    publicacoes.forEach((publicacao)=>{
      publicacao.classList.toggle('dark1');
    });
    nomeUser.forEach((nomeuser)=>{
      nomeuser.classList.toggle('dark3');
    });
    txt.forEach((txtpub)=>{
      txtpub.classList.toggle('dark3');
    });
    nometrechoCod.forEach((trechocod)=>{
      trechocod.classList.toggle('dark3');
    });
    // trechoCod1.forEach((trechocod1)=>{
    //   trechocod1.classList.toggle('dark4');
    // });


    //comentários
    nomeComentario.classList.toggle('dark3');

    nomeComentFeito.forEach((nomecomentariofeito)=>{
      nomecomentariofeito.classList.toggle('dark3');
    });
    txtComentFeito.forEach((txtcomentfeito)=>{
      txtcomentfeito.classList.toggle('dark3');
    });
    

    //nova publicação
    box.classList.toggle('dark1');
    legenda.classList.toggle('dark3');
    txtNP.classList.toggle('dark3');
    textoNP.classList.toggle('dark3');
    txtCodNP.classList.toggle('dark3');
    textoCodNP.classList.toggle('dark3');
    labelInput.classList.toggle('dark3');



    /*nav2*/
    divPerfil.classList.toggle('dark4');
    novosUsuarios.classList.toggle('dark1');
    caixa.classList.toggle('dark3');
    // pedro.classList.toggle('dark3');
    nomeUsuario.classList.toggle('dark3');
    pessoas.classList.toggle('dark3');
    
})


/*function do botao dos grupos*/
var botao2 = document.querySelector('.botao');
var gruposMenu = document.querySelector('.grupos');
var botao4 = document.querySelector('.botao div:nth-child(1)');
var botao5 = document.querySelector ('.botao div:nth-child(2)');
var botao6 = document.querySelector ('.botao div:nth-child(3)');

botao2.addEventListener('click', () => {
  if (gruposMenu.style.display== "block"){
    gruposMenu.style.display="none";
  }else {
    gruposMenu.style.display="block";
  }
  botao4.classList.toggle('fechar1');
  botao5.classList.toggle('fechar2');
  botao6.classList.toggle('fechar3');
  
})

/*EXIBIR TEMA*/
var tema = document.querySelector('.grupoJAVA');
var escondido = document.querySelector('.exibirTema');
tema.addEventListener('click', function() {
    
  if(escondido.style.display === 'block') {
    escondido.style.display = 'none';
  } else {
    escondido.style.display = 'block';
  }
});


