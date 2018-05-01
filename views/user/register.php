<?php include ROOT . '/layouts/header.php';?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 padding-right">

				<?php if (isset($errors) && is_array($errors)): ?>
					<ul>

						<?php foreach ($errors as $key): ?>
							<li> - <?php echo $key; ?></li>
						<?php endforeach; ?>

					</ul>
				<?php endif; ?>




				<div class="signup-form">
					<h2>Регистрация на сайте</h2>
					<form action="#" method="post">
						<input type="text" name="name" placeholder="<?php echo $name; ?>">
						<input type="email" name="email" placeholder="<?php echo $email; ?>">
						<input type="password" name="password" placeholder="<?php echo $password; ?>">
						<input type="submit" name="submit" class="btn btn-default" value="Регистрация" />
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<br>
<br>


<?php include ROOT.'/layouts/footer.php'; ?>