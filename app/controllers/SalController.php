<?php


namespace app\controllers;
use app\core\Controller;
use app\models\calculo;

Class SalController extends Controller {

    public function index(){
        //chamo o load para que ele carregue a view que está sendo requerida pelo Controller que é PAI deste arquivo 
        $this->load("func");
    }

    public function inss(){
        $objOperacao = new calculo();
        $a = $_POST["a"];
        $b = $_POST["b"];
        $dados["a"] = $a;
        $dados["b"] = $b;
        if ($a<=1100) {

            $dados["resultado"] = $objOperacao->inss1($a);
            $this->load("func",$dados);

        }if ($a>1100&&$a<=2203.48) {

            $dados["resultado"] = $objOperacao->inss2($a);
            $this->load("func",$dados);

        }if ($a>2203.48&&$a<=3305.22) {

            $dados["resultado"] = $objOperacao->inss3($a);
            $this->load("func",$dados);

        }if ($a>3305.22&&$a<=6433.57) {

            $dados["resultado"] = $objOperacao->inss4($a);
            $this->load("func",$dados);

        }
        
        
    }
    

    
}