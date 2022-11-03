<?php

class TemplateController {

    /* -------------------- VISTA PRINCIPAL DE LAS PLANTILLAS ------------------- */

    public function index(){

        include "views/template.php";

    }

    /* ------------------- RUTA PRINCIPAL O DOMINIO DEL SITIO ------------------- */

    static public function path(){

        if (!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])){

            return "https://".$_SERVER["SERVER_NAME"]."/";

        }else{
            
            return "http://".$_SERVER["SERVER_NAME"]."/";
        }

    }
}