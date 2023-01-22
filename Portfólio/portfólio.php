<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nicolas Baraldo de Lima</title>
    <script src="jquery-2.1.4.min.js"></script>
    <script src="js\javascript.js"></script>
    <link rel="stylesheet" href="css\style.css" class="rel style-sheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src='https://code.jquery.com/jquery-2.2.0.min.js'>
    </script>
    <script src=
'https://cdn.rawgit.com/admsev/jquery-play-sound/master/jquery.playSound.js'>
    </script>

    <script src="https://kit.fontawesome.com/f0e17cbf2f.js" crossorigin="anonymous"></script>
    <style>
        p {
            font-family: Lato, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }


        #preloader {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#59D7DC; /* cor do background que vai ocupar o body */
    z-index:999; /* z-index para jogar para frente e sobrepor tudo */
}
#preloader .inner {
    position: absolute;
    top: 50%; /* centralizar a parte interna do preload (onde fica a animação)*/
    left: 50%;
    transform: translate(-50%, -50%);  
}
.bolas > div {
  display: inline-block;
  background-color: #fff;
  width: 25px;
  height: 25px;
  border-radius: 100%;
  margin: 3px;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: animarBola;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
   
}
.bolas > div:nth-child(1) {
    animation-duration:0.75s ;
    animation-delay: 0;
}
.bolas > div:nth-child(2) {
    animation-duration: 0.75s ;
    animation-delay: 0.12s;
}
.bolas > div:nth-child(3) {
    animation-duration: 0.75s  ;
    animation-delay: 0.24s;
}
 
@keyframes animarBola {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  16% {
    -webkit-transform: scale(0.1);
    transform: scale(0.1);
    opacity: 0.7;
  }
  33% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1; 
  } 
}
/* end: Preloader */
        .foto-perfil {
            height: 200%;
            max-width: auto;
        
            border-radius: 90%;
        }

        .icones {
            padding-left: 5px;
        }

        
        .titulosBrancos {
            text-decoration: underline;
            text-underline-position: under;
            padding-bottom: 20px;
            text-transform: uppercase;
            font-weight: 700;
            color: white;
            animation: animate 
                1.5s linear infinite;
        }
  
        @keyframes animate {
            0% {
                opacity: 0;
            }
  
            50% {
                opacity: 0.7;
            }
  
            100% {
                opacity: 0;
            }
        }

        

        .titulosVerdes {
            text-decoration: underline;
            text-underline-position: under;
            padding-bottom: 20px;
            text-transform: uppercase;
            font-weight: 700;
            color: #18bc9c;
            animation: animate 
                1.5s linear infinite;
        }
  
        @keyframes animate {
            0% {
                opacity: 0;
            }
  
            50% {
                opacity: 0.7;
            }
  
            100% {
                opacity: 0;
            }
        }

        .paragrafoBrancos {
            color: white !important;
        }


        .jumbotron {
            margin-bottom: 0px;
        }

        html {
            scroll-behavior: smooth;
        }

        p {
            color: black !important;
           
        }

        .welcome {
  color:pink;
          position: absolute;
            left: 70px;
            top: 15px;
            font-size: 90%;
            cursor:e-resize;
            
        }

        .corPrimaria {
            background-color:cornflowerblue;
            animation: changeBackgroundColor 7s infinite; 

            
        }

        .bg-light {
    background-color:#6959CD;
}

