<?php
include_once('header.php');
?>

<main>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="imagens/ferr-logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login  -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!--  Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Esqueceu a senha?</a>
    </div>

  </div>
</div>
</main>

<?php
include_once('footer.php');
?>