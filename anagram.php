<?php
    include('header2.php');
?>
<body class="bg-info">
        <form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
            <h2 class="border-bottom">CHECK ANAGRAM STRING OR NOT</h2>
            <div class="row p-1">
                <div class="col-3"><h3>STRING-1:</h3></div>
                <div class="col-9"><input type="text" class="form-control" placeholder="Enter Frist string"  name="no1"/></div>
            </div>
            <div class="row p-1">
                <div class="col-3"><h3>STRING-2</h3></div>
                <div class="col-9"><input type="text" class="form-control" placeholder="Enter Second string"  name="no2"/></div>
            </div>
            <div class="row p-1">
                <div class="col-12 text-center"><input type="submit" name="check" value="check" class="bg-danger"/></div>
            </div>
             </div>
    </form>
<?php
    if(isset($_POST["check"]))
    {
            $string_1=$_POST["no1"];
            $string_2=$_POST["no2"];
            if (count_chars($string_1, 1) == count_chars($string_2, 1))
            {
                echo "<script>alert('This Is Anagram Strings');</script>";
            }
            else
            {
                echo "<script>alert('This Is Not Anagram Strings');</script>";
            }
            echo "<script>window.location.href='dummy6.php';</script>";
    } 
?>
<?php
    include('putter2.php');
?>