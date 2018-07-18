<?php

class DebugClass {


    public function dump_var( $array, $tab="" ) {
        $presenter = "";
        
        if( is_object( $array ) ) {
            $array = (array) $array;
        }

        if ( null == current( $array ) ) {
            return;
        }

        foreach($array as $key => $value) {
            
            $key = $tab . $key;
            if ( is_array( $value ) || is_object( $value ) ) {
                
                $presenter = $presenter .  $key . "[<br>" . self::dump_var($value, $tab . "&nbsp;&nbsp;&nbsp;&nbsp;") .$tab . "]<br><br>";
            
            }

            else {
                
                $presenter =  $presenter . $key . " => " . $value . "<br>"; 

            }

        }

        return $presenter;

    }
    
}