<?php
include('security.php'); 
include('includes/header.php');
include('includes/navbar.php');
?>

<?php
       if(isset($_SESSION['success']) && ($_SESSION['success']) !=''){
          echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
          unset($_SESSION['success']);
       }

       if(isset($_SESSION['status']) && ($_SESSION['status']) !=''){
          echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
          unset($_SESSION['status']);
       }
?>
<!--Hero-->
<div class="modal fade" id="hero" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Title Goes Here">
            </div>
            <div class="form-group">
                <label>SubTitle</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Sub-Title Goes Here">
            </div>
            <div class="form-group">
                <label>Button</label>
                <input type="text" name="hero_btn" class="form-control" placeholder="Button Name Here">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="hero_save" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Hero Section
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hero">
              Add New Data
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
          $query ="SELECT * FROM hero";
          $query_run = mysqli_query($connection, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title </th>
            <th>SubTitle </th>
            <th>Button </th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>

        <?php
          if(mysqli_num_rows($query_run) > 0)
          {

            while ($row = mysqli_fetch_assoc($query_run))
            {
        ?>  
        <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['title']; ?> </td>
            <td> <?php echo $row['subtitle']; ?> </td>
            <td> <?php echo $row['button']; ?> </td>
            <td>
                <form action="hero_edit.php" method="post">
                    <input type="hidden" name="edit_hero_id" value="<?php echo $row['id'];?>">
                    <button  type="submit" name="edit_hero_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_hero_id" value=" <?php echo $row['id'];?> ">
                  <button type="submit" name="delete_hero_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
        </tr>

      <?php
        }
          }
            else{
              echo "No Record Found";
            }
      ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- feature cauese -->
<div class="modal fade" id="feature_causes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Image </label>
                <input type="file" name="feature_image" id="feature_image" class="form-control" >
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="feature_title" class="form-control" placeholder="Title Goes Here">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="feature_description" class="form-control" placeholder="Description Goes Here">

            </div>
            <div class="form-group">
                <label>Raised</label>
                <input type="text" name="feature_raised" class="form-control" placeholder="Raised Amount Here">
            </div>
            <div class="form-group">
                <label>Goal</label>
                <input type="text" name="feature_goal" class="form-control" placeholder="Goal Amount Here">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="feature_save" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Featured Causes
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feature_causes">
              Add New Data
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
          $query ="SELECT * FROM featured_causes";
          $query_run = mysqli_query($connection, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title </th>
            <th>Description </th>
            <th>Raised </th>
            <th>Goal</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>

        <?php
          if(mysqli_num_rows($query_run) > 0)
          {

            while ($row = mysqli_fetch_assoc($query_run))
            {
        ?>  
        <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo '<img src="upload/'.$row['image'].'" width="100px;" height="100px;">' ?> </td>
            <td> <?php echo $row['title']; ?> </td>
            <td> <?php echo $row['description']; ?> </td>
            <td> <?php echo $row['raised']; ?> </td>
            <td> <?php echo $row['goal']; ?> </td>
            <td>
                <form action="feature_edit.php" method="post">
                    <input type="hidden" name="edit_feature_id" value="<?php echo $row['id'];?>">
                    <button  type="submit" name="edit_feature_btn" class="btn btn-success">EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_feature_id" value=" <?php echo $row['id'];?> ">
                  <button type="submit" name="delete_feature_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
        </tr>

      <?php
        }
          }
            else{
              echo "No Record Found";
            }
      ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>