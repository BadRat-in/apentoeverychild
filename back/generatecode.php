<?php 
    function simple_hash($str, $size=5, $characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
        $hash_array = array();
        $hash = '';
        for($i=0;$i<$size;$i++){
            $hash_array[$i]=0;
        }
        for($s=0;$s<strlen($str);$s++){
            for($i=0;$i<$size;$i++){
                $hash_array[$i]=($hash_array[$i]+ord($str[$s])+$i+$s+$size)%strlen($characters);
            }
        }
        for($i=0;$i<$size;$i++){
            $hash .= $characters[$hash_array[$i]];
        }
        return $hash;
    }


?>
