<?php 

    require('./config/db_connect.php');


    $email = $title = $ingredients = '';
    $errors = array('email' => '', 'title' => '', 'ingredients' => '');
     //isset verifies if the variable is already declared and
     //_GET is a php variable that returns a array with every data and variable that's send to the server
     // arrays in php that're global to php pages starts with $_ and contains normally only capital letters $_POST
    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);
        //validating form
        //empty determines if a variable is empty
        if(empty($_POST['email'])){
            $errors['email'] = "email is required";
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Invalid email';
            }
        }

        if(empty($_POST['title'])){
			$errors['title'] = 'A title is required <br />';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'Title must be letters and spaces only';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required <br />';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
        }
        //redirection after checking no errors
        if(array_filter($errors)){
            echo "errors in form";
        }else {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
            $sql = "INSERT INTO pizzas (title, email, ingredients) VALUES ('$title', '$email', '$ingredients')";
            //execute query

            if(mysqli_query($conn, $sql)){
                mysqli_close($conn);
                header('Location: index.php');
            }else {
                echo 'query error:_'.mysqli_error($conn);
            }
    
        }

	} // end POST check


?>

<!DOCTYPE html>
<html lang="en">
    <?php include('./templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" class="white">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"><br>
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>Pizza title</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>"><br>
            <div class="red-text"><?php echo $errors['title']; ?></div>
            <label>Ingredients (comma_separated)</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('./templates/footer.php'); ?>
    
</html>