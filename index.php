<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.11.13/lib/p5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.11.13/lib/addons/p5.sound.min.js"></script>
    
    
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8"/>
    <title>Gerar TXT com JS</title>

  </head>
  <body>
    <form action = "/processar_cadastro" method = "POST">
      
          <br><br><label for="nome">Nome: </label><br>
          <input type = "text" id = "conteudo1" name = "nome" placeholder = "Digite seu nome" required><br><br>
  
    <label for = "email">E-mail: </label><br>
    <input type = "email" id="conteudo2" name = "email" placeholder = "Seu email@exemplo.com" required><br><br>
  
    <label for="senha">Senha:</label><br>
    <input type = "password" id = "conteudo3" name = "senha" placeholder = "Digite sua senha" minimum length = "6" required><br><br>
      
    <label for ="data_nasc">Data de nascimento: </label><br>
    <input type="date" id = "conteudo4" name = "nascimento"><br><br>
      
      <label>Gênero:</label><br>
      <input type = "radio" id = "conteudo5" name = "genero" value = "masculino">
      <label for="masculino">Masculino</label>
      <input type = "radio" id = "conteudo6" name = "genero" value = "feminino">
      <label for="feminino">Feminino</label>
      
    <h3>Conteúdo do arquivo:</h3>
    <textarea id = "conteudo7" rows="4" cols="30">texto de exemplo...</textarea>
    <br>
    <button id="btnSalvar">Salvar.txt</button>
      
    </form>

    <script src="sketch.js"></script>
  </body>
</html>
