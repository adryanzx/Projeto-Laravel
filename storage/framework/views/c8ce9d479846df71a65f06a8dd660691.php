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
        <link rel="stylesheet" href="/css/candidato.css">
        <title>Candidato</title>
    </head>
 
    <body>  
 
        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Cadidata-se</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>
 
        <!-- Início do formulário -->
        <form>
 
            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>
 
                <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
                </div>
            </fieldset>
 
            <!-- Campo de email com-->
            <div class="campo">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" required>
            </div>
 
            <!-- Campo de desenvolvimento web com 3 opções de botões selecionáveis (radio button) e css de classe "campo" -->
            <div class="campo">
                <label><strong>De qual lado da aplicação você desenvolve?</strong></label>
                <label>
                    <input type="radio" name="devweb" value="frontend" checked>Front-end
                </label>
                <label>
                    <input type="radio" name="devweb" value="backend">Back-end
                </label>
                <label>
                    <input type="radio" name="devweb" value="fullstack">Fullstack
                </label>
            </div>
 
            <!-- Campo de senioridade com 3 opções para escolha (select option) e css de classe "campo" -->
            <div class="campo">
                <label for="senioridade"><strong>Senioridade</strong></label>
                <select id="senioridade" required>
                  <option selected disabled value="">Selecione</option>
                  <option>Júnior</option>
                  <option>Pleno</option>
                  <option>Sênior</option>
                </select>
            </div>
 
            <fieldset class="grupo">
                <!-- Campo de tecnologias para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
                <div id="check">
                    <label><strong>Selecione as tecnologias que utiliza:</strong></label><br><br>
                    <input type="checkbox" id="tecnologia1" name="tecnologia1" value="HTML">
                    <label for="tecnologia1"> HTML</label>
                    <input type="checkbox" id="tecnologia2" name="tecnologia2" value="CSS">
                    <label for="tecnologia2"> CSS</label>
                    <input type="checkbox" id="tecnologia3" name="tecnologia3" value="JavaScript">
                    <label for="tecnologia3"> JavaScript</label>
                    <input type="checkbox" id="tecnologia4" name="tecnologia4" value="PHP">
                    <label for="tecnologia4"> PHP</label>
                    <input type="checkbox" id="tecnologia5" name="tecnologia5" value="C#">
                    <label for="tecnologia5"> C#</label>
                    <input type="checkbox" id="tecnologia6" name="tecnologia6" value="Python">
                    <label for="tecnologia6"> Python</label>
                    <input type="checkbox" id="tecnologia7" name="tecnologia7" value="Java">
                    <label for="tecnologia7"> Java</label>
                </div>
            </fieldset>
 
            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="experiencia"><strong>Conte um pouco mais da sua experiência: <span>(utilize no máximo 1000 caracteres): </span> </strong></label>
                <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>
 
            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" onsubmit="">Concluído</button>            
 
        </form>
 
    </body>
 
</html><?php /**PATH C:\xampp\htdocs\AtividadeWeb\AtividadeWeb\resources\views/candidato.blade.php ENDPATH**/ ?>