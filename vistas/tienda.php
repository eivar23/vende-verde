<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>

    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- estilos link  -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/main.js"></script>

</head>
<body>
    
<!-- header inicio -->

<header class="header">

       <a href="../index.php" class="logo"> <img class="logoV" src="../image/logo.png"> Vende verde </a>

    <nav class="navbar">
        <a href="../index.php">inicio</a>
        <a href="tienda.html">tienda</a>
        <a href="info.html">Quienes somos</a>
        <a href="contacto.html">contacto</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
        <?php 
           
            include_once '../php/user.php';
            include_once '../php/user_session.php';

            $userSession = new UserSession();
            $user = new User();

            SESSION_START();

            if(isset($_SESSION['user'])){
                //echo "Hay sesión";
                $user->setUser($userSession->get_current_user());
                
                echo $user->getNombre();
            }else{
                echo "<p>paila</p>";
            }
        
        ?>
      
    </div>

    <form action="" class="search-form">
        <input type="search" placeholder="Buscar..." id="search-box">
        <label for="search-box" class="fas fa-search" onclick="buscar()"></label>
    </form>

   <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="../image/prod-pitaya.jpg" alt="">
            <div class="content">
                <h3>Fresa</h3>
                <span class="quantity">50</span>
                <span class="multiply">3500</span>
                <span class="price">$175000</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="../image/prod-quinua.jpg" alt="">
            <div class="content">
                <h3>Quinua</h3>
                <span class="quantity">50</span>
                <span class="multiply">2550</span>
                <span class="price">$125000</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="../image/prod-avena.jpg" alt="">
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
        <p>Aún no estás registrado? <a href="registro.html">crear cuenta</a></p>
    </form>
</header>

<!-- fin del header -->

<div class="heading">
    <h1>Tienda</h1>
    <p> <a href="Index.html">Inicio >></a> Tienda </p>
</div>

<section class="category">

    <h1 class="title"> Nuestras <span>categorías</span></h1>

    <div class="box-container">

        <a class="box" onclick="categoria('fru')">
            <img src="../image/cat-1.png" alt="">
            <h3>Frutas frescas</h3>
        </a>

        <a class="box" onclick="categoria('veg')">
            <img src="../image/cat-2.png" alt="">
            <h3>vegetales</h3>
        </a>

        <a class="box" onclick="categoria('cer')">
            <img src="../image/cat-3.png" alt="">
            <h3>Cereales y Especias</h3>
        </a>

        <a  class="box" onclick="categoria('pro')">
            <img src="../image/cat-4.png" alt="">
            <h3>Procesados</h3>
        </a>


    </div>

</section>

<section class="products listaprod">

    <h1 class="title"> Nuestros <span>productos</span> <a  onclick="categoria('ali')">ver todos>></a> </h1>

    <div class="box-container">

        <div class="box cer ali cafe">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(1)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-cafe.jpg" alt="">
            </div>
            <div class="content">
                <h3>café tipo exportación</h3>
                <div class="price">$2800</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box fru ali fresa">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(2)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-fresa.jpg" alt="">
            </div>
            <div class="content">
                <h3>Fresa seleccionada</h3>
                <div class="price">$3500</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box fru ali mora">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(3)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-mora.jpg" alt="">
            </div>
            <div class="content">
                <h3>Mora</h3>
                <div class="price">$2000</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box cer ali trigo">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(4)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-trigo.jpg" alt="">
            </div>
            <div class="content">
                <h3>Trigo sin cáscara</h3>
                <div class="price">$1200</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box cer ali avena">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(5)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-avena.jpg" alt="">
            </div>
            <div class="content">
                <h3>Avena sin cáscara</h3>
                <div class="price">$3000</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box fru ali pitaya">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(6)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-pitaya.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pitaya</h3>
                <div class="price">$4500</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box cer ali quinua">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(7)"class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-quinua.jpg" alt="">
            </div>
            <div class="content">
                <h3>Quinua deshidratada</h3>
                <div class="price">$2500</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box veg ali zanahoria">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(8)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-zanahoria.jpg" alt="">
            </div>
            <div class="content">
                <h3>Zanahoria seleccionada</h3>
                <div class="price">$2000</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
        <div class="box veg ali lechuga">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(9)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-lechuga.jpg" alt="">
            </div>
            <div class="content">
                <h3>Lechuga Fresca</h3>
                <div class="price">$2500</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box pro ali queso">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a onclick="visor(10)" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../image/prod-queso.jpg" alt="">
            </div>
            <div class="content">
                <h3>Queso pera</h3>
                <div class="price">$10000</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
        
    </div>

   

</section>


<section class="visorpro">   


        <div class="blogs">

            <h1 class="title" id="titulopro"></h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img id="p_img" src="" alt="">
                    </div>                   
                </div>
                <div class="box">
                    <div class="content" align="left">
                        <p id="prod_descripcion"><strong>Descripción: </strong></p>
                        <p id="prod_precio"><strong>Precio kilo: </strong></p>
                        <label for="cantidad" style="font-size: 15px">Ingresa la cantidad en kg</label>
                        <input type="number" name="cantidad" min="50" style="  border: 1px solid #ccc;">
                        <br>
                        <a href="#" class="btn">Comprar</a>
                    </div>
                </div>
               
            </div>
            <p class="fas fa-long-arrow-alt-left" style="font-size: 18px; margin-top: 2em; color: #bac34e"><a href="" onclick="tienda()" style="color: black"> Regresar</a></p>
              
        </div>
        

    
</section>







<!-- inicio de footer  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Enlaces rápidos</h3>
            <a href="home.php"> <i class="fas fa-arrow-right"></i> Inicio</a>
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
            <img src="../image/payment.png" class="payment" alt="">
        </div>

    </div>
    <div class="box-container">
        <div class="box" align="center">
            <h3>Encuéntranos en</h3>
             <img src="../image/store.png" class="store" alt="" style=""> 
        </div>
       
             
    </div>

</section>

<section class="credit">Vende verde | todos los derechos reservados</section>

<!-- fin del footer -->













<!-- custom css file link  -->
<script src="../js/script.js"></script>

</body>
</html>