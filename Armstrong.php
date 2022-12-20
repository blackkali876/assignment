<?php
    include('header1.php');
?>
    <body class="bg-info">
        <form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
            <h1 class="border-bottom">CHECK ARMSTRONG NUMBER</h1>
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
                    $no=$_POST["no1"];
                    $total=0;
                    $temp=$no;
                    $y=strlen($no);
                    while($temp!=0)
                    {
                        $rem=$temp%10;
                        $r=$rem;
                        for($i=0;$i<$y-1;$i++)
                        {
                            $r=$r*$rem;
                        }
                        $total=$total+$r;
                        $temp=$temp/10;
                    }
                    if($no==$total)
                    {
                        echo "<script>alert('$no Is Armstrong Number');</script>";
                    }
                    else
                    {
                        echo "<script>alert('$no Is Not Armstrong Number');</script>";
                    }
                        
                        echo "<script>window.location.href='dummy.php';</script>";
                }
            ?>
<?php
    include('putter1.php');
?>   