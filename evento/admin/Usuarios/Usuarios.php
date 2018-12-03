<?php include_once ("../../topo.php");
?>
<html>
<head><style>
form {
        background-image: url("nuevo.png");
}
label {
color: black;
font:bold 15px "Arial";

}
 </style>
</head>
<body>

<h2> Agregar Usuario</h2>
<form align="center" method="POST"   action="inserirok.php">
  <div class="form-group">
    <label >Nome</label>
    <input type="text" name="Nome" class="form-control"  placeholder="Nome">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="Email" class="form-control"  placeholder="Email">
  </div>
   <div class="form-group">
    <label>Senha</label>
    <input type="password"  name="Senha" class="form-control"  placeholder="Senha">
  </div>
  <div class="form-group">
    <label>Imagem</label>
    <input type="text"  name="Imagem" class="form-control" >
  </div>
  <input type="submit" class="btn btn-primary" name="Enviar">
</form>
</body>
</html>
<?php
include_once ("../../rodape.php");
?>