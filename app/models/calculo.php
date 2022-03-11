<?php   /*model - operacao.php */

namespace app\models;

/*
até 1.100,00	7,5%
de 1.100,01 até 2.203,48	9%
de 2.203,49 até 3.305,22	12 %
de 3.305,23 até 6.433,57	14% 
*/

class Calculo {

    public function inss1($a){

        $retirada =  $a*7.5/100;
        return $a - $retirada;
        
    }
    public function inss2($a){

        $retirada =  $a*9/100;
        return $a - $retirada;
        
    }
    public function inss3($a){

        $retirada =  $a*12/100;
        return $a - $retirada;
        
    }
    public function inss4($a){

        $retirada =  $a*14/100;
        return $a - $retirada;
        
    }

}
