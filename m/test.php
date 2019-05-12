<?php 
$stage = intval(file_get_contents('tb.txt'));


$date=strval(date("d"));
//echo $stage;


$string = file_get_contents("./tasks/".$date.".json");
$jsn = json_decode($string, true);

$do="";
switch ($stage){
        
    case 1 : {$do="st"; break;}
    case 2 : {$do="st"; break;}
    case 3 : {$do="relax"; break;}
    case 4 : {$do="nd"; break;}
    case 5 : {$do="nd"; break;}    
    case 6 : {$do="relax"; break;}    
    case 7 : {$do="td"; break;}    
    case 8 : {$do="td"; break;}
    case 9 : {$do="relax"; break;}    
    default:  {
        $do="relax"; break;
    }

}

//echo $jsn[$do]["tasks"];

$arr=$jsn[$do]['tasks'];
foreach ($arr as $a)
            {
            echo "<li>".$a."</li>";
            }


?>
