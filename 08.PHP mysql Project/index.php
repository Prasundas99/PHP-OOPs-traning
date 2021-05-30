<?php
include( 'config\db_connect.php ');

// Write query for all notes    
$sql = 'SELECT * FROM `note`  ORDER BY `created_at`';

// check connection
	if(!$sql){
		echo 'sql error: '. mysqli_connect_error();
	}

// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

// check connection
	if(!$result){
		echo 'result error: '. mysqli_connect_error();
	}  

// fetch the resulting rows as an array
$note =mysqli_fetch_all($result, MYSQLI_ASSOC);

//free space
mysqli_free_result($result);

//close results
mysqli_close($conn);

//print_r($notes);


?>

<!DOCTYPE html>
<html lang="en">
<!--Header and navbar-->
<?php include('./templates/header.php'); ?>

<h4 class="center grey-text">Notes</h4>

	<div class="container">
		<div class="row">

			<?php foreach($note as $note) : ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h4><?php echo htmlspecialchars($note['title']); ?></h4>
							<div><?php echo htmlspecialchars($note['desc']); ?></div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $note['id'] ?>">More info -></a>
						</div>
					</div>
				</div>

            <?php endforeach; ?>

		</div>
	</div>


<!--Footer-->
<?php include('./templates/footer.php'); ?>

</html>