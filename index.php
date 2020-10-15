<?php

require_once "controladores/CtrlPrincipal.php";
require_once "controladores/CtrlUsuario.php";
require_once "controladores/CtrlClientes.php";
require_once "controladores/CtrlNotificacion.php";



require_once "modelos/MdlUsuario.php";

$Obj_Principal = new Principal();
    $Obj_Principal -> CrtlPrincipal();

    