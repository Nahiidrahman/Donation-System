<?php
include('security.php'); 
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT Hero Section </h6>
  </div>

  <div class="card-body">

<?php
    /*edit hero */

if(isset($_POST['edit_hero_btn']))
{
    $id = $_POST['edit_hero_id'];

    $query = "SELECT * FROM hero WHERE id = '$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row) 
    {
        ?>

        <form action="code.php" method="POST">

            <input type="hidden" name="edit_hero_id" value="<?php echo $row['id'] ?>" >
            <div class="form-group">
                <label> Titlte </label>
                <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Sub-Title</label>
                <input type="text" name="edit_subtitle" value="<?php echo $row['subtitle'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Button Name</label>
                <input type="text" name="edit_btnname" value="<?php echo $row['button'] ?>" class="form-control">
            </div>

            <a href="home.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="hero_updatebtn" class="btn btn-primary"> UPDATE </button>

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