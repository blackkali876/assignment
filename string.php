<?php
    include('header2.php');
?>
    <body class="bg-info">
        <form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
            <h1 class="border-bottom">FIND REVERS STRING</h1>
            <div class="row p-1">
                <div class="col-3"><h2>STRING:</h2></div>
                <div class="col-9"><input type="text" class="form-control" placeholder="0"  name="no1"/></div>
            </div>
            <div class="row p-1">
                <div class="col-12 text-center"><input type="submit" name="Find" value="Find" class="bg-danger"/></div>
            </div>
            <?php
                if(isset($_POST["Find"]))
                {
                    $str1=$_POST["no1"];
                    $str2=strrev($str1);
                    echo "<h2 align='center'>$str2</h2>";    
                }
            ?>
            </div>
        </form>
<?php
    include('putter2.php');
?>   