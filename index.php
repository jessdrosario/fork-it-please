<!DOCTYPE html>
<html lang="en">

  <?php include_once("./components/header.php"); ?>
<head>
  


</head>

<style>
  img {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 5px;


  }
  img:hover {
    box-shadow: 0 0 2px 1px rgba(0,140,186, 0.5);
  }

</style>
<body>

  <?php 
    include_once("./components/menu.php");
  ?>

    <!-- Page Content -->
  <div style="padding-bottom: 15px;">  
    <div class="container " style="display: flex; justify-content: center; ">
      <div style="justify-content: center;text-align: center;align-content: center;">
        <img class="col-sm-12" src="./images/manuel.jpg" style="height: 40rem; width: 40rem"; >
        <h1 class="col-sm-12 col-md-6 col-lg-12" style="font-size: 100px; "> NEW SPECIES</h1>
        <h2> Please Help !</h2>

      </div>
      
    </div>


    <div style="display: flex; justify-content: center; flex-direction: column; text-align: center;align-content: center;">
        <h1><a href="about.php">Donation</a></h1>
        <input type="Number" name="Donation" placeholder="lowest 10k" style="max-width: 150px;">
    </div>
  </div>  
  <!-- /.container -->

 <?php include_once("./components/footer.php"); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
