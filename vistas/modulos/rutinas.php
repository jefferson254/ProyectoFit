<link rel="stylesheet" type="text/css" href="vistas/dist/css/demo.css" />

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Instalaciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Rutinas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bienvenidos</h3>

        
        </div>
        <div class="card-body">
        </div>
         <!-- Default box -->
              <div class="card card-solid">
              <div class="row">
            <div class="col-12 col-sm-6">
            <h3 class="d-inline-block d-sm-none">Nuestras mejores Instalaciones las en cuentas en FIT</h3>
              <div class="col-12">
                <img src="vistas/dist/img/rutinas/1.jpg" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="vistas/dist/img/rutinas/2.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="vistas/dist/img/rutinas/3.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="vistas/dist/img/rutinas/4.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="vistas/dist/img/rutinas/5.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="vistas/dist/img/rutinas/6.jpg" alt="Product Image"></div>

            </div>
            </div>
            <div class="col-12 col-sm-6">
            <h1 class="Title Title--secondary">
                  LAS MEJORES RUTINAS PARA TI...
                </h1>
             
                <p style="text-align: left;">Descubre los 4 pilares más importantes para tener el cuerpo que deseas, perder grasa, ponerte en forma y mejorar tu salud, sin dietas, suplementos, ni cosas raras que solo te hacen perder el tiempo…</p>

              <hr>
              <div class="tabla">
                    <div class="product-image-thumb active" ><img src="vistas/dist/img/rutinas/tabla.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="vistas/dist/img/rutinas/tabla2.jpg" alt="Product Image"></div>
                

                <div class="product-image-thumb" ><img src="vistas/dist/img/rutinas/tabla3.jpg" alt="Product Image"></div>
                    </div>

            <!-- -------------------------------------------------- -->
              <div class="accordion">
                <ul>
                
                     <li>
                         
               <input type="checkbox" checked>
               <i class="nav-icon fas fa-dumbbell"></i>
               <h6>Lunes:Entrenamiento A</h6>
               <p>●Sentadillas 3×15 (4×6 si disponemos de soporte) o Zancadas con mancuerna 4×6</p>
               <p>●Press de Banca Plano con Mancuernas 4×6</p>
                <p>●Remo con Barra 4×6</p>
                <p>●Curl Biceps con Barra 4×6</p>
                <p>●Press Francés 4×6</p>
                <p>●Elevaciones laterales 4×8</p>
                <p>●Nota: es muy recomendable realizar el Curl de Biceps y Press Francés en superseries antagónicas (hacemos curl y seguido press francés y descansamos y repetimos hasta hacer las 4 series de cada uno)</p>    
           </li>
           
           <li>
               
               <input type="checkbox" checked>
               <i class="nav-icon fas fa-dumbbell"></i>
               <h6>Miercoles: Entrenamiento B</h6>
              <p>●Sentadillas 3×15 (4×6 si disponemos de soporte) o Zancadas con mancuerna 4×6</p>
              <p>●Elevaciones gemelos 3×15</p>
              <p>●Dominadas 4×6</p>
              <p>●Press militar con Mancuerna 1 Mano 3×8</p>
              <p>●Aperturas con Mancuerna 3×10</p>
              <p>●Remo al pecho con mancuerna 4×6</p>
           </li>
       </ul>
    </div>
    
   </div>
<!-- los link de los videos  -->
              <center>
 
              <div>
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/lhemJArFpHA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/_1H6WS2RzoU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 

<!-- el boton animado tipo neon -->
                        <a href="https://www.youtube.com/watch?v=ztEhlPjufNk" target="_blank" class="btn-neon"onclick="saludo()">
                            <span id="span1"></span>
                            <span id="span2"></span>
                            <span id="span3"></span>
                            <span id="span4"></span>
                           <h3> Seguir Viendo</h3>
                        </a>

                    </div>
                    </div>
              </center>
                    
                  </div>
                </div>
           
         
        

          <style>
              /* estilo de acordion  */

.accordion{
    display: inline-block;
    position: relative;
    transform: translate(-50%, 0);
    background-color:#212529;
    background-color:Orange;
    padding: 30px;
    left: 38%;
    width: 80%;
}
.tabla{
    float:right;
}

ul{
    list-style: none;
    padding: 0;
    margin: 0;
}


ul li i:before{
    transform: translate(-2px, 0) rotate(45deg);
}

ul li i:after{
    transform: translate(2px, 0) rotate(-45deg);
}

p,
ul li i:before,
ul li i:after{
    transition: all 0.25s ease-in-out;
}

ul li input[type=checkbox]{
    position: absolute; 
    cursor: grabbing;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0;
}

ul li input[type=checkbox]:checked ~ p{
    margin-top: 0;
    max-height: 0;
    opacity: 0;
    transform: translate(0, 50%);
}

ul li input[type=checkbox]:checked ~ i:before{
    transform: translate(2px, 0) rotate(45deg);
}

ul li input[type=checkbox]:checked ~ i:after{
    transform: translate(-2px, 0) rotate(-45deg);
}
</style>