<?php
    include('header1.php');
?>
    <body class="bg-info">
        <form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
            <h1 class="border-bottom">CHECK PRIME NUMBER OR NOT</h1>
            <div class="row p-1">
                <div class="col-3"><h2>NUMBER:</h2></div>
                <div class="col-9"><input type="number" class="form-control" placeholder="0"  name="no1"/></div>
            </div>
            <div class="row p-1">
                <div class="col-12 text-center"><input type="submit" name="check" value="check" class="bg-danger"/></div>
            </div>
             </div>
    </form>
    <?php
        if(isset($_POST["check"]))
        {
            $i=2;
            $j=0;
            $no=$_POST["no1"];
            for($i=2;$i<$no;$i++)
            {
                if($no%$i==0)
                {
                    $j=1;
                    break;
                }
                $j=0;
            }
                if($j==0)
                {
                    echo "<script>alert('$no Is Not Prime Number');</script>";
                }
                else
                {
                    echo "<script>alert('$no Is Prime Number');</script>";
                }
                echo "<script>window.location.href='dummy3.php';</script>";
        }  
    ?>
<?php
    include('putter1.php');
?>   