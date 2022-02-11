
<?php


$table=[
 $array=[' '=>'vide','Name' =>'Amina','Email' => 'user@gmail.com', 'phone' => 868759094560,'nroll_Number' => 234576887655643,'DateOfAdmission'=> '08-Dec-2022'],
 $array=[''=>'vide','Name' =>'Alex','Email' => 'user@gmail.com', 'phone' => 3456876887,'nroll_Number' => 657876543245777,'DateOfAdmission'=> '09-Dec-2022' ],
 $array=[''=>'vide','Name' =>'Wory','Email' => 'user@gmail.com', 'phone' => 6796544322,'nroll_Number' => 678987678907897,'DateOfAdmission'=> '15-Dec-2022' ],
 

   ];
  
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classe_db";
// Create connection
$conn =mysqli_connect($servername, $username, $password,$dbname);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <style>
    .List_ {
      transform: translateY(30Px);
      margin-left: 30px;
      gap: 19px;

    }

    .List_ :hover {
      background-color: #00C1FE
    }

    .side-bar {
      background-color: #fff;
      height: 800px;
     
    }

    .image {
      width: 70px;
    }
    .Logout{
      transform: translateY(70Px);
      margin-left: 30px;
    }
    
    @media screen and (min-width: 576px) {
      .side-bar {

        background-color: #FAFFC1;

      }
    }

    .side-bar {
      background-color: #fff;
    }

    @media screen and (min-width: 984px) {
      .side-bar {

        background-color: #FAFFC1;

      }
    }
  </style>
</head>

<body>


  <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX saidbar XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
  <main class="container-fluid  position-sticky top-0 start-0">
    <div class="row flex-nowrap">

    <?php include'side-bar.php';   ?>

      <div class="col py-3">

        <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX NAVBAR XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

        <?php include'navbar.php';   ?>
        <div
          class=" d-flex main-container  flex-sm-row  flex-column  container bg-light  justify-content-between py-3">
          <div>
            <p class="fw-bold "> Student List </p>
          </div>
          <div>
            <i class="far fa-sort text-info me-3 h5 "></i>
            <a href="form.php"> <button type="button" class="btn btn-info    text-light">ADD NEW STUDENT</button></a>
          </div>
        
        </div>
        <div class="divs2">
          <div id="page-content-wrapper">
            <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX TABL XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
            <div class="bg-light navbar-light">

              <div class="container-fluid table-responsive">
              <table class="table" >
       
       <thead>
    <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX PHP XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
       <?php
       //  xxxxxx th
      foreach($table as $key => $val){
        
      }
      echo" <tr  class='align-middle border-5 border-light text-secondary 5'>
     
     
      <th>Name </th>
      <th>Email </th>
      <th>phone </th>
      <th>Enroll_Number </th>
      <th>DateOfAdmission </th>
      

    
    </tr>";
      
       ?>
           </thead>
          <!-- xxxx td -->
          <?php
      $req="SELECT * FROM listt_student ";
      $res = $conn -> query($req);
      if($res -> num_rows > 0){
        
        while( $a = $res -> fetch_assoc()){
          $id=$a['id'];
       echo" <tr class='bg-white align-middle border-5 border-light' class='text-secondary'>
     
       <td class='py-3'><img src='STUDENT.png 'width='70px ' > </td>
       <td class='py-3'> ". $a['Name'] . "</td>
       <td class='py-3'>{$a['Email']}</td>
       <td class='py-3'>{$a['phone']}</td>
       <td class='py-3'>{$a['Enroll_Number']}</td>
       <td class='py-3'>{$a['DateOfAdmission']}</td>" ; ?>
       <td class="py-3">
       <a href="update_Student.php?id=<?php echo $a['id']; ?>" type="button" class="btn btn-sm">
         <i class="fal fa-pen pe-2 text-info"></i>
       </a>
       </td>
       <td>
       <a href='delete.php?id=<?php echo $a['id']; ?>' type='button' class='btn  btn-sm '>
         <i class='fal fa-trash text-info'></i>
       <a/>
     </td>
     </tr>
     <?php
    }
    }
     ?>
  
 </table>
              </div>
            </div>
          </div>
        </div>
      </main>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    
</body>

</html>
