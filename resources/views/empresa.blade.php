<!DOCTYPE html>
<html lang="pt-br">
 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/empresa.css">
        <title>Cadastro de vagas</title>
    </head>
 
    <body>  
 
        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Cadastro da Empresa</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>
 
        <!-- Início do formulário -->
        <form>
 
            <fieldset class="grupo">
             
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome"><strong>CNPJ da Empresa</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>
 
               
                <div class="campo">
                    <label for="sobrenome"><strong>Cidade da empresa</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
                </div>
               
                <div class="campo">
                    <label for="sobrenome"><strong>Nome da empresa</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
                </div>
            </fieldset>
 
         
 
            
 
            
 
            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="experiencia"><strong>Descreva aqui as informações da vaga ofertada <span>(utilize no máximo 1000 caracteres): </span></strong></label>
                <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>
 
            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" onsubmit="">Concluído</button>            
 
        </form>
 
    </body>
 
</html>