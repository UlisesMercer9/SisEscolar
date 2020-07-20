<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/css/materialize.min.css">
  <link rel="stylesheet" href="/css/style.css">
 
</head>
<body>

<header>

    <!--BARRA DE NAVEGACION-->
    <div class="navbar-fixed">
      <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>

    <ul class="right hide-on-med-and-down">
      <li> <a href="#">¿Quienes Somos?</a></li>
      <li> <a href="#">Contacto</a></li>
 
    </ul>
    </div>
  </nav>
   </div>  
  </header>
  <!--FIN BARRA DE NAVEGACION-->



  <br><br><br>


<main>

    <div class="row container">

     @include('alerts.errors')

         <div class="col s12 l6 offset-l3 ">
              <div class="card medium z-depth-3">
                <div class="row">

                <br>
                <br>
                <br>
                <!--Formulario del autenticacion para los diferentes usuarios del sistema-->
                  
                   {!!Form::open(['route'=>'log.store','method'=>'POST','autocomplete'=>'off','class'=>'col s12 m10 l10 '])!!}
                    <div class="row">

                     <!--elemementos del formulario--> 

                       <!--Se manda una alerta en caso de que el email y password sean incorrectos-->
                    
                     

                     <div class="space2"></div>
                     <div class="input-field col s10 m12 l10 offset-l2 offset-s1 offset-m1">
                        <i class="material-icons prefix">account_circle</i>
                        {!!Form::email('email',null,['class'=>'validate','id'=>'email'])!!}
                        {!!Form::label('email','Correo electronico:', array('for' => 'icon_prefix'))!!}
                      </div>
                     
                     <div class="input-field">
                        <div class="space2"></div>
                      </div>

                      <div class="input-field col s10 m12 l10 offset-l2 offset-s1 offset-m1">
                        <i class="material-icons prefix">vpn_key</i>
                        {!!Form::password('password',['class'=>'validate','id'=>'contraseña'])!!}
                         {!!Form::label('contraseña','Contraseña')!!}
                      </div>

                      <!--Fin de elementos del formulario-->
                     

                      <!--Button de envio del formulario-->
                     <div class="card-action">
                      
                         {!!Form::button('<i class="material-icons right">send</i> &nbsp;&nbsp;&nbsp;&nbsp; Ingresar', array('class'=>'btn large waves-effect waves-light btn-small col s12 l8 offset-l2 ','type'=>'submit','id'=>'submit')) !!}
                         
                     </div>
                     <!--Fin del boton-->

                    </div>
                  {!!Form::close()!!}

                  <!--Fin del formulario-->
                </div>        
              </div>
            </div> 

    </div>
  </main> 

  <br>
  <br>
  <br>
  <br>

   <footer class="page-footer  ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"><br></h5>
                <p class="white-text-text text-lighten-4"><br></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text"></h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="white-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
	
  <script src="/js/jquery-3.2.1.min.js"></script> 
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="/js/materialize.min.js"></script>
   
   <script>
$(document).ready(function(){
  $(".close").click(function(){
    $(".card-alert").remove();
  });
});
</script>

</body>
</html>
