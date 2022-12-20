<?php
    include('header1.php');
?>
    <body class="bg-info">
        <form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
            <h1 class="border-bottom">CHECK MAGIC NUMBER</h1>
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
  $num = $_POST["no1"];
  $sum=0;
  $n=$num;
  while($n>0||$sum>9)
  {
      if($n==0)
      {
        $n=$sum;
        $sum=0;
      }
      $sum +=$n%10;
    $n/=10; 
  }
  if($sum==1)
  {
    echo "<script>alert('$num Is Magic Number');</script>";
  }
  else
  {
    echo "<script>alert('$num Is Not Magic Number');</script>";
  }
  echo "<script>window.location.href='dummy4.php';</script>";
}
?>
<?php
    include('putter1.php');
?>   
