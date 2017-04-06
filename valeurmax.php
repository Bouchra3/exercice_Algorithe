<?php

class MaxValeur{

    public $message;
    private $input;
    private $params;
    public $nbr;
    public $nbr1;
   
    //Vérifier est ce que c'est int avec ctype_digit et la valeur >0 avec intval
   public function getMessage(){
        return $this->message;
    }

    public function MaxValeurs(){
        if($_POST){
            var_dump($_POST);

	        $this->input = $_POST["Mike"];
	        $this->params = split(" ", $this->input);
            if($this->params[0] == "Mike"){

                

                //$message = (count($params) == 3) ? "la valeur max est ".max($params[1,2]) : "egale";

                if(count($this->params) == 3){
                    
                    $this->nbr  = (int)$this->params[1];
                    $this->nbr1 = (int)$this->params[2];
                    if($this->nbr == $this->nbr1){
                        echo "les nbr sont egaux";
                    }elseif($this->nbr > $this->nbr1){
                        echo "<p>".$this->nbr." est le max</p>";
                    }else{
                         echo "<p>".$this->nbr." est inférieur </p>";
                    }

                 // $this->message = max($params[1]);
                // return $message ;

                }else{
                    echo "Erreur on accepte qu'a 3 param";
                }
          }else{
              echo "<p>Le premier paramètre doit être Mike </p>";
          }

        }
    }
}

$max = new MaxValeur();
$max -> MaxValeurs();