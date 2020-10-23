
  <!-- Outer Row -->
  <div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
       <!-- Nested Row within Card Body -->
       <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src="vistas/dist/img/logo.jpg"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                   
      <img src="vistas/imgs/sis/logo.jpg" class="avatar" alt="Avatar Image">
  <!-- /.login-logo -->
  <div class="card">
  
    <div class="card-body login-card-body">
      <h1 class="login-box-msg">Iniciar Sesión</h1>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" name="txt_usuario" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="txt_contra">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
              Recuérdame
                       </label>
            </div>
            <p class="mb-6 m-2 left">
              <a href="registro" class="text-center">Registrate aqui</a>
            </p>
          </div>
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
          </div>
          <!-- /.col -->
        </div>
        <?php
        $obj_login = new ControladorUsuario();
        $obj_login -> ctrlLoginUsuario();
        ?>

      </form>
   <!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
    /.social-auth-links -->
 <!-- 
      <p class="mb-1">
        <a href="forgot-password.html">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Regístrate</a>
      </p>
    </div>
   /.login-card-body -->
  </div>
</div>