<?php

    if(isset($_POST["BTNregister"])) {
        include_once('config.php');

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sorte = $_POST['sorte'];
        $sorteMax = $_POST['sorte'];
        $tipo = $_POST['tipo'];

        $motivacao = $_POST["motivacao"];
        $orgulho = $_POST["orgulho"];
        $ancora = $_POST["ancora"];
        $problema = $_POST["problema"];

        $relacaoP1 = $_POST["relacaoP1"];
        $relacaoP2 = $_POST["relacaoP2"];
        $relacaoP3 = $_POST["relacaoP3"];
        $relacaoP4 = $_POST["relacaoP4"];
        $relacaoNPC1nome = $_POST["relacaoNPC1nome"];
        $relacaoNPC2nome = $_POST["relacaoNPC1nome"];
        $relacaoNPC1 = $_POST["relacaoNPC1"];
        $relacaoNPC2 = $_POST["relacaoNPC1"];

        $item = $_POST["item"];

        $esconderijo = $_POST["esconderijo"];

        $corpoATT = $_POST["corpoATT"];
        $tecnoATT = $_POST["tecnoATT"];
        $coracATT = $_POST["coracATT"];
        $menteATT = $_POST["menteATT"];

        $furtPER = $_POST["furtPER"];
        $forcPER = $_POST["forcPER"];
        $moviPER = $_POST["moviPER"];

        $mecaPER = $_POST["mecaPER"];
        $progPER = $_POST["progPER"];
        $calcPER = $_POST["calcPER"];

        $contPER = $_POST["contPER"];
        $charPER = $_POST["charPER"];
        $lidePER = $_POST["lidePER"];

        $invePER = $_POST["invePER"];
        $compPER = $_POST["compPER"];
        $empaPER = $_POST["empaPER"];

        $senha = $_POST["senha"];
        $logi = $_POST["logi"];

        $anotacoes = $_POST["anotacoes"];

        $CONDpert = "N";
        $CONDapav = "N";
        $CONDexau = "N";
        $CONDferi = "N";
        $CONDqueb = "N";

        $exp = "0";

        $PTSatt = "0";
        $PTSper = "0";

        $result = mysqli_query($conectar, "INSERT INTO players(nome,idade,sorte,sorteMax,tipo,motivacao,orgulho,ancora,problema,relacaoP1,relacaoP2,relacaoP3,relacaoP4,relacaoNPC1nome,relacaoNPC2nome,relacaoNPC1,relacaoNPC2,item,esconderijo,ATTcorpo,ATTtechno,ATTcoracao,ATTmente,PERfurt,PERforc,PERmovi,PERmeca,PERprog,PERcalc,PERcont,PERchar,PERlide,PERinve,PERcomp,PERempa,senha,logi,anotacoes,CONDpert,CONDapav,CONDexau,CONDferi,CONDqueb,exp,PTSatt,PTSper) 
        VALUES ('$nome','$idade','$sorte','$sorteMax','$tipo','$motivacao','$orgulho','$ancora','$problema','$relacaoP1','$relacaoP2','$relacaoP3','$relacaoP4','$relacaoNPC1nome','$relacaoNPC2nome','$relacaoNPC1','$relacaoNPC2','$item','$esconderijo','$corpoATT','$tecnoATT','$coracATT','$menteATT','$furtPER','$forcPER','$moviPER','$mecaPER','$progPER','$calcPER','$contPER','$charPER','$lidePER','$invePER','$compPER','$empaPER','$senha','$logi','$anotacoes','$CONDpert','$CONDapav','$CONDexau','$CONDferi','$CONDqueb','$exp','$PTSatt','$PTSper')");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            overflow: hidden;
            margin: 0 5px 0 0;
            background-color: #F36E11;
        }

        #main {
            display: flex;
        }

        #mainL {
            height: 100vh;
            width: 50vw;
            background-size: cover;
            background-position: left;
            background-image: url(https://www.rederpg.com.br/wp/wp-content/uploads/2020/04/Contos-do-Loop.jpg);
            background-repeat: no-repeat;
            flex: 1;
        }

        #mainR {
            right: 0;
            display: flex;
            flex: 1;
            padding-left: 5px;
            width: 100vw;
            height: 100vh;
            overflow: scroll;
            overflow-x: hidden;
        }

        /**/

        #desc {
            top: 0;
            left: 0;
            position: absolute;
            display: none;
            background-color: chocolate;
            width: 50%;
            float: center;
        }

        #desc i {
            float: right;
        }

        /**/

        #left, #right {
            padding: 5px;
            width: 100%;
        }

        /**/

        h2, h1, p, label {
            margin: 0;
            padding: 0 5px;
        }

        .h1 {
            padding: 0;
            background-color: black;
            color: white;
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .campo {
            background-color: #3F959D;
            display: flex;
            width: 100%;
            padding: 5px 0;
            justify-content: space-between;
            border-bottom: 2px solid black;
        }

        .campo:nth-child(even) {
            color: white;
            background-color: #484173;
        }

        .campo div {
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .campo div div {
            display: grid;
            padding-left: 5px;
        }

        .campo div div button {
            margin: 2px;
        }

        /**/

        .input {
            width: min-content;
            background: transparent;
            margin: 0 5px;
            border: 0;
            border-bottom: 2px solid black;
        }

        input:not(.input) {
            width: 50px;
            font-size: 30px;
            pointer-events: none;
        }

        /**/

        textarea {
            height: 200px;
            min-width: 390px;
        }

        .disabled {
            pointer-events: none;
        }
    </style>
</head>
<body>
    <div id="desc">
        <i class="fa-solid fa-xmark" onclick="document.getElementById('desc').style.display = 'none', document.getElementById('descTXT').innerHTML = ''"></i>
        <div id="descTXT">

        </div>
    </div>

    <div id="main">
        <div id="mainL">
            <button type="button" onclick="document.getElementById('mainL').style.display = 'none'">X</button>
        </div>
    
        <form id="mainR" autocomplete="off" action="formulario.php" method="POST">
            
            <div id="right">
                <div id="player">
                    <div class="h1" onclick="descricao(idadeA)">
                        <h1>Player</h1>
                    </div>
                    <div class="campo">
                        <label for="nome">Nome: <i id="erro1" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="45" id="nome" name="nome" class="input" onchange="inputErro(this.value, 'erro1')">
                    </div>
                    <div class="campo">
                        <label for="idade">Idade:</label>
                        <input type="number" min="10" max="15" id="idade" name="idade" class="input" value="10" onchange="idadef()">
                    </div>
                    <div class="campo">
                        <label for="sorte">Pontos de Sorte:</label>
                        <input type="number" class="input disabled" id="sorte" name="sorte" value="5">
                    </div>
                    <div class="campo">
                        <label for="classe">Tipo: </label>
                        <select id="classe" name="tipo" onchange="classef(this.value)" class="input">
                            <option value="Leitor">Leitor</option>
                            <option value="Nerd">Nerd</option>
                            <option value="Caipira">Caipira</option>
                            <option value="Atleta">Atleta</option>
                            <option value="Popular">Popular</option>
                            <option value="Roqueiro">Roqueiro</option>
                            <option value="Encrenqueiro">Encrenqueiro</option>
                            <option value="Esquisitão">Esquisitão</option>
                        </select>
                    </div>
                </div>
            
                <div id="background">
                    <div class="h1" onclick="descricao(backgroundA)">
                        <h1>Background</h1>
                    </div>
                    <div class="campo">
                        <label for="motivacao">Motivação: <i id="erro2" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="motivacao" name="motivacao" class="input" onchange="inputErro(this.value, 'erro2')">
                    </div>
                    <div class="campo">
                        <label for="orgulho">Orgulho: <i id="erro3" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="orgulho" name="orgulho" class="input" onchange="inputErro(this.value, 'erro3')">
                    </div>
                    <div class="campo">
                        <label for="ancora">Âncora: <i id="erro4" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="ancora" name="ancora" class="input" onchange="inputErro(this.value, 'erro4')">
                    </div>
                    <div class="campo">
                        <label for="problema">Problema: <i id="erro5" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="problema" name="problema" class="input" onchange="inputErro(this.value, 'erro5')">
                    </div>
                </div>

                <div id="relacoes">
                    <div class="h1" onclick="descricao(relacoesA)">
                        <h1>Relações</h1>
                    </div>
                    <div class="campo">
                        <label for="relacaoP1">Adria? <i id="erro7" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="relacaoP1" name="relacaoP1" class="input" onchange="inputErro(this.value, 'erro7')">
                    </div>
                    <div class="campo">
                        <label for="relacaoP2">Luis? <i id="erro9" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="relacaoP2" name="relacaoP2" class="input" onchange="inputErro(this.value, 'erro9')">
                    </div>
                    <div class="campo">
                        <label for="relacaoP3">João? <i id="erro11" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="relacaoP3" name="relacaoP3" class="input" onchange="inputErro(this.value, 'erro11')">
                    </div>
                    <div class="campo">
                        <label for="relacaoP4">Tadao? <i id="erro13" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="relacaoP4" name="relacaoP4" class="input" onchange="inputErro(this.value, 'erro13')">
                    </div>
                    <div class="campo">
                        <input type="text" maxlength="45" placeholder="NPC 1" id="relacaoNPC1nome" name="relacaoNPC1nome" class="input" onchange="inputErro(this.value, 'erro14')">
                        <label for="relacaoNPC1nome"><i id="erro14" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <label for="relacaoNPC1"><i id="erro15" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="relacaoNPC1" name="relacaoNPC1" class="input" onchange="inputErro(this.value, 'erro15')">
                    </div>
                    <div class="campo">
                        <input type="text" maxlength="45" placeholder="NPC 2" id="relacaoNPC2nome" name="relacaoNPC2nome" class="input" onchange="inputErro(this.value, 'erro16')">
                        <label for="relacaoNPC2nome"><i id="erro16" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <label for="relacaoNPC2"><i id="erro17" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="100" id="relacaoNPC2" name="relacaoNPC2" class="input" onchange="inputErro(this.value, 'erro17')">
                    </div>
                </div>
                
                <div id="itens">
                    <div class="h1" onclick="descricao(itemA)">
                        <h1>Itens</h1>
                        <h2>Bônus</h2>
                    </div>
                    <div class="campo">
                        <input type="text" maxlength="45" placeholder="Item Icônico" id="item" name="item" class="input" onchange="inputErro(this.value, 'erro18')">
                        <label for="item"><i id="erro18" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <p class="foda">+ 2</p>
                    </div>
                    
                </div>

                <div id="esconder">
                    <div class="h1" onclick="descricao(escondeA)">
                        <h1>Esconderijo <i id="erro19" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></h1>
                    </div>
                    <textarea maxlength="200" id="esconderijo" name="esconderijo" onchange="inputErro(this.value, 'erro19')"></textarea>
                </div>

                <div id="login">
                    <div class="h1">
                        <h1>Criar Conta</h1>
                    </div>
                    <div class="campo" style="justify-content: center;">
                        <input type="password" maxlength="45" id="senha" name="senha" placeholder="Senha" class="input" onchange="inputErro(this.value, 'erro21')"> 
                        <label for="senha"><i id="erro21" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <label for="logi"><i id="erro20" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></label>
                        <input type="text" maxlength="45" id="logi" name="logi" placeholder="ID" class="input"  onchange="inputErro(this.value, 'erro20')">
                    </div>
                    <div class="campo" style="justify-content: space-around;">
                        <button type="submit" disabled id="BTNregister" name="BTNregister">Criar Conta</button>
                        <a href="login.php"><button type="button">Login</button></a>
                    </div>
                </div>

                <div id="notas">
                    <div class="h1">
                        <h1>Anotações</h1>
                    </div>
                    <textarea maxlength="400" id="anotacoes" name="anotacoes"></textarea>
                </div>
            </div>

            <div id="left">
                <div id="atributos">
                    <div class="h1">
                        <h1>Atributos <i id="erro22" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></h1>
                        <h2>Pontos: <span id="pontos">6</span></h2>
                    </div>
                    <div class="campo">
                        <p>Corpo</p>

                        <div>
                            <input type="number" class="ATT none" id="corpoATT" name="corpoATT" value="1" readonly>
                            <div>
                                <button type="button" onclick="pontos('corpoATT', 1), inputErro2(document.getElementById('pontos').innerHTML, 'erro22')">+</button>
                                <button type="button" onclick="pontos('corpoATT', -1), inputErro2(document.getElementById('pontos').innerHTML, 'erro22')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Tecnologia</p>

                        <div>
                            <input type="number" class="ATT none" id="tecnoATT" name="tecnoATT" value="1" readonly>
                            <div>
                                <button type="button" onclick="pontos('tecnoATT', 1), inputErro2(document.getElementById('pontos').innerHTML, 'erro22')">+</button>
                                <button type="button" onclick="pontos('tecnoATT', -1), inputErro2(document.getElementById('pontos').innerHTML, 'erro22')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Coração</p>

                        <div>
                            <input type="number" class="ATT none" id="coracATT" name="coracATT" value="1" readonly>
                            <div>
                                <button type="button" onclick="pontos('coracATT', 1), inputErro2(document.getElementById('pontos').innerHTML, 'erro22')">+</button>
                                <button type="button" onclick="pontos('coracATT', -1), inputErro2(document.getElementById('pontos').innerHTML, 'erro22')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Mente</p>

                        <div>
                            <input type="number" class="ATT none" id="menteATT" name="menteATT" value="1" readonly>
                            <div>
                                <button type="button" onclick="pontos('menteATT', 1), inputErro2(document.getElementById('pontos').innerHTML, 'erro22')">+</button>
                                <button type="button" onclick="pontos('menteATT', -1), inputErro2(document.getElementById('pontos').innerHTML, 'erro22')">-</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="pericias">
                    <div class="h1" onclick="descricao(periciasA)">
                        <h1>Perícias <i id="erro23" class="fa-solid fa-exclamation" style="color: #ff0000;"></i></h1>
                        <h2>Pontos: <span id="pontosPER">10</span></h2>
                    </div>
                    <div class="campo">
                        <p>Furtividade(Corpo)<i id="furtCAMPO" class="especial fa-solid"></i></p>
                    
                        <div>
                            <input type="number" class="PERS none" id="furtPER" name="furtPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('furtPER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('furtPER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Força(Corpo)<i id="forcCAMPO" class="especial fa-solid"></i></p>

                        <div>
                            <input type="number" class="PERS none" id="forcPER" name="forcPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('forcPER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('forcPER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Movimento(Corpo)<i id="moviCAMPO" class="especial fa-solid"></i></p>

                        <div>
                            <input type="number" class="PERS none" id="moviPER" name="moviPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('moviPER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('moviPER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>

                    <div class="campo">
                        <p>Mecânica(Tecno)<i id="mecaCAMPO" class="especial fa-solid"></i></p>

                        <div>
                            <input type="number" class="PERS none" id="mecaPER" name="mecaPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('mecaPER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('mecaPER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Programação(Tecno)<i id="progCAMPO" class="especial fa-solid"></i></p>

                        <div>
                            <input type="number" class="PERS none" id="progPER" name="progPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('progPER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('progPER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Cálculo(Tecno)<i id="calcCAMPO" class="especial fa-solid fa-star"></i></p>

                        <div>
                            <input type="number" class="PERS none chave" id="calcPER" name="calcPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('calcPER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('calcPER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>

                    <div class="campo">
                        <p>Contatos(Coração)<i id="contCAMPO" class="especial fa-solid"></i></p>

                        <div>
                            <input type="number" class="PERS none" id="contPER" name="contPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('contPER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('contPER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Charme(Coração)<i id="charCAMPO" class="especial fa-solid"></i></p>

                        <div>
                            <input type="number" class="PERS none" id="charPER" name="charPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('charPER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('charPER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Liderança(Coração)<i id="lideCAMPO" class="especial fa-solid"></i></p>

                        <div>
                            <input type="number" class="PERS none" id="lidePER" name="lidePER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('lidePER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('lidePER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>

                    <div class="campo">
                        <p>Investigação(Mente)<i id="inveCAMPO" class="especial fa-solid fa-star"></i></p>

                        <div>
                            <input type="number" class="PERS none chave" id="invePER" name="invePER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('invePER', 1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('invePER', -1), inputErro2(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Compreenção(Mente)<i id="compCAMPO" class="especial fa-solid fa-star"></i></p>

                        <div>
                            <input type="number" class="PERS none chave" id="compPER" name="compPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('compPER', 1), inputErro(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('compPER', -1), inputErro(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <p>Empatia(Mente)<i id="empaCAMPO" class="especial fa-solid"></i></p>

                        <div>
                            <input type="number" class="PERS none" id="empaPER" name="empaPER" value="0" readonly>
                            <div>
                                <button type="button" onclick="pericias('empaPER', 1), inputErro(document.getElementById('pontosPER').innerHTML, 'erro23')">+</button>
                                <button type="button" onclick="pericias('empaPER', -1), inputErro(document.getElementById('pontosPER').innerHTML, 'erro23')">-</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="xp">
                    <div class="h1">
                        <h1>Experiência</h1>
                    </div>
                <div class="campo">
                    <input type="range" min="0" max="10" value="0" id="xpRange" onchange="document.querySelector('#xpNum').innerHTML = document.querySelector('#xpRange').value" disabled style="width: fit-content;">
                    <input type="text" id="exp" name="exp" class="disabled input" value="0" readonly>
                </div>
                </div>

                <div id="condicoes">
                    <div class="h1">
                        <h1>Condições</h1>
                    </div>

                    <div class="campo">
                        <p>Perturbado</p>
                        <input type="checkbox" class="input disabled" value="1">
                    </div>
                    <div class="campo">
                        <p>Apavorado</p>
                        <input type="checkbox" class="input disabled" value="1">
                    </div>
                    <div class="campo">
                        <p>Exausto</p>
                        <input type="checkbox" class="input disabled" value="1">
                    </div>
                    <div class="campo">
                        <p>Ferido</p>
                        <input type="checkbox" class="input disabled" value="1">
                    </div>
                    <div class="campo">
                        <p>Quebrado</p>
                        <input type="checkbox" name="CONDqueb" id="CONDqueb" class="input disabled" value="1">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>

        function idadef() {
            document.querySelector("#sorte").value = 15 - document.querySelector("#idade").value;
            document.querySelector("#pontos").innerHTML = document.querySelector("#idade").value - 4;

            for (let index = 0; index < 4; index++) {
                document.querySelectorAll(".ATT")[index].value = 1;
            }
        }

        function pontos(alvo, x) {
            if(x == 1 && document.querySelector("#pontos").innerHTML == 0) {
                return;
            } else if(x == -1 && document.getElementById(alvo).value == 1) {
                return;
            } else if(x == 1 && document.getElementById(alvo).value == 5) {
                return;
            }
            document.getElementById(alvo).value = parseInt(document.getElementById(alvo).value) + x;
            document.querySelector("#pontos").innerHTML = parseInt(document.getElementById("pontos").innerHTML) - x;
        }

        function pericias(alvo, x) {
            if(document.getElementById(alvo).classList.contains("chave")) {
                if(x == 1 && document.getElementById(alvo).value == 3) {
                    return;
                }
            } else {
                if(x == 1 && document.getElementById(alvo).value == 1) {
                    return;
                }
            }

            if(x == -1 && document.getElementById(alvo).value == 0) {
                return;
            } else if(x == 1 && document.querySelector("#pontosPER").innerHTML == 0) {
                return;
            }

            document.getElementById(alvo).value = parseInt(document.getElementById(alvo).value) + x;
            document.querySelector("#pontosPER").innerHTML = parseInt(document.getElementById("pontosPER").innerHTML) - x;
        }

        function classef(y) {
            for (let index = 0; index < 12; index++) {
                
                document.querySelectorAll(".especial")[index].classList.remove("fa-star")
                if (document.querySelectorAll(".chave").length > 0) {
                    document.querySelectorAll(".chave")[0].classList.remove("chave")
                }
            }

            for (let index = 0; index < 12; index++) {
                document.querySelectorAll(".PERS")[index].value = 0;
            }
            document.querySelector("#pontosPER").innerHTML = 10;
            
            switch (y) {
                case "Leitor":
                    document.getElementById("calcCAMPO").classList.add('fa-star');
                    document.getElementById("calcPER").classList.add('chave');
                    document.getElementById("inveCAMPO").classList.add('fa-star');
                    document.getElementById("invePER").classList.add('chave');
                    document.getElementById("compCAMPO").classList.add('fa-star');
                    document.getElementById("compPER").classList.add('chave');
                    break;
                case "Nerd":
                    document.getElementById("calcCAMPO").classList.add('fa-star');
                    document.getElementById("calcPER").classList.add('chave');
                    document.getElementById("progCAMPO").classList.add('fa-star');
                    document.getElementById("progPER").classList.add('chave');
                    document.getElementById("compCAMPO").classList.add('fa-star');
                    document.getElementById("compPER").classList.add('chave');
                    break;
                case "Caipira":
                    document.getElementById("forcCAMPO").classList.add('fa-star');
                    document.getElementById("forcPER").classList.add('chave');
                    document.getElementById("moviCAMPO").classList.add('fa-star');
                    document.getElementById("moviPER").classList.add('chave');
                    document.getElementById("mecaCAMPO").classList.add('fa-star');
                    document.getElementById("mecaPER").classList.add('chave');
                    break;
                case "Atleta":
                    document.getElementById("forcCAMPO").classList.add('fa-star');
                    document.getElementById("forcPER").classList.add('chave');
                    document.getElementById("moviCAMPO").classList.add('fa-star');
                    document.getElementById("moviPER").classList.add('chave');
                    document.getElementById("contCAMPO").classList.add('fa-star');
                    document.getElementById("contPER").classList.add('chave');
                    break;
                case "Popular":
                    document.getElementById("contCAMPO").classList.add('fa-star');
                    document.getElementById("contPER").classList.add('chave');
                    document.getElementById("charCAMPO").classList.add('fa-star');
                    document.getElementById("charPER").classList.add('chave');
                    document.getElementById("lideCAMPO").classList.add('fa-star');
                    document.getElementById("lidePER").classList.add('chave');
                    break;
                case "Roqueiro":
                    document.getElementById("moviCAMPO").classList.add('fa-star');
                    document.getElementById("moviPER").classList.add('chave');
                    document.getElementById("charCAMPO").classList.add('fa-star');
                    document.getElementById("charPER").classList.add('chave');
                    document.getElementById("empaCAMPO").classList.add('fa-star');
                    document.getElementById("empaPER").classList.add('chave');
                    break;
                case "Encrenqueiro":
                    document.getElementById("forcCAMPO").classList.add('fa-star');
                    document.getElementById("forcPER").classList.add('chave');
                    document.getElementById("furtCAMPO").classList.add('fa-star');
                    document.getElementById("furtPER").classList.add('chave');
                    document.getElementById("lideCAMPO").classList.add('fa-star');
                    document.getElementById("lidePER").classList.add('chave');
                    break;
                case "Esquisitão":
                    document.getElementById("furtCAMPO").classList.add('fa-star');
                    document.getElementById("furtPER").classList.add('chave');
                    document.getElementById("inveCAMPO").classList.add('fa-star');
                    document.getElementById("invePER").classList.add('chave');
                    document.getElementById("empaCAMPO").classList.add('fa-star');
                    document.getElementById("empaPER").classList.add('chave');
                    break;
            }
        }

            let backgroundA = [
                "<h1>Motivação</h1>",
                "<p>Sua Motivação é a razão pela qual você se expõe ao perigo, o motivo que não te deixa desistir.</p>",
                "<h1>Orgulho</h1>",
                "<p>Seu Orgulho é algo que faz você se sentir forte e importante. Uma vez por jogo, você pode gastar o seu Orgulho para conseguir um sucesso instantâneo em qualquer teste.</p>",
                "<h1>Âncora</h1>",
                "<p>Sua Âncora é alguém com quem você pode conseguir apoio e cuidado. A Âncora pode ser um amigo, um familiar, um professor ou um vizinho (não pode ser outro Player). Se você estiver sofrendo de uma ou mais Condições, você pode passar uma cena com sua Âncora para curar todas as Condições.</p>",
                "<h1>Problema</h1>",
                "<p>É uma parte da sua vida cotidiana, é algo que te preocupa, ele será usado para colocar você em apuros.</p>"
            ];

            let idadeA = [
                "<h1>Idade</h1>",
                "<p>Neste jogo, seu personagem tem entre 10 e 15 anos, você pode escolher livremente sua idade e data de aniversário. Sua idade afeta seus Atributos e seus Pontos De Sorte, mas também afeta a forma com que você interpreta seu personagem. Ser mais velho significa Atributos mais altos, mas menos Pontos De Sorte.</p>",
                "<h1>Pontos de Sorte</h1>",
                "<p>Sempre que você falhar em um teste, você pode gastar um Ponto de Sorte para refazer o teste.</p>",
                "<h1>Tipo</h1>",
                "S"
            ];

            let relacoesA = [
                "<h1>Relações</h1>",
                "<p>Esta parte fica melhor ao fazer junto com os outros players. Se alguém tem o Relacionamento 'Irmão mais velho' de outro jogador, os dois precisam concordar nisso. Nenhum dos jogadores deve ser inimigo, mas é divertido ter uma tensão entre o grupo; amor, inveja, desconfiança. Você deve ter um relacionamento para cada player, e também deve ter Relacionamentos com 2 NPCs.</p>"
            ];

            let itemA = [
                "<h1>Itens</h1>",
                "A maioria dos objetos encontrados na aventura são coisas cotidianas, só para criar a atmosfera, mas isso não afeta as jogadas de dados. Mas alguns itens podem ser úteis para superar os problemas, esses itens dão de 1 à 3 dados extras em testes.",
                "<h1>Item Icônico</h1>",
                "Você começa o jogo com um Item Icônico, e ele funciona como um item normal. Este item dá +2 dados em testes que usem ele, o iyem não quebra ou desaparece não importa o que aconteça, a menos que você queira. O Item Icônico não pode ser usado por outros Players."
            ];
            
            let atributosA = [
                "<h1>Atributos</h1>",
                "<p>Seu personagem é definido por 4 Atributos que dizem no que vocÊ é bom e como pode lidar com seus problemas. Você deve distribuir seus pontos entre os 4 Atributos, cada um deve ter no mínimo 1 ponto e no máximo 5, a quantidade de pontos que você tem é igual a sua Idade. Os Atributos são:</p>",
                "<ul><li>Corpo: é a capacidade física, a abilidade de correr, escalar, lutar e pular.</li> <li>Tecnologia: é a abilidade de entender máquinas, usar tecnologia, consertar, criar e manipular programas e máquinas.</li> <li>Coração: é a força da personalidade, a abilidade de fazer amigos, mentir e entender as pessoas.</li> <li>Mente: é o conhecimento, a abilidade de encontrar coisas escondidas, achar pontos fracos e entender pistas.</li></ul>"
            ];

            let periciasA = [
                "<h1>Perícias</h1>",
                "<p>Cada Atributo possui 3 Perícias conectadas, estas são as áreas onde o seu personagem é bem treinado. No começo você possui 10 pontos para distribuir entre as Perícias, o máximo de pontos em uma Perícia é 1, mas seu Tipo te dá 3 Perícias Chave, essas tem o máximo de 3. As perícias são:</p>",
                "<ul><li>Furtividade: é a habilidade de se esconder.</li> <li>Força: é a habilidade de levantar coisas pesadas e lutar.</li> <li>Movimento: é a habilidade de correr, se equilibrar e escalar</li> <li>Mecânica: é a habilidade de criar e manipular máquinas e items mecânicos.</li> <li>Programação: é a habilidade de criar e manipular algoritmos e eletrônicos.</li> <li>Cálculo: é a habilidade de entender máquinas e outros sistemas técnicos.</li> <li>Contatos: é a habilidade de conhecer a pessoa certa para qualquer situação.</li> <li>Charme: é a habilidade de fazer amizades, mentir e manipular pessoas.</li> <li>Liderança: é a habilidade de inspirar os outros e ajudar alguém assustado.</li> <li>Investigação: é a abilidade de achar pistas e coisas escondidas.</li> <li>Compreenção: é a habilidade de lembrar informações importantes ou saber encontrá-las em uma biblioteca</li> <li>Empatia: é a habilidade de entender uma pessoa ou um animal, e conseguir encontrar seus ponto fracos.</li></ul>"
            ];

            let escondeA = [
                "<h1>Esconderijo</h1>",
                "<p>É uma 'base', um lugar seguro. Se você sofrendo de alguma condição, você pode ir para o Esconderijo para se curar, o Esconderjo é um lugar totalmente seguro, NPCs não podem entrar e nenhum perigo pode te afetar. Todos os players devem ter o mesmo Esconderijo.</p>"
            ]
                
            let exp = [
                "<h1></h1>",
                "<p></p>"
            ]

        function descricao(array) {

            document.getElementById('descTXT').innerHTML = '';
            document.getElementById("desc").style.display = 'block';
            for (let index = 0; index < array.length; index++) {
                const element = array[index];
                document.getElementById("descTXT").innerHTML += element;
            }
        }

        function inputErro(valor, erro) {
            if(valor != '') {
                document.getElementById(erro).classList.remove('fa-exclamation')
            } else {
                document.getElementById(erro).classList.add('fa-exclamation')
            }

            if(document.getElementsByClassName("fa-exclamation").length == 0) {
                document.getElementById("BTNregister").disabled = false
            } else {
                document.getElementById("BTNregister").disabled = true
            }
        }

        function inputErro2(valor, erro) {
            if(valor == '0') {
                document.getElementById(erro).classList.remove('fa-exclamation')
            } else {
                document.getElementById(erro).classList.add('fa-exclamation')
            }

            if(document.getElementsByClassName("fa-exclamation").length == 0) {
                document.getElementById("BTNregister").disabled = false
            } else {
                document.getElementById("BTNregister").disabled = true
            }
        }
                
    </script>
</body>
</html>