<?php
 include 'admin_header.php';
 include 'controllers/cat_control.php';
 $id=$_GET["id"];
 $c=getCategory($id);
?>

<html>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
        <h3>Edit Category</h3>       
        <form action="" method="post">
            Name: <input type="text" name="cat" value="<?php echo $c["name"];?>" placeholder="Enter name">
        <br>
        <input type="submit" name="edit" value="Edit">
        </form>
        </fieldset>
    </body>
</html>

<?php include 'admin_footer.php'; ?>