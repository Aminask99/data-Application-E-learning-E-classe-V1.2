
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
echo"connected";

$id=$_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$req = "SELECT * FROM courss where id ='$id' ";
$res = $connect -> query($req) ;
$row = $res -> fetch_assoc();
if(isset($_POST['update'])){
$Title= $_POST['Title'];
$Link= $_POST['Link'];
$Price= $_POST['Prince'];

$req = " UPDATE courss  SET Title = '$Title', Link = '$Link', Price ='$Price' where id = '$id'  ";
$connect  -> query($req);
header('location: courss.php');
}
?>

<main class="container-fluid mt-0 mt-auto ">
        <div class=" cont row d-flex ">
            <div class=" d-flex justify-content-center align-item-center">
                <form action="" method="POST" class=" w-50">

                <h1 class="text-center text-secondary mt-3">Courss Students :</h1>
                
                <div class="mb-2">
                      <label class="form-label text-secondary">Title</label>
                      <input type="text" class="form-control" name="Title" value="<?php echo $row['Title']; ?>">
                    </div>
                    <div class="mb-2">
                      <label class="form-label text-secondary">Link</label>
                      <input type="text" class="form-control" name="Link" value="<?php echo $row['Link']; ?>">
                    </div>
                    <div class="mb-2">
                      <label class="form-label text-secondary">Price</label>
                      <input type="text" class="form-control" name="Price" value="<?php echo $row['Price']; ?>">
                    </div>
                    
                         
                    <button class="btn btn-info text-white w-100" name="update">update</button>
              
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
