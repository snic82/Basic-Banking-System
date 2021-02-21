<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details/Transfer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">SPARKS BANK</a>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php"><button type="button" class="btn btn-warning">Transaction History</button></a>
              </li>
          </div>
</nav>
<div class="bg-info">

<div class="container bg-light">
        <h2 class="text-center pt-4">Customer Details</h2>
        <br>
        <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr class="text-center">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td><a href="sendMoney.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">DO TRANSACTION</button></a>
                        <a href="userdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">VIEW DETAILS</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                </tbody>
                </table>
                </div>
                </div>
            </div> 
        </div>
        </div>
</body>
</html>