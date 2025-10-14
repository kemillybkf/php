<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #1e5200ff;
        margin: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;  /* centraliza verticalmente */
        align-items: center;      /* centraliza horizontalmente */
        color: #ffffffff;
      }

      h1 {
        color: #ffffffff;
        margin-bottom: 10px;
      }

      p {
        max-width: 500px;
        text-align: center;
        margin-bottom: 30px;
      }

      .right-side {
        background: #ffffffff;
        padding: 20px;
        max-width: 350px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        width: 100%;
        box-sizing: border-box;
        color: #1e5200ff;
      }

      .right-side h2 {
        margin-bottom: 15px;
        text-align: center;
      }

      input {
        display: block;
        width: 100%;
        padding: 10px 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        box-sizing: border-box;
      }

      button {
        width: 100%;
        padding: 10px;
        background-color: #1e5200ff;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      button:hover {
        background-color: #45a049;
      }

      #resultado {
        margin-top: 15px;
        text-align: center;
        font-weight: bold;
      }
    </style>
</head>
<body>
    <h1>Erik e Kêmilly</h1>
    <p>Backend é a parte por trás do código, onde são gerenciados todos os comandos de um site ou aplicativo.</p>
    <div class="right-side">
      <h2>FORMULÁRIO</h2>
      <input id="nome" placeholder="Nome">
      <input id="email" type="email" placeholder="Email">
      <button onclick="cadastrar()">Enviar</button>
      <div id="resultado"></div>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        echo"Olá, $nome!";
        echo "Seu e-mail é: $email";
    }
    ?>
    <script>
      function cadastrar() {
        const nome = document.getElementById("nome").value.trim();
        const email = document.getElementById("email").value.trim();
        const resultado = document.getElementById("resultado");

        if (!nome || !email) {
          resultado.innerText = "Preencha todos os campos!";
          resultado.style.color = "red";
          return;
        }

        resultado.innerText = `Obrigado, ${nome}! Seu email ${email} foi cadastrado.`;
        resultado.style.color = "#1e5200ff";
      }
    </script>
</body>
</html>
