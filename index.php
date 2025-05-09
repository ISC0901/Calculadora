<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>calculadora</title>
<!-- CSS Interno -->
<style>
/* Estilização geral do formulário */
form {
  width: 100%;
  max-width: 500px;
  margin: 0 auto; /* Centraliza o formulário na página */
  padding: 20px;
  background-color: #f9f9f9; /* Cor de fundo clara */
  border-radius: 10px; /* Bordas arredondadas */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
}

/* Estilo dos rótulos dos campos */
form label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
  color: #333;
}

/* Estilo comum para campos de input e textarea */
form input[type="text"],
form input[type="email"],
form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px; /* Espaçamento entre os campos */
  border: 1px solid #ccc; /* Borda padrão */
  border-radius: 5px;
  font-size: 16px;
  transition: border-color 0.3s ease; /* Animação suave ao focar */
}

/* Destaque no foco dos campos */
form input:focus,
form textarea:focus {
  border-color: #007BFF; /* Azul padrão ao focar */
  outline: none;
}

/* Estilo do botão de envio */
form button {
  padding: 12px 20px;
  background-color: #007BFF; /* Azul forte */
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

/* Efeito hover no botão */
form button:hover {
  background-color: #0056b3; /* Azul mais escuro ao passar o mouse */
}
</style>
</head>
<body>
             
<form action="receber.php" method="POST">
<h2>Calculadora</h2>   
<label for="nome">Digite o Primeiro Numero</label>   
<input type= "text" id="n1" name="numero1" required> <br><br><br>

<label for="email">Digite o Segundo Numero</label> <br><br<br>  
<input type= "text" id="n2" name="numero2" required> 

<label for="email">Escolha a Operação</label><br>
<select id="op" name="op" >
    <option value="+">SOMA</option>
    <option value="-">SUBTRAÇÃO</option>
    <option value="*">MULTIPLICAÇÃO</option>
    <option value="/">DIVISÃO</option>
</select> 
<button type="submit">calcular</button>
</form>

</body>
</html>