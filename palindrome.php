<?php
    include('header1.php');
?>
    <body class="bg-info">
        <form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
            <h1 class="border-bottom">CHECK PALINDROME NUMBER</h1>
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
        $no = $_POST["no1"];  
        $temp = $no;  
        $sum = 0;  
        while(floor($temp)) 
        {  
            $rem = $temp % 10;  
            $sum = $sum * 10 + $rem;  
            $temp = $temp/10;  
        }        
        if($no==$sum)
        {  
            echo "<script>alert('$no Is Palindrome Number');</script>";
        } 
        else 
        {  
            echo "<script>alert('$no Is Not Palindrome Number');</script>";
        }  
        echo "<script>window.location.href='dummy2.php';</script>";
    }
?>    
<?php
    include('putter1.php');
?>   