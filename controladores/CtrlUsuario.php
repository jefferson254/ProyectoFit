<?php

class ControladorUsuario{


	public function ctrlLoginUsuario(){

		if(isset($_POST['txt_usuario'])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["txt_usuario"]) &&
             preg_match('/^[a-zA-Z0-9]+$/', $_POST["txt_contra"])
		    ){

		    	$usuario = $_POST["txt_usuario"];
		    	$contra = $_POST["txt_contra"];

		    $result = ModeloUsuario::mdlBuscarUsuario($usuario, $contra);
		    
		    if(isset($result["Usuario"]) && $result["Usuario"] == $_POST
		    	['txt_usuario'] &&
		    	isset($result["Contrasena"]) && $result["Contrasena"] ==
		    	    $_POST['txt_contra']
		    	){
				//estado de session va hacer activa
				$_SESSION['login'] = 'activa';

				echo '<script>
						window.location= "inicio";
					</script> ';
		    }else{
				echo '<div class="alert alert-danger">Error en el 
				Acceso</div>';
		   		 }
		
	
			}	
		

		}
		

		}
	 }