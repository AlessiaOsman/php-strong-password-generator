<?php 


function generate_password ($value, $array){
        $psw = '';
        for($i= 0; $i < $value; $i++){
                $array_position = random_int(0,58);
                $psw.= $array[$array_position];
            } return $psw;
}

?>