.fullscreen-menu {
   position: absolute;
   top: 1.1%;
   right: 99.5%;
   z-index: 10;
}
.fullscreen-menu .checkbox-toggle {
  
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  cursor: pointer;
  width: 50px;
  height: 40px;
  opacity: 0;
}
.fullscreen-menu .checkbox-toggle:checked + .hamburger > span {
  transform: rotate(135deg);
}
.fullscreen-menu .checkbox-toggle:checked + .hamburger > span:before,
.fullscreen-menu .checkbox-toggle:checked + .hamburger > span:after {
  top: 0;
  transform: rotate(90deg);
}
.fullscreen-menu .checkbox-toggle:checked + .hamburger > span:after {
  opacity: 0;
}
.fullscreen-menu .checkbox-toggle:checked ~ .menu {
  pointer-events: auto;
  visibility: visible;
}
.fullscreen-menu .checkbox-toggle:checked ~ .menu > div {
  transform: scale(1);
  transition-duration: 0.75s;
}
.fullscreen-menu .checkbox-toggle:checked ~ .menu > div > div {
  opacity: 1;
  transition: opacity 0.4s ease 0.4s;
}
.fullscreen-menu .checkbox-toggle:hover + .hamburger {
  box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
}
.fullscreen-menu .checkbox-toggle:checked:hover + .hamburger > span {
  transform: rotate(225deg);
}
.fullscreen-menu .hamburger {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 50px;
  height: 40px;
  padding: 0.5em 0.6em;
  border-radius:50px;
  background-color:#59d7dc;
  cursor: pointer;
  transition: box-shadow 0.4s ease;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.fullscreen-menu .hamburger > span {
  position: relative;
  flex: none;
  width: 100%;
  height: 2px;
background: #FEFEFE;
  transition: all 0.9s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}
.fullscreen-menu .hamburger > span:before,
.fullscreen-menu .hamburger > span:after {
  content: '';
  position: absolute;
  z-index: 1;
  top: -6px;
  left: 0;
  width: 100%;
  height: 2px;
  background: inherit;
  transition: all 0.4s ease;
}
.fullscreen-menu .hamburger > span:after {
  top: 6px;
}
.fullscreen-menu .menu {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  visibility: hidden;
  overflow: hidden;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  outline: 1px solid transparent;
  display: flex;
  align-items: center;
  justify-content: center;
}
.fullscreen-menu .menu > div {
  
  width: 200vw;
  height: 200vw;
  color:#6959CD;
  background:#59D7DC;
  border-radius: 50%;
  transition: all 0.4s ease;
  flex: none;
  transform: scale(0);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.fullscreen-menu .menu > div > div {
  
  text-align: center;
  max-width: 90vw;
  max-height: 100vh;
  opacity: 0;
  transition: opacity 0.4s ease;
  overflow-y: auto;
  flex: none;
  display: flex;
  align-items: center;
  justify-content: center;
}
.fullscreen-menu .menu > div > div > ul {
  
  list-style: none;
  padding: 0 1em;
  margin: 0;
  display: block;
  max-height: 100vh;
}
.fullscreen-menu .menu > div > div > ul > li {
  padding: 0;
  margin: 1em;
  font-size: 24px;
  display: block;
}
.fullscreen-menu .menu > div > div > ul > li > a {
  color:#6959CD;
  font-size:35px;
  text-decoration:none;
  position: relative;
  display: inline;
  cursor: pointer;
  transition: color 0.4s ease;
}
.fullscreen-menu .menu > div > div > ul > li > a:hover {
  color: #ffffff;
}
.fullscreen-menu .menu > div > div > ul > li > a:hover:after {
  width: 100%;
}
.fullscreen-menu .menu > div > div > ul > li > a:after {
  content: '';
  position: absolute;
  z-index: 1;
  bottom: -0.2em;
  left: 0;
  width: 0;
  height: 2px;
  background: #ffffff;
  transition: width 0.4s ease;

}


.header-paralaxx {

    position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  visibility: hidden;
  overflow: hidden;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  outline: 1px solid transparent;
  display: flex;
  align-items: center;
  justify-content: center;
}
#popup {
position: absolute;
top: 30%;
left: 23%;
width: 300px;
height: 90px;
padding: 20px 20px 20px 20px;
border-width: 2px;
border-style: solid;
background:cadetblue;
display: none;

border-radius: 20px;
animation: float 2s ease-in-out infinite;
				

}

@keyframes float{
	0%,100%{
		transform:translatey(0)
	}
	50%{
		transform:translatey(-30px)
	}
}

        .itemMenu {
            color: white;
        }


        .btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    position: absolute;
    
    
}


       .container{ width: 100%; }
