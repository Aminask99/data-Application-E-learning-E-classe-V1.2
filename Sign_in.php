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
    background: linear-gradient(69.66deg, #00C1FE 19.39%, #FAFFC1 96.69%);
    width: 100%;
    height: 100vh;
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
  <!-- Start login page -->
  <div class=" pt-5 cont row-sm">
    <!-- h1 -->
    <div class="container rounde w-25  p-3 bg-white col-8 col-md-6 col-lg-4 pt-7  contain row-sm w-50 ">
      <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX PHP XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
      <?php include 'SignIn.php' ; ?>
     
</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>