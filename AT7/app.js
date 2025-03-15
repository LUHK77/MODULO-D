let nome = document.getElementById("#info-nome");
let image = document.getElementById("#info-imagem");
let atk = document.getElementById("#info-atk");
let hp = document.getElementById("#info-hp");
let st = document.getElementById("#info-st");
let def = document.getElementById("#info-def");
let habilidade1 = document.getElementById("#info-habilidade1");
let habilidade2 = document.getElementById("#info-habilidade2");
let descricao = document.getElementById("#info-descricao");
const id = document.getElementById("#poke-id");

function showInfo(id){
 if(id =="1"){
 nome.document.body.innerHTML = "Galo Cururu";
 image.src = "img/Galo.gif";
 atk.document.body.innerHTML = "ATK: 8";
 hp.document.body.innerHTML = "HP: 70";
 st.document.body.innerHTML = "ST: 16";
 st.document.body.innerHTML = "DEF: 5";
 habilidade1.document.body.innerHTML = "Soco Normal";
 habilidade2.document.body.innerHTML = "Garra de fogo";
 descricao.document.body.innerHTML = "Galo Cururu era um galo comum, até que, em um estranho acidente com um raio mágico, ganhou poderes de fogo. Seus penas agora eram como chamas vivas, e seus bicos" +
 "podiam disparar rajadas de fogo. Ao descobrir seus novos poderes, foi desafiado a lutar na Arena dos Elementos, um lugar onde monstros imensos enfrentavam guerreiros lendários." +
 "Em cada combate, Galo Cururu enfrentava criaturas gigantes, como o Dragão Tempestuoso e a Serpente do Mar. Sua habilidade de controlar o fogo era sua maior vantagem, mas também o maior desafio." +
 "No calor da luta, ele precisava controlar suas chamas ou poderia se consumir em seu próprio poder. Com inteligência e coragem derrotou muitos, até que chegou à luta final contra o Titã de Ferro, um monstro de metal imbatível." +
 "Na batalha, Galo Cururu usou seu fogo para derreter o Titã de Ferro por dentro, queimando sua alma. O público da arena, que antes o subestimava, agora aplaudia o galo com " +
 "respeito. Galo Cururu, o herói de fogo, se tornou uma lenda, e seus desafios nunca terminaram, pois sempre surgiam novos monstros, mas ele nunca temia, com suas chamas a brilhar na escuridão."
}

if(id == "2"){
        nome.document.body.innerHTML = "Papaco";
        image.src = "img/papaco.gif";
        atk.document.body.innerHTML = "ATK: 9";
        hp.document.body.innerHTML = "HP: 120";
        st.document.body.innerHTML = "ST: 12";
        st.document.body.innerHTML = "DEF: 6";
        habilidade1.document.body.innerHTML = "Soco Forte";
        habilidade2.document.body.innerHTML = "Pata de Grama";
        descricao.document.body.innerHTML = "No mesmo torneio, havia um cavalo incomum chamado Papaco, que, em vez de quatro pernas, tinha apenas duas, e sua pelagem era de um verde vibrante," +
        "como se fosse uma extensão da própria floresta. Seu poder vinha da força da natureza, permitindo-lhe controlar a grama, as vinhas e as árvores ao seu" +
        "redor. Papaco podia fazer raízes crescerem a partir do chão para prender seus inimigos ou gerar enormes paredes de vegetação para se proteger." +
        "Seu principal rival era Galo Cururu, o galo de fogo, e a batalha entre eles era o maior espetáculo da arena. Enquanto Galo dominava com suas chamas intensas, Papaco usava sua habilidade de manipular a" +
        "vegetação para neutralizar o fogo e criar armadilhas de raízes e espinhos. Em um combate épico, Papaco tentou envolver Galo Cururu em uma prisão de plantas, mas o galo usou suas chamas para " +
        "queimá-las e se libertar, revidando com um golpe de fogo direto."
       }

       if(id == "2"){
        nome.document.body.innerHTML = "Pirarocu";
        image.src = "img/pirarocu.gif";
        atk.document.body.innerHTML = "ATK: 6";
        hp.document.body.innerHTML = "HP: 80";
        st.document.body.innerHTML = "ST: 26";
        st.document.body.innerHTML = "DEF: 8";
        habilidade1.document.body.innerHTML = "Soco Normal";
        habilidade2.document.body.innerHTML = "Esquicho d'agua";
        descricao.document.body.innerHTML = "No mesmo torneio, havia um cavalo incomum chamado Papaco, que, em vez de quatro pernas, tinha apenas duas, e sua pelagem era de um verde vibrante," +
        "como se fosse uma extensão da própria floresta. Seu poder vinha da força da natureza, permitindo-lhe controlar a grama, as vinhas e as árvores ao seu" +
        "redor. Papaco podia fazer raízes crescerem a partir do chão para prender seus inimigos ou gerar enormes paredes de vegetação para se proteger." +
        "Seu principal rival era Galo Cururu, o galo de fogo, e a batalha entre eles era o maior espetáculo da arena. Enquanto Galo dominava com suas chamas intensas, Papaco usava sua habilidade de manipular a" +
        "vegetação para neutralizar o fogo e criar armadilhas de raízes e espinhos. Em um combate épico, Papaco tentou envolver Galo Cururu em uma prisão de plantas, mas o galo usou suas chamas para " +
        "queimá-las e se libertar, revidando com um golpe de fogo direto."
       }
}


