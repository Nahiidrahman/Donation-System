<?php
include('security.php'); 
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT Featured Causes </h6>
  </div>

  <div class="card-body">


<?php
/*edit featured causes */
if(isset($_POST['edit_feature_btn']))
{
    $id = $_POST['edit_feature_id'];

    $query = "SELECT * FROM featured_causes WHERE id = '$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row) 
    {
        ?>
        <form action="code.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="edit_feature_id" value="<?php echo $row['id'] ?>" >
            <div class="form-group">
                <label> Image </label>
                <input type="file" name="feature_image" id="feature_image" value="<?php echo $row['image'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="edit_feature_title" value="<?php echo $row['title'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="edit_feature_description" value="<?php echo $row['description'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Raised</label>
                <input type="text" name="edit_feature_raised" value="<?php echo $row['raised'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Goal</label>
                <input type="text" name="edit_feature_goal" value="<?php echo $row['goal'] ?>" class="form-control">
            </div>

            <a href="home.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="feature_updatebtn" class="btn btn-primary"> UPDATE </button>

        </form>
            
    <?php
        
    }

}
?>

  </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

