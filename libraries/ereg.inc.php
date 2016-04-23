<?php
if (!is_callable('ereg')) {
    function split ($pattern,$string) {return preg_split('~'.preg_quote($pattern,'~').'~',$string);}
    function spliti($pattern,$string) {return preg_split('~'.preg_quote($pattern,'~').'~i',$string);}
    function ereg_replace  (  $pattern ,  $replacement ,  $string ){return preg_replace('~'.preg_quote($pattern,'~').'~',$replacement,$string);}
    function eregi_replace (  $pattern ,  $replacement ,  $string ){return preg_replace('~'.preg_quote($pattern,'~').'~i',$replacement,$string);}
    function ereg (  $pattern ,  $string , array &$regs  ) {return preg_match('~'.preg_quote($pattern,'~').'~',$string,$regs);}
    function eregi (  $pattern ,  $string , array &$regs ) {return preg_match('~'.preg_quote($pattern,'~').'~i',$string,$regs);}
    function sql_regcase ( $string ){return  preg_replace_callback('~[[:alpha:]]{1}~',function($m){return '['.strtolower($m[0]).strtoupper($m[0]).']';},$string);}
}
