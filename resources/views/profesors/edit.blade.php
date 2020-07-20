<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/css/materialize.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/select2.min.css">
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

  <header class="header" id="header">
    <div class="navbar-fixed">
    <nav class="banner">
      <div class="nav-wrapper teal">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
           <li><a href="#">{{ auth()->user()->name }}</a></li>
          <li><a href="{!!URL::to('/logout')!!}" class="blue-grey darken-4 white-text">
          Cerrar sesión 
        </a>
        </ul>
      </div>
    </nav>
  </div>
  </header>

  <ul id="slide-out" class="menu sidenav sidenav-fixed ">
    
    <br><br><br><br>
   
   <center>
    <img src="/img/user.png" alt="" class="circle responsive-img" height="100" width="100">  
   </center> 
       <div class="divider"></div>
          
        <div class="nav-wrapper">
          <div class="row" id="topbarsearch">
                <div class="input-field col s6 s12 black-text">
                  <i class="black-text material-icons prefix">search</i>
                  <input type="text" placeholder="search" id="autocomplete-input" class="autocomplete black-text" >
              </div>
          </div>
          
        </div>

      <div class="divider"></div>

     <ul class="collapsible collapsible-accordion">
             <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/profesors')!!}"> <i class="fa fa-user-secret black-text"></i> Profesores</a>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/aulas')!!}"> <i class="fa fa-graduation-cap black-text"></i> Aulas</a>
              <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/periodos')!!}"> <i class="fa fa-repeat black-text"></i> Ciclos Escolares</a>
              <div class="collapsible-body">
                
              </div>
            </li>
      </ul>
   </ul>

    
  <main class="main" id="main">

     <br><br>
  
   <div class="row">
       <nav class="col l2 offset-l1 teal">
          <div class="nav-wrapper ">
            <div >
              <a href="{!!URL::to('/panel')!!}" class="breadcrumb"> <i class="fa fa-user white-text"> </i>&nbsp;&nbsp; Inicio</a>
            </div>
          </div>
        </nav>
   </div>

   <div class="clearfix"></div>



   <br><br>

     <div class="row">
    <div class="col offset-l2 l8">
      <div class="card">
    {!!Form::model($profesor,['route'=>['profesors.update',$profesor->id],'method'=>'PUT','id'=>'escCreateForm','name'=>'escCreateForm'])!!}
                    <div class="card-tittle">
          <span class="card-title"> &nbsp;&nbsp;  Maestro </span>

          <div class="divider"></div>
       
        <div class="card-content">
           

        <div class="input-field col l12">
          <i class="material-icons prefix ">person</i>
          {!!Form::text('nombre',null,['id'=>'name', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('nombre','Nombre')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

        
        <div class="input-field col l12">
          <i class="material-icons prefix ">location_city</i>
          {!!Form::text('apellidos',null,['id'=>'apellidos', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('apellidos','Apellidos')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

         <div class="input-field col l12">
          <i class="material-icons prefix ">book</i>
          {!!Form::text('cedula',null,['id'=>'ceedula', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('cedula','Cedula')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

         <div class="input-field col l12">
          <i class="material-icons prefix ">my_location</i>
          {!!Form::text('direccion',null,['id'=>'direccion', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('direccion','Direccion')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

         <div class="input-field col l12">
          <i class="material-icons prefix ">phone</i>
          {!!Form::number('telefono',null,['id'=>'telefono', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('telefono','telefono')!!}
          <div class="errorTxt1 red-text"></div>
         </div>


         <div class="input-field col l12">
          <i class="material-icons prefix ">email</i>
          {!!Form::email('email',null,['class'=>'validate','id'=>'email'])!!}
          {!!Form::label('email','Correo electronico', array('for' => 'icon_prefix'))!!}
          <div class="errorTxt1 red-text"></div>
         </div>

         <div class="input-field col l12">
          <i class="material-icons prefix ">vpn_key</i>
          {!!Form::password('password',['class'=>'validate','id'=>'contraseña'])!!}
          {!!Form::label('contraseña','Contraseña')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

         {!!Form::hidden('escuelas_id', Auth::user()->escuelas_id,['id'=>'textarea3', 'data-error'=>'.errorTxt1','class'=>'materialize-textarea validate'])!!}

        <br>
        <br>
    
      
        <div class="clearfix"></div>

        </div>
        <div class="card-action">
          <center>
          {!!Form::button('<i class="material-icons right">send</i> Registrar', array('class'=>'waves-effect waves-light btn-small red','type'=>'submit','id'=>'submit')) !!}
          </center>
        </div>
      </div>
       {!!Form::close()!!}
    </div>
  </div>

   <div class="clearfix"></div>


   <br>
   <br>
   <br>
   <br>


    @include('alerts.success')
  
   


  </main>

   <footer class="page-footer teal" id="footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

  
  <script src="/js/jquery-3.2.1.min.js"></script> 
  <script src="/js/materialize.min.js"></script>
  <script src="/js/select2.full.min.js"></script>
  <script src="/js/select2.min.js"></script>
  <script>
      $("#escuelas_id").select2({});
      $("#escuela").select2({});
      $(document).ready(function(){
         $('.tooltipped').tooltip();
         $("#escuela").select2({});
         $('#alert_close').click(function(){
         $( "#alert_box" ).fadeOut( "slow", function() {
         });
         });
      });
  </script>
</body>
</html>