<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include("header.php"); ?>

</head>

<body>
  <nav class="navbar navbar-light bg-info">
    <span class="navbar-brand mb-0 h1 ">CRUD Operator In Codeigniter</span>
  </nav>
  <h1>Hello, codeigniter</h1>
  <table class="table">
    <thead class="bg-primary">
      <tr>
        <th scope="col">Sr no</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Contact NO.</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="details">
      
      <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>9898256363</td>
      <td>mark@gmail.com</td>
      <td><button class="btn-success">Edit</button>
      <button class="btn-danger">Delete</button></td>
    </tr> -->

    </tbody>
  </table>
</body>

</html>
<script>
  $(document).ready(function() {
    console.log("ready");
    function fetch_data(){

      var base_url = "<?php echo site_url("home/loaddata");?>";
        $.ajax({    
          type: "post",
          url: base_url,                     
          success: function(response){  
            console.log(response);                  
              $(".details").html(response); 
             
          }
      });
    }
fetch_data();
  });
</script>