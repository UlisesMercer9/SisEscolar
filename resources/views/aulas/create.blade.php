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
    <nav class="banner teal">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">{{ auth()->user()->name }}</a></li>
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
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/profesors')!!}"> <i class="fa fa-user-secret black-text"></i> Profesores</a>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/aulas')!!}"> <i class="fa fa-graduation-cap black-text"></i> Aulas</a>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/periodos')!!}"> <i class="fa fa-repeat black-text"></i> Ciclos Escolares</a>
      </ul>
   </ul>

     
   

  <main class="main" id="main">

    <br><br>
  
   <div class="row">
       <nav class="col l2 offset-l1 teal">
          <div class="nav-wrapper">
            <div >
              <a href="{!!URL::to('/panel')!!}" class="breadcrumb"> <i class="fa fa-graduation-cap white-text"> </i>&nbsp;&nbsp; Inicio</a>
            </div>
          </div>
        </nav>
   </div>

   <div class="clearfix"></div>



   <br><br>

     <div class="row">
    <div class="col offset-l2 l8">
      <div class="card">
    {!!Form::open(['route'=>'aulas.store','method'=>'POST','id'=>'aulaCreateForm','name'=>'aulaCreateForm'])!!}
                    <div class="card-tittle">
          <span class="card-title"> &nbsp;&nbsp; Aula </span>

          <div class="divider"></div>
       
        <div class="card-content">
        
        <br>

        <div class="input-field col l12">
          <i class="material-icons prefix ">school</i>
          {!!Form::number('grado',null,['id'=>'grado', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('grado','Grado')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

        <div class="input-field col l12">
          <i class="material-icons prefix ">font_download</i>
          {!!Form::text('grupo',null,['id'=>'grupo', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
          {!!Form::label('grupo','Grupo')!!}
          <div class="errorTxt1 red-text"></div>
         </div>

        <div class="input-field col l12">
          <i class="material-icons prefix "> <i class="fa fa-university"></i></i>
          {!!Form::select('profesors_id',$profesores,null,['id' => 'profesors_id','placeholder'=>'Seleccione un docente'])!!} 
          <div class="errorTxt1 red-text"></div>
         </div>

         {!!Form::hidden('escuelas_id', Auth::user()->escuelas_id,['id'=>'textarea3', 'data-error'=>'.errorTxt1','class'=>'materialize-textarea validate'])!!}

        
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