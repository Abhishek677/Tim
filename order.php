<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Tim Horton's Order</title>
        <link rel="stylesheet" href="TimStyle.css">
    </head>
    <body>
        <a href="index.php"><img class="img1" src="Images/tim5.png" /></a>
        <a href="index.php"><img class="img6" src="Images/tim90.png" /></a>
        <a href="index.php"><img class="img3" src="Images/tim9.png" /><br><br></a>
        
        
        <?php
        $coffees = $_REQUEST["coffees"];
        $creams = $_REQUEST["creams"];
        $sugars = $_REQUEST["sugars"];
        $tax = 13 / 100;
        $count1=0;  // for small
        $count2=0;  // for medium
        $count3=0;  //for large
        $count4=0;  //for extra-large
        $isValid == true;
                
        $sizes = $_REQUEST["sizes"];

        
        //For small 
        
           if ($sizes == "$2.10") 
        {  
           echo "<h1 class='head1'> Thanks For Your Order. Here it is:</h1>";
           
        for($i=0;$i<$coffees;$i++){
            if ($sizes == "$2.10") 
        { 
        echo "<img id='tom' src='Images/cup.jpg' >";
        
        
        if($creams==true)
        echo "<img id='plu' src='Images/plus.jpg' >";
        for($j=0;$j<$creams;$j++){
        
        echo "<img id='crea' src='Images/cream.jpg' > ";  
        }
        
        if($sugars==true)
        echo "<img id='plu2' src='Images/plus.jpg' >";
        for($k=0;$k<$sugars;$k++){
        
        echo "<img id='su' src='Images/sugar.jpg' > ";  
        }}
        $count1++;
        echo "<br> <br>";
        
        }


      
            
            $small = 2.10;
            $price1 = $small * $coffees + $tax*$count1;
            
            echo "<p id='ye'> Cost: $$small ⨉ $coffees + tax = $$price1</p>";
    
        }
        
        
        //Until here for small 
        
        
        
        // For medium
        
         if ($sizes == '$2.98')
        {
         echo "<h1 class='head1'> Thanks For Your Order. Here it is:</h1>";  
         
         for($i=0;$i<$coffees;$i++){
            if ($sizes == "$2.98") 
        { 
         echo "<img id='jerry' src='Images/cup.jpg' >";
        
        
        if($creams==true)
        echo "<img id='plu' src='Images/plus.jpg' >";
        for($j=0;$j<$creams;$j++){
        
        echo "<img id='crea' src='Images/cream.jpg' > ";  
        }
        
        if($sugars==true)
        echo "<img id='plu2' src='Images/plus.jpg' >";
        for($k=0;$k<$sugars;$k++){
        
        echo "<img id='su' src='Images/sugar.jpg' > ";  
        }}
        $count2++;
        echo "<br> <br>";
        
        }
        
        
            $medium = 2.98;
            $price2 = $medium * $coffees + $tax*$count2;
            
            echo "<p id='ye'> Cost: $$medium ⨉ $coffees + tax = $$price2 </p>";
           
        }
        
        //until here for medium
        
        
        //Now for large
        
        
        if ($sizes == "$3.60")
        {
            echo "<h1 class='head1'> Thanks For Your Order. Here it is:</h1>";
            
         for($i=0;$i<$coffees;$i++){
            if ($sizes == "$3.60") 
        { 
         echo "<img id='nobita' src='Images/cup.jpg' >";
        
        
        if($creams==true)
        echo "<img id='plu' src='Images/plus.jpg' >";
        for($j=0;$j<$creams;$j++){
        
        echo "<img id='crea' src='Images/cream.jpg' > ";  
        }
        
        if($sugars==true)
        echo "<img id='plu2' src='Images/plus.jpg' >";
        for($k=0;$k<$sugars;$k++){
        
        echo "<img id='su' src='Images/sugar.jpg' > ";  
        }}
        $count3++;
        echo "<br> <br>";
        
        }        
        
        
            $large= 3.60;
            $price3 = $large * $coffees + $tax*$count3;
           
            echo "<p id='ye'> Cost: $$large ⨉ $coffees + tax = $$price3 </p>";
           
        }
        
        //until here for large
        
        
       // for extra- large
        
        if ($sizes == '$4.50' && isset($coffees) )
        {
            echo "<h1 class='head1'> Thanks For Your Order. Here it is:</h1>";
        
        for($i=0;$i<$coffees;$i++){
         if ($sizes == "$4.50") 
        { 
         echo "<img id='end' src='Images/cup.jpg' >";
        
        
        if($creams==true)
        echo "<img id='plu' src='Images/plus.jpg' >";
        for($j=0;$j<$creams;$j++){
        
        echo "<img id='crea' src='Images/cream.jpg' > ";  
        }
        
        if($sugars==true)
        echo "<img id='plu2' src='Images/plus.jpg' >";
        for($k=0;$k<$sugars;$k++){
        
        echo "<img id='su' src='Images/sugar.jpg' > ";  
        }}
        $count4++;
        echo "<br> <br>";
        
        }


        
            $extlarge = 4.50;
            $price4 = $extlarge * $coffees + $tax*count4;
            
            echo "<p id='ye'> Cost: $$extlarge ⨉ $coffees + tax = $$price4 </p>" ;

        }
        
        //untill here for extra large
        
        
        //for validation purpose


        if ($sizes == '-1' )  
            echo "<p id='yes'>To Order, Complete the Requirements First </p>";
        
        ?>
        

        
       
        

    </body>
</html>
