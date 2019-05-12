<?php 
$stage = intval(file_get_contents('tb.txt'));


$date=strval(date("d"));
//echo $stage;


$string = file_get_contents("./RATIBOR-tasks/".$date.".json");
$jsn = json_decode($string, true);
// uu
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

//echo $jsn[$do]["proj"];

?>

<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo $jsn[$do]['fon'];?> ">

    <title>RATIBOR</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            RATIBOR
        </nav>
        <div class="row">
            <div class="col phol">

            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-7 ">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"> <?php echo $jsn[$do]['stage'];?> </h2>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php echo $jsn[$do]['proj'];?>
                        </h6>
                        <p class="card-text text-left">

                            <ul>
                                <?php 
                                $arr=$jsn[$do]['tasks'];
                                foreach ($arr as $a)
                                {
                                echo "<li class=' text-left'>".$a."</li>";
                                }

            ?>
                            </ul>


                        </p>
                        <a href="<?php echo $jsn[$do]['url'];?>" class="card-link">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>



        </div>



    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap.js"></script>
</body>

</html>
