
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  <title>Document</title>
</head>
<style>
  body {

    
    width: 100%;
    height: 100px;
  }
 .cont {
    width: 100%;
    transform: translateY(50px);
 }
.contain {

    border-radius: 20px;
    height: 430px;
 }

  .href{
    font-size: 10px;
  }
  @media screen and (max-width: 576px) {
    body{
    background: white;
  }
}
</style>
</head>

<body>
<div class=" pt-5 cont row-sm">
    <!-- h1 -->
    <!-- <div class="container rounde w-25   col-8 col-md-6 col-lg-4 pt-7  contain row-sm w-50 "> -->
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classe_db";
// Create connection
$connect =mysqli_connect($servername, $username, $password,$dbname);
echo"connecte";

if(isset($_POST['add'])){


$Name=$_POST['Name'];
$payment_Sshedulel=$_POST['payment_Sshedule'];
$Bill_Number=$_POST['Bill_Numbere'];
$Amount_Paid=$_POST['Amount_Paid'];
$Balance_amount=$_POST['Balance_amount'];

$query="INSERT INTO payment (Name ,payment_Sshedule ,Bill_Number ,Amount_Paid ,Balance_amount) values('$Name','$payment_Sshedulel','$Bill_Number','$Amount_Paid','$Balance_amount') ";
 mysqli_query($connect,$query);
 header('location:payment.php');
}
?>

<main class="container-fluid mt-0 mt-auto ">
        <div class=" cont row d-flex ">
            <div class=" d-flex justify-content-center align-item-center">
                <form action="" method="POST" class=" w-50">

                <h1 class="text-center text-secondary mt-3">Payment :</h1>
               
                     <div class="mb-2">
                      <label  class="form-label text-secondary">Name</label>
                      <input type="texte" class="form-control" name="Name" placeholder="">
                    </div>
                     <div class="mb-2">
                      <label class="form-label text-secondary">payment_Sshedule</label>
                      <input type="text" class="form-control" name="payment_Sshedule"placeholder="">
                    </div>
                    <div class="mb-2">
                    <label class="form-label text-secondary">Bill_Number</label>
                      <input type="number" class="form-control" name="Bill_Numbere"placeholder="">
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Amount_Paid</label>
                      <input type="number" class="form-control"  name="Amount_Paid" placeholder="">
                    </div>
                    <div class="mb-4 mb-sm-2">
                      <label  class="form-label text-secondary" >Balance_amount</label>
                      <input type="text" class="form-control" name="Balance_amount" placeholder="">
                    </div>     
                    <div class="mb-4 mb-sm-2">
                      <label  class="form-label text-secondary" >Date_</label>
                      <input type="date" class="form-control" name="Date_" placeholder="">
                    </div>         
                    <button class="btn btn-info text-white w-100" name="add">save</button>
              
                  </form>
                  </div>
        </div>
    </main>

</div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
