<?php
function reverse_string($str)
{
 $n = strlen($str);
 if($n == 1)
   {
    return $str;
   }
 else
   {
   $n--;
   return reverse_string(substr($str,1, $n)) . substr($str, 0, 1);
   }
}
print_r(reverse_string('emocleW ot PHP')."\n");

?>