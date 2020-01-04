<?php include 'connection.php';


if (isset($_POST['add_category']))
{
  $category = $_POST['category'];

  mysqli_query($con, "INSERT INTO `tbl_category`(`category_name`) VALUES ('$category')");

  echo "<script>alert('Category added successfully!');</script>";
  echo "<script>window.history.back();</script>";
  
}
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
            <h1><i class="fa fa-dashboard"></i> Add Category</h1>
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
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Category</h3>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label class="control-label">Category Name</label>
                    <input class="form-control" type="text" name="category" placeholder="Enter category name">
                  </div>
                   
                </form>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" name="add_category" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button> 
              </div>
            </div>
          </div></div></div>
        
      </div>
    </div>
    <!-- Javascripts-->
    <?php include 'scripts.php'; ?>
  </body>
</html>