<?php
    include('header3.php');
?>
    <body class="bg-info">
        <form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
            <h2 class="border-bottom">ENTER NO AND DROW PATTEN</h2>
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
            $n=$_POST["no1"];
            $a = 64;
            for($i=1;$i<=$n;$i++)
            {
                for($j=1;$j<=$n-$i;$j++)
                {
                   echo "&nbsp;&nbsp;";
                }
                for($j=$i;$j>0;$j--)
                {
                   $x=chr($a+$j);
                   echo "$x";
                }
                for($j=2;$j<=$i;$j++)
                {
                   $x=chr($a+$j);
                   echo "$x";
                }
                echo "<br>";
            }
         }
        
        ?>
           
           </div>
        </form>
<?php
    include('putter3.php');
?>    