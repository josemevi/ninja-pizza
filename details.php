<?php

    require('./config/db_connect.php');

    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

        $sql = "DELETE FROM pizzas WHERE id=$id_to_delete";

        if(mysqli_query($conn, $sql)){
            mysqli_close($conn);
            header('Location: index.php');
        }else {
            echo 'query error:_'.mysqli_error($conn);
        }
    }

    //get parameter from url
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        //sql
        $sql = "SELECT * FROM pizzas WHERE id=$id";
        //get the result
        $result = mysqli_query($conn, $sql);
        //fetch the array
        $pizza = mysqli_fetch_assoc($result);
        //remove the result from memory
        mysqli_free_result($result);
        //close the connection
        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('./templates/header.php'); ?>

    <div class="container center">
        <?php if($pizza) : ?>
            <h4><?php echo htmlspecialchars($pizza['title']);  ?></h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']);  ?></p>
            <p>Creation Date: <?php echo htmlspecialchars($pizza['created_at']);  ?></p>
            <h5>Ingredients</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']);  ?></p>

            <!-- for delete purposes -->
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']?>">
                <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
            </form>

        <?php else: ?>
            <h5> Invalid Pizza</h5>
        <?php endif; ?>
    </div>

    <?php include('./templates/footer.php'); ?>
    
</body> 
</html>