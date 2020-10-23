<link rel="stylesheet" type="text/css" href="vistas/dist/css/demo.css" />


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil de FIT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Perfil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="vistas/dist/img/perfil.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">FIT</h3>

                <p class="text-muted text-center">WEB PAGE</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Facebook</b> <a class="float-right">fit</a>
                  </li>
                  <li class="list-group-item">
                    <b>Gmail</b> <a class="float-right">jefferwell2522@gmail.com</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="https://www.facebook.com/FIT-103073684930075/?view_public_for=103073684930075" target="_blank" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>


<!-- los botones de dar like ami pagina en facebook -->
<div id="fb-root"></div>
<center>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v8.0" nonce="NuQOrimg"></script>

<div class="fb-like" data-href="https://www.facebook.com/FIT-103073684930075" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
</center>
<!-- ------------------------------------------------------------------------ -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sobre Mí</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> WEB PAGE-FIT</strong>

                <p class="text-muted">
                Es un sitio web de fitness que proporciona un refugio contra el estrés y las tensiones de la vida ofreciendo tratamientos curados, clases y otras actividades para mejorar el bienestar.lle
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Ecuador, Quito</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Bootstrap,</span>
                  <span class="tag tag-info">Javascript,</span>
                  <span class="tag tag-warning">PHP,</span>
                  <span class="tag tag-primary">HTML-CSS</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>

                <p class="text-muted">El Mundo FIT es algo maravilloso.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#comentarios" data-toggle="tab">Comentarios</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Datos</a></li>
                </ul>
                
                <!-- ----------------------------------------------------------------------------------------------------------------------------- -->

<a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=+593 95 986 1167&amp;text=Hola!&nbsp;me&nbsp;puede&nbsp;ayudar&nbsp;con&nbsp;más&nbsp;información&nbsp;de&nbsp;la&nbsp;página&nbsp;web">
     <i class="fab fa-whatsapp"></i>
</a>
<a id="app-messenger" target="_blanck" href="https://www.facebook.com/messages/t/103073684930075">
    <i class="fab fa-facebook-messenger"></i>
</a>

<style>
  #app-messenger, #app-whatsapp{
	position: fixed;
	right: 24px;
	bottom: 25px;
	width: 60px;
	z-index: 100;
	display: none;
}
#app-whatsapp{
	bottom: 95px;
	display: block;
}
#app-messenger{
	bottom: 25px;
	display: block;
}
#app-messenger i, #app-whatsapp i{
	font-size: 63px;
}
#app-whatsapp i{
	color: #1ebea5;
}
#app-messenger i{
	color: #0084ff;	
}

</style>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="comentarios">
                  
<!-- esto es la parte del los comentarios con ayuda de disqus -->
<h4>Déjanos tu comentario </h4>

                  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://fit-5.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            

                
<!-- --------------------------------------------------------------------------------------------------------------------------- -->       
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="vistas/dist/img/perfil.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Programadores de FIT</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">FIT TEAM</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="vistas/dist/img/TEAM/FIT TEAM.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="vistas/dist/img/TEAM/Nicole Molina.jpg" alt="Photo">
                              <img class="img-fluid" src="vistas/dist/img/TEAM/JeffersonZambrano1.jpg" alt="Photo">

                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                            <img class="img-fluid" src="vistas/dist/img/TEAM/StefiSamaniego.jpg" alt="Photo">
                              <img class="img-fluid" src="vistas/dist/img/TEAM/Katherine Simba.jpg" alt="Photo">
                            </div>

                            
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    
                    <!-- /.post -->
                  </div>
                  <!-- ---------------------------------------------------------------------------------------------------------------------- -->

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">


                      <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="vistas/dist/img/perfil.jpg"
                       alt="User profile picture">
            
                              
                                <h5 class="panel-title">Fit Team</h5>
                            </div>
                            <div class="panel-body">
                                              <!-- <div align="center"> <a class="edit btn btn-primary" href="https://www.wiki4sport.com/gym/index.php?ife=gymMdUsr&amp;gymUsr=-IoY=sMM47"><i class="fa fa-fw fa-edit"></i> Modificar</a></div><br>
                                                        
                               
                                    <div align="center"> 
                                        	
                                            <a class="delete btn btn-danger" href="https://www.wiki4sport.com/gym/index.php?ife=gymVwUsr&amp;gymUsr=MX3nO7bb32#" onclick="elmUsr(&#39;s3WGua7765&#39;,&#39; &#39;)"><i class="fa fa-trash-o"></i> Eliminar</a>
                                           
                                    </div>
                                       -->
                                       <center>

                                <div class="col-sm-8">
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                
                                                    <th>Datos
                                                    <div class="text-center">
                                                  <img class="profile-user-img img-fluid img-circle"
                                                      src="vistas/dist/img/TEAM/logo/Jefferson Zambrano.jpg"
                                                      alt="User profile picture">
                                                </div>
                                                </th>
                                                    <th>Información</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                          		<tr>
                                                    <td class="text-primary">Jefferson Zambrano</td>
                                                    <td><b>Activo</b></td>
                                                </tr>
                                            	<tr>
                                                    <td class="text-primary">Peso</td>
                                                    <td>150kg</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Talla</td>
                                                    <td>170cm</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Sexo</td>
                                                    <td>Masculino</td>
                                                </tr>
                                                <thead>
                                                <tr>
                                                    <th>Datos
                                                    <div class="text-center">
                                                  <img class="profile-user-img img-fluid img-circle"
                                                      src="vistas/dist/img/TEAM/logo/StefiSamaniego.jpg"
                                                      alt="User profile picture">
                                                </div>
                                                    </th>
                                                    <th>Información</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                    <td class="text-primary">Stefi Samaniego</td>
                                                    <td><b>Activo</b></td>
                                                </tr>
                                            	<tr>
                                                    <td class="text-primary">Peso</td>
                                                    <td>62kg</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Talla</td>
                                                    <td>160cm</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Sexo</td>
                                                    <td>Femenino</td>
                                                </tr>
                                                <thead>
                                                <tr>
                                                    <th>Datos
                                                    <div class="text-center">
                                                  <img class="profile-user-img img-fluid img-circle"
                                                      src="vistas/dist/img/TEAM/logo/Nicole Molina.jpg"
                                                      alt="User profile picture">
                                                </div>
                                                    </th>
                                                    <th>Información</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                          		<tr>
                                                    <td class="text-primary">Nicole Molina</td>
                                                    <td><b>Activo</b></td>
                                                </tr>
                                            	<tr>
                                                    <td class="text-primary">Peso</td>
                                                    <td>60kg</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Talla</td>
                                                    <td>156cm</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Sexo</td>
                                                    <td>Femenino</td>
                                                </tr>
                                                <thead>
                                                <tr>
                                                    <th>Datos
                                                    
                                                    <div class="text-center">
                                                  <img class="profile-user-img img-fluid img-circle"
                                                      src="vistas/dist/img/TEAM/logo/Katherine Simba.jpg"
                                                      alt="User profile picture">
                                                </div>
                                                    </th>
                                                    <th>Información</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                          		<tr>
                                                    <td class="text-primary">Katherine Simba</td>
                                                    <td><b>Activo</b></td>
                                                </tr>
                                            	<tr>
                                                    <td class="text-primary">Peso</td>
                                                    <td>150kg</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Talla</td>
                                                    <td>170cm</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Sexo</td>
                                                    <td>Femenino</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                      </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                    </div>
                  </div>
                        </div>
                        </div>
                      </div>
                      </div>
                      