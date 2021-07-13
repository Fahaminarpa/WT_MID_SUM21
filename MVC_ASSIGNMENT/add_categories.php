<?php
 include 'admin_header.php';
  include 'controllers/cat_control.php';

?>

<html>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
        <h3>Add Category</h3>
        
        <form action="" method="post">
            Name: <input type="text" name="cat" value="<?php echo $cname;?>" placeholder="Enter name">
            
        <br>
        <input type="submit" name="add" value="Add">
        </form>
        </fieldset>
    </body>
</html>

<?php include 'admin_footer.php'; ?>