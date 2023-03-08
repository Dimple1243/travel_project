<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN_PAGE</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
<style>
 .submit {
  background-color:#5fbae9; 
  border: none;
  color: black;
  padding: 20px 45px;
  text-align: center;
  text-decoration: inherit;
  display: inline-block;
  font-size: 16px;
  float:right;
  border-radius: 10px;
  margin: 21px;
  margin-top:-10PX;

}
</style>
<script>
  function handleChange(src) {

    // alert(src.value,src.id);
    // alert(src.id);

    
    document.getElementById('id').value=src.id
    document.getElementById('status').value=src.value
  
  }
  </script>

</head>
<body>
    <h1 align="center" style="color:#5fbae9;">User Travel Details</h1>
    <!-- <button type="=button" name="button" text="black" class="button" onclick="welcome()"><a href="travel.html"><b>Raise New Request</b></a></button> -->
    <br>
    <div class="card-body">
        <div class="table-responsive">

        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Contact No</th>
      <th scope="col">Email</th>

      <th scope="col">Destination Country</th>
      <th scope="col">Date of Requesting</th>

      <!-- <th scope="col">Date_of_Birth</th> -->
      <th scope="col">Date of leaving india</th>
      <th scope="col">Date of Reaching india</th>
      <!-- <th scope="col">Passport_No</th> -->
      <th scope="col">Emergency Contact No</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>  
    </tr>
  </thead>
  <tbody>

    <?php
        $con = mysqli_connect("localhost","root","@Dimple123","login");
         if (!$con){
            mysqli_select_db("login", $con);
         
        }

        include './connection.php';

        $selectquerry = "select * from travel_data";

        $query = mysqli_query($con,$selectquerry);

        $nums = mysqli_num_rows($query);

        while($row = mysqli_fetch_array($query)){
    ?>
    <tr>
        
        <td><?php echo $row['id'];?></td>

        <td><?php echo $row['Name_as_per_Passport'];?></td>
        <td><?php echo $row['Contact_No'];?></td>
        <td><?php echo $row['Email'];?></td>
        <td><?php echo $row['Destination_Country'];?></td>
        <td><?php echo date("Y-m-d");?></td>
        <td><?php echo $row['Date_of_leaving_india'];?></td>
        <td><?php echo $row['Date_of_Reaching_india'];?></td>
        <td><?php echo $row['Emergency_Contact_No'];?></td>
        <td><?php echo $row['status'];?></td>
<td>
        <form>
                Approve<input type="radio" name="Approve" onchange="handleChange(this);" id='<?php echo $row['id'];?>' value="Approve" <?php echo $row['status'] =='Approve' ? 'disabled':'';?> />
                Pending<input type="radio" name="Pending" onchange="handleChange(this);" id='<?php echo $row['id'];?>' value="Pending"<?php echo $row['status'] =='Approve' ? 'disabled':'';?> />
        </form>

</td>

  <?php }?>   
<form action="./update.php" method="post">
  <input type="hidden" name="id" id='id'>
  <input type="hidden" name="status" id='status'>
  <input type="submit" class="submit" name='submit'>
</form>

        </td>  
  </tbody>
</table>
        </div>
    </div>
</body>
</html>