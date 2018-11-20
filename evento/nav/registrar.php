<?php 
session_start();
include_once("../../class/Carregar.class.php");
if(!isset($_SESSION['Usuario'])){
	header ("Location:../loginuser/loginus.php");
}	
?>
<?php
   include_once("topo.php")
?>


<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background-image: url('../assets/img/bg/tickets.png');">
    <div class="container">
        <div class="section_title mb30">
<form  method="POST"   action="../admin/Usuarios/inserirok.php">
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
  <input type="submit" class="btn btn-rounded btn-primary" name="Enviar">
</form>
        </div>
    </div>

</section>
<!--get tickets section end-->

<!--footer start -->
<footer>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12">
                <div class="footer_box">
                    <div class="footer_header">
                        <div class="footer_logo">
                            <img src="../assets/img/logo.png" alt="evento">
                        </div>
                    </div>
                    <div class="footer_box_body">
                        <p>
Todos los derechos reservados por Braian Ramos.                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="#"><i class="ion-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            instagram
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <ul class="instagram_list">
                            <li>
                                <a href="#">
                                    <img src="../assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
No te pierdas nada!!                   </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <input type="email" class="form-control" placeholder="E-Mail here">
                            <button class="btn btn-rounded btn-block btn-primary">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Andres Carballo</a>
</p>
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Speakers</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
   include_once("rodape.php")
?>
</body>
</html>