<nav class="navbar navbar-default navbar-custom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand navbar-brand-custom" href="#"><img src="http://baseconversion.com/wp-content/uploads/2013/06/facebook.png" width="100" height="50"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
      </ul>
      <form action="{url('profile/buscar')}" method="post" class="navbar-form navbar-left" role="search">
          <div class="form-group">
              <input type="hidden" value='[{$usuarios}]' id="dt2" name="id">
              <input name="nombre" data-lo-que-sea="hola" id="dt1" type="text"  data-provide="typeahead" class="form-control" placeholder="Buscar personas, lugares y cosas">
              
          </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:#FFFFFF" href="{url("profile/")}">{$nombre}</a></li>
        <li class="divpropio"></li>
        <li><a style="color:#FFFFFF" href="#">Inicio</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
        <li class="divpropio"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-chevron-down"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Crear página</a></li>
            <li><a href="#">Administrar páginas</a></li>
            <li><a href="#">Crear anuncios</a></li>
            <li class="divider"></li>
            <li><a href="#">Publicidad en Facebook</a></li>
            <li class="divider"></li>
            <li><a href="#">Registro de actividad</a></li>
            <li><a href="#">Preferencias de noticias</a></li>
            <li><a href="#">Configuración</a></li>
            <li class="divider"></li>
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">Reportar un problema</a></li>
            <li><a  href="{url('profile/logout')}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
          <script>
     $(document).ready(function($) {
     
        // Workaround for bug in mouse item selection
         $('#dt1').typeahead({
                
        
            source: function(query, process) {
                var data = $("#dt2").val();
                objects = [];
                map = {};

                data= eval ("(" + data + ")");

                $.each(data, function(i, object) {
                    map[object.name] = object;
                    objects.push(object.name);
                });
                process(objects);

             },
                updater: function(item) {
                       console.log(item);
                       console.log(map[item].id);
                       $('#dt2').val(map[item].id);
                       console.log($('#dt2').val());
                       return item;
                   }
            
        });
         
        
    })
</script>
      