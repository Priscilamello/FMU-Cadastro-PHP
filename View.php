<?php
echo 'start of php View';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	$conn = mysqli_connect('localhost', 'root', 'nimda', 'webdevelopment') or die("connection Failed: " . mysqli_connect_error());

	$sql = "SELECT * FROM customer";
	$result = mysqli_query($conn, $sql);
	$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_close($conn);
	print_r($customers);
}
?>
<!DOCTYPE html>
<html>
<h1>Lista de Desejos</h1>
<div class="container">
	<div class="row">
		<?php foreach ($customers as $customers) { ?>
			<div class="col s6 md3">
				<div class="card z-depth-0">
					<div class="card-content center">
						<div>Nome: <?php echo htmlspecialchars($customers['Name']); ?><br></div>
						<div>ID: <?php echo htmlspecialchars($customers['ID']); ?><br></div>
						<div>Telephone: <?php echo htmlspecialchars($customers['Phone']); ?><br></div>
						<div>Cidade: <?php echo htmlspecialchars($customers['City']); ?><br></div>
						<div>Lista de desejo: <?php echo htmlspecialchars($customers['Desejo']); ?><br></div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
</html>