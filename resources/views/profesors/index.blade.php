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
    <img src="img/empresa.png" alt="" class="circle responsive-img" height="100" width="100">  
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
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/profesores')!!}"> <i class="fa fa-user-secret black-text"></i> Profesores</a>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/aulas')!!}"> <i class="fa fa-graduation-cap black-text"></i> Aulas</a>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="{!!URL::to('/periodos')!!}"> <i class="fa fa-repeat black-text"></i> Ciclos Escolares</a>
              </div>
            </li>
      </ul>
   </ul>

       <div class="fixed-action-btn">
         <a class="btn-floating btn-large blue tooltipped"  data-position="left" data-tooltip="Agregar nueva escuela" href="{!!URL::to('/profesors/create')!!}">
           <i class="large material-icons">add</i>
         </a>
       </div>
   

  <main class="main" id="main">

    @include('alerts.success')

    <br><br>
  
   <div class="row">
       <nav class="col l2 offset-l1 teal">
          <div class="nav-wrapper">
            <div >
              <a href="#!" class="breadcrumb"> <i class="fa fa-university white-text"> </i>&nbsp;&nbsp; Inicio</a>
            </div>
          </div>
        </nav>

  <div class="clearfix"></div>

   <br>
   <br>
   <br>

   <div class="row">
       <table class="col l10 offset-l1 centered highlight responsive-table">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Cedula</th>
              
              <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          @foreach($profesores as $profesor)
          <tr>
            <td>{{ $profesor->nombre }} {{ $profesor->apellidos }}</td>
            <td>{{ $profesor->cedula }}</td>
            
            <td> 
              {!!link_to_route('profesors.edit', $title = '', $parameters = $profesor->id, $attributes = ['class'=>'amber-text fa fa-pencil fa-2x tooltipped', 'data-position'=>'left','data-delay'=>'50', 'data-tooltip'=>'Actualizar la información del maestro'])!!}

              <a href="{{ route('profesors.destroy', $profesor->id) }}" onclick="return confirm('¿Seguro que deseas eliminar la información del maestro?')" class="red-text fa fa-trash-o fa-2x tooltipped" data-position="left" data-delay="50" data-tooltip="Eliminar la información del maestro"></a>

            </td>
             
            
          </tr>
           @endforeach 
          
        </tbody>
      </table>
   </div>

   <div class="clearfix"></div>

   <br>
   <br>
   <br>
   </div>


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
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
  </script>
</body>
</html>