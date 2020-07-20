@if(Session::has('message'))


 <div id="card-alert" class="card green">
                      <div class="card-content white-text">
                        <p>{{Session::get('message')}}</p>
                      </div>
                      <button id="cerrar" type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                       <span>x</span>
                      </button>
                    </div>



  <script src="/js/jquery-3.2.1.min.js"></script> 
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

   
   <script>
$(document).ready(function(){
  $("#cerrar").click(function(){
    $("#card-alert").remove();
  });
});
</script>
   
@endif