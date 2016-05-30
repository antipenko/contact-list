<?php include 'header.html.php'; ?>
<body>
	<main>
		<div class="row">
			<h2>Добавление нового контакта</h2>

			<form class="form-add-contact" action="?" method="post">
			<!-- Name -->
				<p class="field">
					<input type="text" name="name" placeholder="Name">
					<i class="fa fa-user" aria-hidden="true"></i>
				</p>
			<!-- SurName -->
				<p class="field">
					<input type="text" name="surname" placeholder="Surname">
					<i class="fa fa-user" aria-hidden="true"></i>
				</p>
			<!-- B-day -->
				<p class="field">
					<input type="date" name="birthday" placeholder="">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</p>
			<!-- Phone -->
				<p class="field">
					<input type="text" name="phonenumber" placeholder="0500000000">
					<i class="fa fa-user" aria-hidden="true"></i>
				</p>

				<p class="submit">
					<button type="submit" name="submit">
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</button>
				</p>
			</form>
		</div>
	</main>
	<?php include 'footer.html.php' ?>
