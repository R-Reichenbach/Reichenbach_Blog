<?php
session_start();
?>

<div class="card">
 <div class="card-header">
<hl> Projeto Blog em PHP + MySQL IFSP - RAFAEL REICHENBACH</hl>

 </div>
<?php if(isset($_SESSION['login'])): ?>
 <div class="card-body text-right">

Olá <?php echo $_SESSION['login']['usuario']['nome']?>!
<a href="core/usuario_ repositorio.php?acac=logout"
class="btn btn-link btn-sm" role="button">Sair</a>
 </div>
<?php endif ?>
</div>