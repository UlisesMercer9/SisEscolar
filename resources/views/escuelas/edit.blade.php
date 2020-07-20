<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/css/materialize.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

  <header class="header" id="header">
    <div class="navbar-fixed">
    <nav class="banner">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">{{  Auth('admins')->user()->name}}</a></li>
          <li><a href="{!!URL::to('/logout')!!}" class="blue-grey darken-4 white-text">
          Cerrar sesión </li></a>
        </ul>
      </div>
    </nav>
  </div>
  </header>

  <ul id="slide-out" class="menu sidenav sidenav-fixed">
    
    <br><br><br><br>
   
   <center>
    <img src="/img/empresa.png" alt="" class="circle responsive-img" height="100" width="100">  
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
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/escuelas')!!}"> <i class="fa fa-university black-text"></i> Escueslas</a>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/users')!!}"> <i class="fa fa-user black-text"></i> Usuarios</a>
      </ul>
   </ul>

     
   

  <main class="main" id="main">

    <br><br>
  
   <div class="row">
       <nav class="col l2 offset-l1">
          <div class="nav-wrapper">
            <div >
              <a href="{!!URL::to('/panel')!!}" class="breadcrumb"> <i class="fa fa-building white-text"> </i>&nbsp;&nbsp; Inicio</a>
            </div>
          </div>
        </nav>
   </div>

   <div class="clearfix"></div>



   <br><br>

     <div class="row">
    <div class="col offset-l2 l8">
      <div class="card">
    {!!Form::model($Escuela,['route'=>['escuelas.update',$Escuela->id],'method'=>'PUT','id'=>'escCreateForm','name'=>'escCreateForm'])!!}                                                                                                                     
                    <div class="card-tittle">
          <span class="card-title"> &nbsp;&nbsp; Escuela </span>

          <div class="divider"></div>
       
        <div class="card-content">
        
        <br>

        <div class="input-field col l12">
          <i class="material-icons prefix ">location_city</i>
          {!!Form::text('nombre',null,['id'=>'nombre', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('nombre','Nombre')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

         <div class="input-field col l12">
          <i class="material-icons prefix ">book</i>
          {!!Form::text('clave',null,['id'=>'clave', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('clave','Clave')!!}
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
          {!!Form::email('correo',null,['id'=>'correo', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('correo','Email')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

         <div class="input-field col l12">
          <i class="material-icons prefix ">place</i>
          {!!Form::text('estado',null,['id'=>'estado', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('estado','Estado')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

         <div class="input-field col l12">
          <i class="material-icons prefix ">person_pin_cirlce</i>
          {!!Form::text('municipio',null,['id'=>'municipio', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('municipio','Municipio')!!}
          <div class="errorTxt1 red-text"></div>
         </div>


          <div class="input-field col l12">
          <i class="material-icons prefix ">streetview</i>
          {!!Form::text('localidad',null,['id'=>'localidad', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('localidad','Localidad')!!}
          <div class="errorTxt1 red-text"></div>
         </div>


         {!!Form::hidden('admins_id',Auth('admins')->user()->id,['id'=>'textarea3', 'data-error'=>'.errorTxt1','class'=>'materialize-textarea validate'])!!}
          
          
          
          

      
        <div class="clearfix"></div>

        </div>
        <div class="card-action">
          <center>
          {!!Form::button('<i class="material-icons right">send</i> Actualizar', array('class'=>'waves-effect waves-light btn-small red','type'=>'submit','id'=>'submit')) !!}
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

   <footer class="page-footer" id="footer">
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
  <script>
      $(document).ready(function(){
         $('.tooltipped').tooltip();
        $('select').formSelect();
         $('#alert_close').click(function(){
         $( "#alert_box" ).fadeOut( "slow", function() {
         });
         });
      });
  </script>
</body>
</html>