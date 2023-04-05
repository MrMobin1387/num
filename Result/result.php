<?php
$num = $_GET['search'];
$color;
$colorNum = rand(1,4);
switch ($colorNum) {
    case 1:
        $color = 'rgb(19, 206, 134)';
        break;

    case 2:
        $color = 'tomato';
        break;
    
    case 3:
        $color = 'rgb(157, 71, 255)';
        break;

    case 4:
        $color = 'rgb(252, 187, 66)';
        break;

}

// ---------------

    // Zoj Ya fard :
    $num__type;
    if(gettype($num / 2) == 'integer'){
        $num__type = "زوج";
    }else{
        $num__type = "فرد";
    }

    // Prime Num :
    $num__prime;
    function check_prime($x)
    {
       if ($x == 1 || $x <= 0)
       return 0;
       for ($i = 2; $i <= $x/2; $i++)
       {
          if ($x % $i == 0)
          return 0;
       }
       return 1;
    }
    $flag_val_prime = check_prime($num);


        if ($flag_val_prime == 1)
        {
            $num__prime = "بله";
        }

        else
        {
            $num__prime = "خیر";
        }




    // Category :
    
    $num__smallestBakhshpaziri = "";
    $num__cat;
    if($num > 0){
        $num__cat = "طبیعی <b style='opacity : 20%;'>/</b> صحیح <b style='opacity : 20%;'>/</b> حسابی";
    }
    elseif($num == 0){
        $num__cat = "صحیح <b style='opacity : 20%;'>/</b> حسابی";
    }
    elseif($num < 0){
        $num__smallestBakhshpaziri = 'ندارد';
        $num__cat = "صحیح منفی";
    }
    
    if($num == 1){
        $num__smallestBakhshpaziri = 1;
    }






    for($i=2; $i <= $num; ++$i)
    {
        if($num % $i == 0)
        {
            $num__smallestBakhshpaziri = $i;
            break;
        }
    }

