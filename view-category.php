<?php /*include 'connection.php';*/

$category_query = mysqli_query($con, "SELECT * FROM `tbl_category` ORDER BY category_name ASC");

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Vali Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <?php include 'header.php'; ?>
      <!-- Side-Nav-->
      <?php include 'leftbar.php'; ?>
      
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> View Category</h1>
            <p>A free and modular admin template</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Category Name</th>
                      <th>Action</th>                       
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_assoc($category_query)) { ?>
                    <tr>
                      <td></td>
                      <td><?php echo $row['category_name']; ?></td>
                      <td><a href="delete-category.php">Delete</a> / <a href="edit-category.php">Edit</a></td>
                       
                    </tr>
                    <?php  } ?>
                     
                  </tbody>
                </table>
              </div>
            </div></div>

      </div>
        
      </div>
    </div>
    <!-- Javascripts-->
    <?php include 'scripts.php'; ?>
  </body>
</html>