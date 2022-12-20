<?php
    include('header2.php');
?>
    <body class="bg-info">
        <form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
            <h2 class="border-bottom">ENTER DIGIT AND FIND THAT SUM</h2>
            <div class="row p-1">
                <div class="col-3"><h2>NUMBER:</h2></div>
                <div class="col-9"><input type="number" class="form-control" placeholder="0"  name="no1"/></div>
            </div>
            <div class="row p-1">
                <div class="col-12 text-center"><input type="submit" name="check" value="check" class="bg-danger"/></div>
            </div>
   <?php
      if(isset($_POST["check"]))
      {
         $num = $_POST["no1"];
         $sum = 0;
         for ($i = 0; $i < strlen($num); $i++)
         {
            $sum += $num[$i];
         }   
         echo "<h4 align='center'>Sum Of Digit Is $sum</h4>";
      }
   ?>
   </div>
   </form>
<?php
    include('putter2.php');
?>   