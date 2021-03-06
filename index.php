<?php
	
include_once 'php/user.php';
include_once 'php/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
	//echo "Hay sesión";
	$user->setUser($userSession->get_current_user());
	

	
	
}else if(isset($_POST['username']) && isset($_POST['password'])){
	//echo "validacion de login";

	$userForm = $_POST['username'];
	$passForm = $_POST['password'];

	if ($user->userExists($userForm, $passForm)) {
		//echo "usuario vaidado";
        
		$userSession->setCurrentUser($userForm);
		$user->setUser($userForm);

	
		
	}else{
		//echo "nombre de usuario o contraseña incorrecto";
		$errorLogin = "nombre de usuario y/o pass es incorrecto";
	

	}

}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- estilos -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

       <a href="index.html" class="logo"> <img class="logoV" src="image/logo.png"> Vende verde </a>

    <nav class="navbar">
        <a href="index.php">inicio</a>
        <a href="vistas/tienda.php">tienda</a>
        <a href="vistas/info.html">Quienes somos</a>
        <a href="vistas/contacto.html">contacto</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search" style="display: none"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
        <div id="login-in" class="fas">
        <?php echo $user->getNombre();
            if($user->getNombre() !== null){
                echo '  <select>
                <option disabled="disabled" selected="true"></option>
                <option>perfil</option>
                <option>cargar productos</option>
                <option>cerrar sesión</option>
                </select>';
            }
        
        ?>
             

            </div>
    </div>

    <form action="" class="search-form">
        <input type="search" placeholder="Buscar..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/prod-pitaya.jpg" alt="">
            <div class="content">
                <h3>Fresa</h3>
                <span class="quantity">50</span>
                <span class="multiply">3500</span>
                <span class="price">$175000</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/prod-quinua.jpg" alt="">
            <div class="content">
                <h3>Quinua</h3>
                <span class="quantity">50</span>
                <span class="multiply">2550</span>
                <span class="price">$125000</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/prod-avena.jpg" alt="">
            <div class="content">
                <h3>Avena</h3>
                <span class="quantity">50</span>
                <span class="multiply">2800</span>
                <span class="price">$140000</span>
            </div>
        </div>
        <h3 class="total"> total : <span>440000</span> </h3>
        <a href="#" class="btn">verificar carrito</a>
    </div>

    <form action="" class="login-form" method="post">
        <h3>Iniciar sesión</h3>
        <input type="text" placeholder="introducir correo" name="username" class="box" required>
        <input type="password" placeholder="introducir contraseña" name="password" class="box" required>
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">recuérdame</label>
        </div>
        <input type="submit" value="iniciar sesión" class="btn">
        <p>olvidé mi contraseña? <a href="#">clic Aquí</a></p>
        <p>Aún no estás registrado? <a href="vistas/registro.html">crear cuenta</a></p>
    </form>

</header>

<!-- fin del header -->

<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
                <span>frescas y seleccionadas</span>
                <h3>30% de descuento</h3>
                <a href="#" class="btn">comprar ahora</a>
            </div>
            <div class="image">
                <img src="image/fresas.png" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>Lavadas y seleccionadas</span>
                <h3>40% de descuento</h3>
                <a href="#" class="btn">comprar ahora</a>
            </div>
            <div class="image">
                <img src="image/papa.png" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>Frescos y orgánicos</span>
                <h3>20% de descuento</h3>
                <a href="#" class="btn">comprar ahora</a>
            </div>
            <div class="image">
                <img src="image/durazno.png" alt="">
            </div>
        </div>

    </div>

    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>

</section>

<section class="banner-container">

    <div class="banner">
        <img src="image/manzana.jpg" alt="">
        <div class="content">
            <span>Existencias limitada</span>
            <h3>-20%</h3>
            <a href="#" class="btn">comprar</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/arveja.jpg" alt="">
        <div class="content">
            <span>Existencias limitadas</span>
            <h3>-30%</h3>
            <a href="#" class="btn">comprar</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/ciruela.jpg" alt="">
        <div class="content">
            <span>Existencias limitada</span>
            <h3>-40%</h3>
            <a href="#" class="btn">comprar</a>
        </div>
    </div>

</section>





















<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Enlaces rápidos</h3>
            <a href="index.html"> <i class="fas fa-arrow-right"></i> Inicio</a>
            <a href="shop.html"> <i class="fas fa-arrow-right"></i> Tienda</a>
            <a href="about.html"> <i class="fas fa-arrow-right"></i> Quienes somos</a>
            <a href="contact.html"> <i class="fas fa-arrow-right"></i> contacto</a>
        </div>

        <div class="box">
            <h3>Enlaces Extra</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Carrito </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Favoritos </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> cuenta </a>
            
        </div>

        <div class="box">
            <h3>Síguenos</h3>
            <a href="https://www.facebook.com"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://www.twitter.com"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com"> <i class="fab fa-linkedin"></i> linkedin </a>
           
        </div>

        <div class="box">
            <h3>Recibir ofertas</h3>
            <form action="">
                <input type="email" placeholder="introduce tu correo">
                <input type="submit" value="suscríbete" class="btn">
            </form>
            <img src="image/payment.png" class="payment" alt="">
        </div>

    </div>
    <div class="box-container">
        <div class="box" align="center">
            <h3>Encuéntranos en</h3>
             <img src="image/store.png" class="store" alt="" style=""> 
        </div>
       
             
    </div>

</section>

<section class="credit">Vende verde | todos los derechos reservados</section>

<!-- footer section ends -->













<!-- custom css file link  -->
<script src="js/script.js"></script>

</body>
</html>