.popup{position:absolute; width: 30%; height: 200px; background: #CCC; border-radius:30px; padding: 10px; display:none;}
.login{float:left;  background: #333; color: #FFF; font-weight:bold; border-radius: 5px; text-align:center; padding: 20px; cursor:pointer;}

    </style>
</head>

<body>

    

  <!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <div class="bolas">
          <img src="https://media.giphy.com/media/nuhNm8FaCirvGwKimr/giphy.gif" alt="" class="src">                  
       </div>
    </div>
</div>
<!-- fim do preloader --> 




    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $(function(){
        //código para exibir os modais
    });
    </script>

    <div class="header-paralax"></div>
    <nav class="navbar navbar-expand-md navbar-light" position="fixed" style="background-color:#59D7DC;">
      
      
      <div class="title_loop"> 
        <div class="title">MYﾠ<span>PORTFOLIO</span></div> 
    </div>
      <p><br></p>

        
        
        
            
        </button>

    
        
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
              <div class="container" >
                <div class="stars" ></div>
            </div>
    
            <div class="container2" >
                <div class="stars2"></div>
            </div>
            <div class="container3" >
                <div class="stars3"></div>
            </div>
            
            </ul>

           
            </nav>
            
                
              
    
</div>
<ul class="navbar-nav"> 
              
  <ul class="menu">
    
   
        <li><a href="#" class="li-princi">CONTEÚDO</a>
             <ul>
                    <li><a href="#projetos">PROJETOS</a></li>
                    <li><a href="#sobre-mim">EUZÍNHÔ</a></li>
                  </ul>
      </li>
    
</ul>




    <div class="fullscreen-menu">
         
        <input class="checkbox-toggle" type="checkbox" />
        <div class="hamburger">
         
          <span></span>
          
        </div>
    <nav class="menu">
      
        
        <div>
          <div>

            
            <ul>
              
             
              <li><a href="#">Meu currículo</a></li>
              <li><a href="#">Quiz Pessoal</a></li>
              <li><a href="#">Códigos Css</a></li>
              <li><a href="#">Templates Html e Css</a></li>
            </ul>
          </div>
        </div>
    
      </nav><!--menu-->
    
    </div>

    
    
    
    
    
    <section class="jumbotron text-center corPrimaria">
        <div class="container">
            <img src="img\Bom dia!.gif" class="foto-perfil" alt="Responsive image" width="35%">
            <h1 class="jumbotron-heading" style="color:white;text-transform: uppercase;">NICOLAS LIMA</h1>
            ﾠﾠﾠﾠ<a class="navbar-brand" href="#" style=color:white><h6>PROGRAMADOR JÚNIOR E ESTUDANTE DE TECNOLOGIAﾠﾠﾠ</h6></a>
            </p>
            <p>
                <a href="#contato" class="btn btn-dark my-2"></a>Contato</a>
            </p>
            <a href="#"><i style="color:white" class="fab fa-github"></i></a>
            <a href="#"><i style="color:white" class="fab fa-linkedin"></i></a>
            <a href="#"><i style="color:white" class="fab fa-instagram"></i></a>
        </div>
    </section>

    
    <!-- Projects -->

    
    <div class="album py-5 bg-light " id="projetos">
        

           
            <h2 class="text-center jumbotron-heading titulosVerdes">Projetos</h2>

        
            
            <div class="album py-5 bg-light " id="projetos">
              <div class="row">
                <div class="card green">
                  <h2>MERCAD PREÇO BOM LTDA</h2>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <html>
                    <head>
                      <title></title>
                    </head>
                    <body>
                      <span class="more">
                        Web-Site que cataloga querys e dados específicos sobre clientes e funcionários através do banco relacional MySQL, podendo modificar em tempo real as especificidades de cada pessoa física presentes visualmente nas tabelas de pesquisa dentro do próprio site.
                      </span>
                 
                  <img class="image" src="money.png" alt="money" />
                </div>
           
                <div class="card green">
                  <h2>QUIZ PESSOAL SOBRE MIM</h2>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <html>
                    <head>
                      <title></title>
                    </head>
                    <body>
                      <span class="more">
                        Manipulando estruturas condicionais, funções aritméticas, arrays  e valores booleneanos do JavaScripit, com um design customizado em CSS-3 e marcação HTML padrão.
                        A ideia era de criar um joguinho simples de Quiz, acerca de perguntas correlacionadas a minha vida.
                      </span>
                  
                  <img class="image" src="money.png" alt="money" />
                </div>
           
                <div class="card green">
                  <h2>APPLINA - SITE DE APLICATIVOS</h2>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <html>
                    <head>
                      <title></title>
                    </head>
                    <body>
                      <span class="more">
                        Site que simula uma startup de divulgação e produção de aplicativos, cujo objetivo de quem está por trás do código-fonte (neste caso, eu) é de manipular e abusar das pseudoclasses da folha de estilo, com uma pitadinha de PHP para inserir o RECAPTCHA através de uma API externa do Google reCAPTCHA.
                      </span>
                  <img class="image" src="money.png" alt="money" />
                </div>

                <div class="card green">
                  <h2>Monetização</h2>
                  <p>Configure a monetização</p>
                  <img class="image" src="money.png" alt="money" />
                </div>
                <div class="card green">
                  <h2>Monetização</h2>
                  <p>Configure a monetização</p>
                  <img class="image" src="money.png" alt="money" />
                </div>
                <div class="card green">
                  <h2>Monetização</h2>
                  <p>Configure a monetização</p>
                  <img class="image" src="money.png" alt="money" />
                </div>
                
            </div>
        
            
            
            <?php foreach ($feed['posts'] as $data) { ?>      
                <div class="feed-item-body mt-10 m-width-20 post-body">
                     <?php if (mb_strlen($data->post['body'], 'UTF-8') > 1000): ?>
                         <span class="short-text">
                             <?php echo nl2br(mb_substr($data->post['body'], 0, 1000, 'UTF-8')); ?> 
                             ... 
                            <a class="read-more">leia mais</a>
                         </span>
                         <span class="full-text" style="display: none"><?php echo nl2br($data->post['body']) ?> <a class="read-less">ler menos</a></span>
          
                     <?php else: ?>
                         <span class="full-text"><?php echo nl2br($data->post['body']) ?></span>
                     <?php endif ?>
                </div>  
                      
          <?php } ?>
            
        
    </div>

    

    

    
     
       

    <section class="jumbotron text-center corPrimaria" id="sobre-mim">
        <div class="container">
            <h2 class="jumbotron-heading titulosBrancos">UM POUCO SOBRE MIM</h2>
            <p class="lead paragrafoBrancos">Olá meu nome é John e estou no mercado de games a mais de 4 anos, tendo
                desenvolvido projetos com empresas como Sony, Unreal Engine, Cry Engine entre diversas outras. Sou
                apaixado por games games e desenvolvimento, e gosto de compartilhar meu conhecimento sempre que possível
                com meus colegas de trabalho</p>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <html>
                  <head>
                    <title></title>
                  </head>
                  <body>
                    <span class="more">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </span>
                   
                    <br><br>
                    <div class="more">
                      Morbi placerat imperdiet risus quis blandit. Ut lobortis elit luctus, feugiat erat vitae, interdum diam. Nam sit amet arcu vitae justo lacinia ultricies nec eget tellus. Curabitur id sapien massa. In hac <a href="#">habitasse</a> platea dictumst. Integer tristique leo consectetur libero pretium pretium. Nunc sed mauris magna. Praesent varius purus id turpis iaculis iaculis. Nulla <em>convallis magna nunc</em>, id rhoncus massa ornare in. Donec et feugiat sem, ac rhoncus mauris. Quisque eget tempor massa.
                    </div>
                  </body>
                 
                </html>      

                <a href="#openModal"><div class="imagem-modal"><img src="img\pngwing.com.png" alt="" class="src" width="12%"></div></a>
                <span data-tooltip="Apresentação visual">Venha ver o vídeo!</span>
                

     <div id="openModal" class="modalDialog">
      
      
       <div>
      
        
         <a href="#close" title="Close" class="close">X</a>
         
        
         <video width="260" 
         height="210" 
         controls poster=
"img\Rosa Minimalista Personal Trainer Logo (1).png">
      <source src=
"img\Apresentação Portfólio de Trabalho Rosa e Vermelho.mp4"
              type="video/mp4">
  </video>
  <img src="img\mão.png" alt="" class="mao-modal" width="15%">
       </div>
       
     </div>
        
    </section>

    

    

   

   

    

    

                        
               
    


    
      
    

    <footer class="text-center" style="background-color:#59D7DC;padding:0px; margin:0px; width:100%;position: absolute;">
      
      <p style="margin:0px;padding-top:15px;padding-bottom:15px;color:#59D7DC !important;font-size:210%;">III</a>
      <p style="margin:0px;padding-top:15px;padding-bottom:15px;color:#FFF !important;font-size:200%;"> MEU PERFIL NO <a href="https://github.com/NicolasBaraldodeLima" target="_blank">GITHUB</a>
        
      </p>
       
            <img src="img\img-footer.gif" width="190px" alt="" class="src">
        
            <div id="rodape">
          <p id="telefone-email">
            https://github.com/NicolasBaraldodeLima
              <br>
              <span class="ddd">51</span> 984304749
          </p>
      
          <p id="endereco">
              Rua Joana Ribeiro Rodrigues, 328, Jardim das Palmerias
              <br>
              CEP 91910-971
 
              <br>
              Porto Alegre - RS
          </p>
      
          <small id="copyright">
              &copy; Nicolas Baraldo de Lima. Todos os Direitos Reservados.
          </small>
      </div>
        
        <div class="navigation">
          
          <ul>
            <li class="list">
              <a href="https://www.facebook.com/nicolas.baraldo.7" target="_blank">
                <img src="img\facebook.png" alt="" class="redes" width="62px">
                <span class="title">FACEBOOK</span>
              </a>
            </li>
            <li class="list">
              <a href="https://www.instagram.com/nicolas.baraldo/" target="_blank">
                <img src="img\instagram.png" alt="" class="redes" width="53px">
                <span class="title">INSTAGRAM</span>
              </a>
            </li>
            <li class="list">
              <a href="https://www.linkedin.com/feed/?trk=onboarding-landing" target="_blank">
                <img src="img\linkedin-logo-png-1826.png" alt="" class="redes" width="62px">
                </span>
                <span class="title">LINKEDIN</span>
              </a>
            </li>
            
          </ul>   
          
        </div>

        
       <p style="margin:0px;padding-top:15px;padding-bottom:15px;color:#59D7DC !important;font-size:220%;"> IIIII
        
    </p>
    
        
    </footer>
    
    
    <script language="javascript" type="">function fechar(){
      document.getElementById('popup').style.display = 'none';
      }
      function abrir(){
      document.getElementById('popup').style.display = 'block';
      setTimeout ("fechar()", 3000);
      $(window).on('load', function () {
  $('#preloader .inner').fadeOut();
  $('#preloader').delay(350).fadeOut('slow'); 
  $('body').delay(350).css({'overflow': 'visible'});
})
      }
      
      
      
      
      </script>
      <body onload="abrir();">


          
      <div id="popup">
          Muito obrigado por estar vendo o meu portfólio!
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            
    
            
        
            


</body>




</html>