if($num == '-0'){
    $num = 0;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اطلاعات جامع و دقیق  -  عدد <?php echo $num ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    
    <h1 style="border: 3px solid <?php echo $color ?>;">
      عدد
            <b style="color:<?php echo $color ?>"><?php echo $num ?></b>
    </h1>  

    <div style="border: 3px solid <?php echo $color ?>;" class="data">
        <h2 style="text-decoration-color: <?php echo $color ?>;">اطلاعات عمومی</h2>
        <ul dir="rtl" class="data_omomi">



            <li>نوع عدد : <b style="color:<?php 
            if($num !== 0){
                if($num__type == "زوج"){
                    echo "gold";
                }else{
                    echo "rgb(69, 157, 205)";
                }   
            } else {
                $num__type == "صفر";
                echo "lightblue";
            }
            ?>"><?php  if($num !== 0){echo $num__type;}else{echo "صفر";} ?>

            </b></li>

            <!----------------------------------->

            <li> عدد اول : <b style="color:<?php 
            if($num__prime == "بله"){
                echo "lightgreen";
            }else{
                echo "crimson";
            }    
            ?>"><?php echo $num__prime ?></b></li>

            <!----------------------------------->

             <li> دسته بندی : <b style="color:<?php 
            if($num__cat == "صحیح منفی"){
                echo "crimson";
            }else{
                echo "lightgreen";
            }    
            ?>"><?php echo $num__cat ?></b></li>


        </ul>

        <h2 style="text-decoration-color: <?php echo $color ?>;">بخش پذیری</h2>
        <ul dir="rtl" class="data_bakhspaziri">
        
            <li> بر عدد <strong>2</strong> : <b style="color:
            <?php 
            if($num !== 0){
            if($num__type == "زوج"){
                echo "lightgreen";
            }else{
                echo "crimson";
            } 
        }else{echo "crimson";} 
            ?>">
            <?php if($num !== 0){ if($num__type == "زوج"){

                echo "بله";
            }
            else
            {
                echo "خیر";
            }
        }else{echo "خیر";}
            ?></b></li>

            <!----------------------------------->

            <li> بر عدد <strong>3</strong> : <b style="color:<?php 
            if($num !== 0){
            if($num % 3 == 0){
                echo "lightgreen";
            }else{
                echo "crimson";
            }    }else{echo "crimson";}
            ?>">
            <?php             if($num !== 0){
            if($num % 3 == 0){

                echo "بله";
            }
            else
            {
                echo "خیر";
            }
            }else{echo "خیر";}
            ?></b></li>

            <!----------------------------------->

            <li> بر عدد <strong>4</strong> : <b style="color:<?php 
  if($num !== 0){
    if($num % 4 == 0){
        echo "lightgreen";
    }else{
        echo "crimson";
    }    }else{echo "crimson";}   
            ?>">
            <?php             if($num !== 0){
            if($num % 4 == 0){

                echo "بله";
            }
            else
            {
                echo "خیر";
            }
            }else{echo "خیر";}
            ?></b></li>

            <!----------------------------------->

            <li> بر عدد <strong>5</strong> : <b style="color:<?php 
  if($num !== 0){
    if($num % 5 == 0){
        echo "lightgreen";
    }else{
        echo "crimson";
    }    }else{echo "crimson";}  
            ?>">
            <?php             if($num !== 0){
            if($num % 5 == 0){

                echo "بله";
            }
            else
            {
                echo "خیر";
            }
            }else{echo "خیر";}
            ?></b></li>

            <!----------------------------------->

            <li> بر عدد <strong>6</strong> : <b style="color:<?php 
  if($num !== 0){
    if($num % 6 == 0){
        echo "lightgreen";
    }else{
        echo "crimson";
    }    }else{echo "crimson";} 
            ?>">
            <?php             
            
            if($num !== 0){
                if($num % 6 == 0){

                    echo "بله";
                }
                else
                {
                    echo "خیر";
                }
                
            }else{echo "خیر";}
            ?></b></li>

            <!----------------------------------->

            <li> بر عدد <strong>7</strong> : <b style="color:<?php 
  if($num !== 0){
    if($num % 7 == 0){
        echo "lightgreen";
    }else{
        echo "crimson";
    }    }else{echo "crimson";}   
            ?>">
            <?php             if($num !== 0){
            if($num % 7 == 0){

                echo "بله";
            }
            else
            {
                echo "خیر";
            }
            }else{echo "خیر";}
            ?></b></li>

            <!----------------------------------->

            <li> بر عدد <strong>8</strong> : <b style="color:<?php 
  if($num !== 0){
    if($num % 8 == 0){
        echo "lightgreen";
    }else{
        echo "crimson";
    }    }else{echo "crimson";}
            ?>">
            <?php             if($num !== 0){
            if($num % 8 == 0){

                echo "بله";
            }
            else
            {
                echo "خیر";
            }
            }else{echo "خیر";}
            ?></b></li>

            <!----------------------------------->

            <li> بر عدد <strong>9</strong> : <b style="color:<?php 
  if($num !== 0){
    if($num % 9 == 0){
        echo "lightgreen";
    }else{
        echo "crimson";
    }    }else{echo "crimson";}   
            ?>">
            <?php
            if($num !== 0){
            if($num % 9 == 0){

                echo "بله";
            }
            else
            {
                echo "خیر";
            }
            }else{echo "خیر";}
            ?></b></li>

<br>
            <h4 style="margin-bottom: -66px;" dir="rtl">کوچک ترین <import>شمارنده</import> ( به جز عدد <b style="color: lightblue">1</b> ) :</h4>

        
        </ul>
            <h3 class="smallest_di"><?php if($num != 0){echo $num__smallestBakhshpaziri; }else{echo "ندارد";} ?> <br display="<?php if($num__smallestBakhshpaziri == $num){echo "block";}elseif($num == 0){echo "block";}else{echo "none";} ?>" ><h5><?php if($num__smallestBakhshpaziri == $num){echo "(خودش)";}elseif($num == 0){echo "( عدد صفر شمارنده ای ندارد )";} else{echo "";} ?></h5></h3>
    
    
            <h2 style="text-decoration-color: <?php echo $color ?>;margin-top: 2em !important;">توان و جذر</h2>
            <ul class="data-tavan"> 
            
            
 
            <li class="tavan-li"> <strong>مربع:</strong> <h3 style="font-size: 15px !important;"><?php echo $num**2 ?></h3>
                
            </li>

            <!---------------->

            <li class="tavan-li"> <strong>مکعب:</strong> <h3 dir="rtl" style="font-size: 15px !important;"><?php echo $num**3 ?></h3>
                
            </li>

            </ul>
            <h5 style="position: fixed; bottom: 0px; left: 25px; opacity: 10%; font-family: ybLight;">By Mobin Malek</h5>
    </div>
</div>
</body>
</html> 