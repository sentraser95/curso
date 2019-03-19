
<!DOTYPE HTML>
<html>
<?php require_once '/var/www/html/curso/aprenderphp/include/helpers.php';    ?>

<aside id="sidebar">
<div id= "user_log" class="user_log">
<?php if(isset($_SESSION['user'])): ?>
<h3>Bienvenido , <?= $_SESSION['user']['nombre']. ' '. $_SESSION['user']['apellidos']; ?> </h3>
<a href="cerrar.php" class="b" >Cerrar session</a>
<a href="entradas.php" class="b" >entradas</a>
<a href="editar.php" class="b" >editar</a>
<?php endif; ?>

</div>
<div id= "login" class="block-aside">
<h3>Indentificate</h3>

<form action ="login.php" method="POST">
<label for="email1">Email</label>
<input type="email" name="email">
<div id= "error-log" class="error">
<?php if(isset($_SESSION['error_login'])): ?>
<h3> <?= $_SESSION['error_login'] ?> </h3>
<?php endif; ?>
</div>
<label for="pass">password</label>
<input type= "password" name="pass">
<?php echo showError($_SESSION['error'] , 'pass'); ?>
<input type="submit" value="Entrar"/>
</div>
</form>
<div id= "registar" class="block-registar">
<h3>registrar</h3>
<!-- MOSTRAR ERRORES -->

<?php if(isset($_SESSION['completado'])) : ?>
<div class="alerta alerta-exito">
<?=  $_SESSION['completado'] ?>
</div>
<?php elseif(isset($_SESSION['error']['general'])) : ?>
 <div class="alerta alerta-error">
<?= $_SESSION['error']['general'] ?>
 </div>
<?php  endif; ?>
<form action ="register.php" method="POST">
<label for="correo">Email</label>
<input type="email" name="email2"/>
<?php echo  showError($_SESSION['error'] , 'email2');  ?>
<label for="nombre">Nombre</label>
<input type="text" name="name"/>
<?php echo  showError($_SESSION['error'] , 'name');  ?>
<label for="lastname">Apellidos</label>
<input type="text" name="lastname"/>
<?php echo  showError($_SESSION['error'] , 'lastname');  ?>
<label for="pass2">password</label>
<input type= "password" name="pass2"/>
<?php echo  showError($_SESSION['error'] , 'pass2');  ?>
<input type="submit" name="sumbit" value="registrar"/>
</form>
<?php echo borrarErrores(); ?>
</aside>
</body>
</html>
