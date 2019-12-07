<!DOCTYPE html>
<html lang="en">

  <?php include_once("./components/header.php"); ?>

<body>
	<h1 align="center">CONTACT</h1>
	<br><br>
	<form align="center">
		Name : <input type="text" name="Name" placeholder="Name"><br><br>
		Email : <input type="text" name="Email" placeholder="Email Address"><br><br>
		Message : <input type="text" name="Message" placeholder="Your Message" height="auto"><br><br>
		<button>Send Message</button>
	</form>

  <?php 
    include_once("./components/menu.php");
  ?>

  <!-- Page Content -->
  <div class="container"></div>
  <!-- /.container -->

  <?php include_once("./components/footer.php"); ?>

</body>

</html>
