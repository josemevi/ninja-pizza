<?php 

   require('./config/db_connect.php');

    //quyery for all pizza
    $sql = 'SELECT id, title, ingredients FROM pizzas ORDER BY created_at';

    //execute query
    $result = mysqli_query($conn, $sql);

    //fetch results
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //remove the result from memory
    mysqli_free_result($result);
    //close the connection
    mysqli_close($conn);
    //print result
    //print_r($pizzas);
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<h4 class="center grey-text">Pizzas!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($pizzas as $pizza): ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
						<img src="./img/pizza.svg" alt="pizza-icon" class="pizza">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

			<?php if(count($pizzas) >= 3): ?>
				<p>There is more than 3 pizza</p>
			<?php else: ?>
				<p>There are fewer than 3 pizzas</p>
			<?php endif; ?>
			
		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>
