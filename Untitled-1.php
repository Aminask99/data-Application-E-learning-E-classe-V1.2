<?php
// $table=[
//  $array= [ 'Name' =>'Amina','payment Sshedule' => 'first', 'Bill Number' => '00012223','Amount Paid' => 'DHS 100,000','Balance amount'=> 'DHS 500,000','Date'=>'05-Jan,2022'],
//  $array= [ 'Name' =>'ALEX','payment Sshedule' => 'first', 'Bill Number' => ' 00012223','Amount Paid' => 'DHS 100,000','Balance amount'=> 'DHS 500,000','Date'=>'05-Jan,2022'],
//  $array= [ 'Name' =>'SAM','payment Sshedule' => 'first', 'Bill Number' => '00012223','Amount Paid' => 'DHS 100,000','Balance amount'=> 'DHS 500,000','Date'=>'05-Jan,2022'],
//  $array= [ 'Name' =>'Row','payment Sshedule' => 'first', 'Bill Number' => '00012223','Amount Paid' => 'DHS 100,000','Balance amount'=> 'DHS 500,000','Date'=>'05-Jan,2022']

//    ];
$table=file_get_contents('payment.json');
$table= json_decode($table,true);
  
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
              height: 700px; 
        }
        @media screen and (min-width: 576px) {
            .side-bar {

             background-color: #FAFFC1;

            }
        }

        .side-bar {
            background-color: #fff;
        }
        .Logout{
           transform: translateY(30Px);
    }

        @media screen and (min-width: 984px) {
            .side-bar {

                background-color: #FAFFC1;

            }
        }
    </style>
  </head>  

  <body>

     <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX saidbar XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <main class="container-fluid  position-sticky top-0 start-0">
        <div class="row flex-nowrap">
           
        <?php include'side-bar.php';   ?>

            <div class="col py-3 ">

                  <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX navbar XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
                  <?php include'navbar.php';   ?>
                <div
                    class=" d-flex main-container     flex-sm-row    flex-column  container bg-light  justify-content-between py-3">
                    <div>
                        <p class="fw-bold "> Payment Details </p>
                    </div>
                    <div>
                        <i class="far fa-sort text-info me-3 h5 "></i>

                    </div>
                    <!--XXXXXXXXXXXXXXXXXXXXXXXXXX TABL XXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
                </div>
              <div class="container-fluid table-responsive">
              <table class="table table-striped" >
       
              <thead>
    <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX PHP XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
       <?php
       //  xxxxxx th
      foreach($table as $key => $val){
        
      }
      echo" <tr  class=' bg-white  mb-3 align-middle border-5 border-light  text-black-50'>  
   
      <th>Name </th>
      <th>payment Sshedule </th>
      <th>Bill Number </th>
      <th>Amount Paid </th>
      <th>Balance amount </th>
      <th>Date </th>
    
   
    </tr>";
      
       ?>
           </thead>
          <!-- xxxx td -->
     <?php
   
     foreach ($table as $array){
       echo" <tr class=' bg-white  mb-3 align-middle border-5 border-light' class='text-secondary'>
     
     
       <td class='py-3'> {$array['Name']}</td>
       <td class='py-3'>{$array['payment Sshedule']}</td>
       <td class='py-3'>{$array['Bill Number']}</td>
       <td class='py-3'>{$array['Amount Paid']}</td>
       <td class='py-3'>{$array['Balance amount']}</td>
       <td class='py-3'>{$array['Date']}</td>
       <td class='text-info'>
       <i class='far fa-eye pe-3 text-info'></i>
     </td>
      
     </tr>";
  
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