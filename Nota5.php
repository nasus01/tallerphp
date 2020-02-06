<?php 
require_once 'Promedio.php';

class Nota5 extends Promedio{
    
    public function __construct(){
        $parametros = func_get_args();
        $numero_parametros = func_num_args();
        $funcion_constructor='__construct'.$numero_parametros;
        
        if(method_exists($this,$funcion_constructor)){
            call_user_func_array(array($this,$funcion_constructor),$parametros);

        }

    }
    public function __construct2($nota1, $nota2,$nota3,$nota4,$nota5,$total){
        parent::__construct2($nota1, $nota2,$nota3,$nota4,$nota5,$total);
    }


    public function calcularNota5(){
        return($this->getNota5()*0.33);
           

    }
   
}


?>