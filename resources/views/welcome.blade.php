<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>keto</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/LOGOTOUR.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{route('departaments.index')}}">Inicio</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('tourists-destinations.index')}}">Lugares</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('comidas.index')}}">comidas</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('suscriptions.index')}}">Suscripción</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('comments.index')}}">Referencias</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/volcano-2259249.jpg" alt="First slide" style="width:1450px;height:700px;">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/kayaking-4354775.jpg" alt="Second slide" style="width:1450px;height:700px;">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/beach-2629003.jpg" alt="Third slide" style="width:1450px;height:700px;"">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="book_room">
                        <h2>"No viajamos para escapar de la vida, viajamos para que la vida no se nos escape"<h2>
                        <form class="book_now">
                           <div class="row">
                              <div class="col-md-12">
                               
                              </div>
                              <div class="col-md-12">
                               
                                 
                                
                              </div>
                              <div class="col-md-12">
                                
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Tour Gastronomic</h2>
                     <p>Tour Gastronomic te ofrece sitios turisticos de Estelí-Nicaragua para que puedas encontrar y disfrutar de los hermosos paisajes que forman parte de la cultura esteliana, incluyendo su rica gastronomía y su magnifica elaboración. </p>
                     
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/Don.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Para ti</h2>
                     <p>Explora, dejate sorprender y vive aventuras con emoción </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room placatapumba">
                     <div class="room_img">
                        <figure><img src="images/Museo.jpg" alt="#"/></figure> 
                     </div>
                     <div class="bed_room">
                        <h3>Museo de historia y arqueología</h3>
                        <p>Este pequeño y sencillo museo exhibe una variada colección de piezas antiguas. En él se pueden observar desde billetes nacionales y extranjeros , hasta piezas arqueológicas encontradas en barrios de Estelí. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room placatapumba">
                     <div class="room_img">
                        <figure><img src="images/Salto.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>La estanzuela</h3>
                        <p>El lugar más emblemático de la reserva en estelí, es la famosa Cascada de La Estanzuela, donde puedes encontrar y disfrutar de unas vistas preciosas y realizar actividades como rappel, escalada o tomarse un refrescante baño en sus aguas. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room placatapumba">
                     <div class="room_img">
                        <figure><img src="images/jala.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Mirador "El Jalacate"</h3>
                        <p>Está ubicada a 13 kmS. al suroeste de Estelí, abarca un área de 21,600 hectáreas y se comparte con el municipio de San Nicolás, Estelí y El Sauce. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room placatapumba">
                     <div class="room_img">
                        <figure><img src="images/Finca.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Finca Neblina del bosque-Miraflor</h3>
                        <p>La Finca del Bosque es un establecimiento de turismo ecológico, se encuentra en la reserva natural Miraflor, en El Rodeo, y ofrece restaurante. Puede practicar actividades como senderismo y visitas a cascadas y a las plantaciones de café.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room placatapumba">
                     <div class="room_img">
                        <figure><img src="images/family.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Parque de la familia-Estelí</h3>
                        <p> Espacio turístico, destinado a la orientación alternativa recreacional, para los segmentos poblacionales: Niñez, Adolescencia y Adulto Mayor. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room placatapumba">
                     <div class="room_img">
                        <figure><img src="images/robles.jpeg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Entre robles</h3>
                        <p>Desde este sitio se tiene una vista panorámica de 360 grados donde se podrá observar Pueblo Nuevo Estelí, San José de Cusmapa y Somoto. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->
      <!-- gallery -->
      <div  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Gastronomía</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6 ">
                  <div class="gallery_img">
                     <figure><img src="images/nacatamales.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/guirilla.jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/tamales.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Galllo.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/sopita.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/vieja.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/rest.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/plato dulce.avif" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
      <!-- blog -->
      <div  class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Hoteles</h2
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="blog_box sisi">
                     <div class="blog_img">
                        <figure><img src="images/multihex.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Hotel Hex</h3>
                        <span>Estelí </span>
                        <p>$100 </p>
                        <p>Hotel Hex es una excelente opción para tu estadía en Estelí.</p>
                        <button>Ver más</button>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box sisi">
                     <div class="blog_img">
                        <figure><img src="images/Acuario.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Hotel Acuarious de Luis</h3>
                        <span>Estelí </span>
                        <p>$100</p>
                        <p>El Apart Hotel Acuarious de Luis se encuentra en Estelí y ofrece jardín, salón compartido, restaurante y bar. Ofrece habitaciones familiares y solárium. </p>
                        <button>Ver más</button>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box sisi">
                     <div class="blog_img">
                        <figure><img src="images/Arcos.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Hotel Los Arcos</h3>
                        <span>Estelí </span>
                        <p>$100</p>
                        <p>Hotel los Arcos es un rincón del Diamante de las Segovias donde poder descansar tras un día de trabajo, pasar un tiempo de relax o celebrar por todo lo alto uno de los días más especiales de tu vida.  </p>
                        <button>Ver más</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end blog -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Byteweb.net</h2>
                  </div>
               </div>
            <

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contactanos</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Estelí-Nicaragua</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +505 87654309</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> Byteweb.net@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="about.html">Lugares</a></li>
                        <li><a href="room.html">Comidas</a></li>
                        <li><a href="gallery.html">Suscripción</a></li>
                        <li><a href="blog.html">Referencias</a></li>
                        <li><a href="contact.html">Inicio de sesión</a></li>
                        <li><a href="contact.html">Registro</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <>
                        © 2023 Inatec Byteweb.net <a href="http://127.0.0.1:8000/#"> Tour Gastronomic</a>
                        <br><br>
                     
               

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>