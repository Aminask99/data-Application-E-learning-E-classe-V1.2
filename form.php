
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

if(isset($_POST['add'])){
echo "yes";
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Enroll_Number=$_POST['Enroll_Number'];
$Date_of_admission=$_POST['Date_of_admission'];

$query="INSERT INTO listt_student(Name,Email,Phone,Enroll_Number,DateOfAdmission) values('$Name','$Email','$Phone','$Enroll_Number','$Date_of_admission') ";
 mysqli_query($connect,$query);
 header('location:listt_student.php');
}
?>

<main class="container-fluid mt-0 mt-auto ">
        <div class=" cont row d-flex ">
            <div class=" d-flex justify-content-center align-item-center">
                <form action="" method="POST" class=" w-50">

                <h1 class="text-center text-secondary mt-3">Students informations :</h1>
                <h2 class="text-center text-primary">Saisissez les informations de l'apprenant</h2>
                     <div class="mb-2">
                      <label  class="form-label text-secondary">Name</label>
                      <input type="texte" class="form-control" name="Name" placeholder="Name">
                    </div>
                     <div class="mb-2">
                      <label class="form-label text-secondary">Email</label>
                      <input type="email" class="form-control" name="Email"placeholder="Enter your email">
                    </div>
                    <div class="mb-2">
                    <label class="form-label text-secondary">phone</label>
                      <input type="number" class="form-control" name="Phone"placeholder="Number">
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Number</label>
                      <input type="number" class="form-control"  name="Enroll_Number" placeholder="number">
                    </div>
                    <div class="mb-4 mb-sm-2">
                      <label  class="form-label text-secondary" >DateOfAdmission</label>
                      <input type="date" class="form-control" name="Date_of_admission" placeholder="Enter your password">
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
