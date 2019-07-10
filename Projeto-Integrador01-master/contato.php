<?php
include_once('header.php')
?>

<style>
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  margin-right: 20px;
  align-content: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<div class="container">
  <div style="text-align:center">
    <h1>Fale Conosco</h1>
    <p>Críticas, sugestões, elogios e comentários:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="imagens/Ferr-logo.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Primeiro Nome</label>
        <input type="text" id="fname" name="firstname" placeholder="Nome">
        <label for="lname">Sobrenome</label>
        <input type="text" id="lname" name="lastname" placeholder="Sobrenome">
        <label for="country">País</label>
        <select id="country" name="country">
          <option value="brasil">Brasil</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="argentina">Argentina</option>

        </select>
        <label for="subject">Conteúdo</label>
        <textarea id="subject" name="subject" placeholder="Escreva aqui." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<?php 
include_once('footer.php')
?>