<?php

class ControladorCliente{
    
static public function ctrlGuardarCliente(){

        if(isset($_POST['txt_nombreM'])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST['txt_nombreM'])){

            echo'<script>
                swal.fire({
                    type: "success",
                    title: "Se Guardo Correctamente el Registro....",
                    showConfirmButton: true,
                    confirmButtontext: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                        window.location = "clientes";
                    }
                })
            </script>';
    
            }else{
                echo'<script>
                swal.fire({
                    type: "error",
                    title: "¡No se permite caracteres especiales o necesita capturar informacion!",
                    showConfirmButton: true,
                    confirmButtontext: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                        window.location = "clientes";
                    }
                })
            </script>';
            }

            
        }
    }
}

