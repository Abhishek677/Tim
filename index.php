<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tim Horton's Order</title>
        <link rel="stylesheet" href="TimStyle.css">
    </head>
    <body>
        <a href="index.php"> <img class="img1" src="Images/tim5.png" /></a> <br><br><br> 
        <a href="index.php"> <img class="tim4" src="Images/tim4.png" /></a>  <br><br> <br>
        <h1 class="head1"> Welcome To Tim Horton's</h1><br> <br>

        <div class="content">

            <form action="order.php" method="post" >
                <h2> Place Your Order Here...</h2><br> <br>

                <label> Number of coffees: </label>
                <input class="inp" type="number" name="coffees" min="1" max="100" value="<?php if (isset($_POST['coffees'])) echo $_POST['coffees']; ?>" required><br><br>

                <div >
                    <label> Size: </label>
                    <select name="sizes" id="selct" value="<?php if (isset($_POST['sizes'])) echo $_POST['sizes']; ?>" required >

                        <option value="-1">Select a size</option>
                        <option value="$2.10"> Small </option>
                        <option value="$2.98">Medium</option>
                        <option value="$3.60">Large</option>
                        <option value="$4.50">Extra-Large</option>

                    </select><br><br><br>

                </div>

                <label> How many creams? </label>
                <input class="inp" type="number" name="creams" min="0" max="100" value="<?php if (isset($_POST['creams'])) echo $_POST['creams']; ?>" ><br><br>

                <label> How many sugars? </label>
                <input class="inp" type="number" name="sugars" min="0" max="100" value="<?php if (isset($_POST['sugars'])) echo $_POST['sugars']; ?>"><br><br>

                <input class="sub" type="submit" value="Order coffee"><br>



            </form>

        </div><br><br> <br><br> 
        <a href="https://www.timhortons.com/"><img class="tim4" src="Images/tim1.png" /> </a> <br><br><br>    
        <a href="https://www.timhortons.com/"> <img class="tim4" src="Images/tim2.png" /> </a> <br><br><br> 
        <a href="https://www.timhortons.com/"> <img class="tim4" src="Images/tim3.png" /> </a> <br><br><br>
        <img class="tim6" src="Images/tim6.png" />
        
        
        
    </body>
</html>
