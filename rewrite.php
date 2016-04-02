<?php 
rewriteUrl(); 
function cutString ($string, $separate){ 
    if(strlen(trim($string))==0){ 
        return false; 
    }  
    elseif(strpos($string, $separate)===false){ 
        return $string; 
    } 
    else{ 
        $separateLen     = strlen($separate); 
        $separatePos    = strpos($string, $separate); 
         
        if($separatePos === false || $separateLen ==0){ 
            $part[0] = $string; 
            $part[1] = ''; 
        } 
        else{ 
            $part[0] = substr($string, 0, $separatePos); 
            $part[1] = substr($string, $separatePos + $separateLen); 
        } 
        return $part; 
    }     
} 

function rewriteUrl(){ 
    $self = $_SERVER['PHP_SELF']; 
    $stringParams = substr($self,strpos($self,'.php')+5);     
    $arrayParams = explode('/', $stringParams); 
    foreach ($arrayParams as $param){ 
        $aItem = cutString($param, '-'); 
        $_GET[$aItem[0]] = $aItem[1]; 
    }     
} 
?>