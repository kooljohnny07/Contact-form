<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content= "width=device-width, initial-scale=1.0">
		<meta name="keyword" content= "contact form, html, css, php, mysql">
		<meta name="description" content= "Contact form using html, php, css">
		<meta name="author" content = "Olayemi John">
		
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		
		<title>Contact Form</title>
	</head>

<body>
	<main>
		<div id="form">
			<header>
				<h1>Contact Form</h1>
			</header>
			<p>Please fill the form below</p>
			<div id="myForm">
				<form method="post" action="processor.php">
					<label for = "uname">Full name: </label>
					<input type="text" name="uname" id="uname" placeholder="James Bond">
					<label for = "email">E-mail: </label>
					<input type="text" name="email" id="email" placeholder="jamesbond@company.com">
					<label for = "issues">Issue: </label>
					<select id= "issue" name="issue">
						<option value="">please select</option>
						<option value="Query">Query</option>
						<option value="Feedback">Feedback</option>
						<option value="Complaint">Complaint</option>
						<option value="Other">Other</option>
					</select>
					<label for = "comment">Comment: </label>
					<textarea name="comment"></textarea>
					<input name="submit" type="submit" value="Submit Form">
				</form>
			</div>
		</div>
		<div id="info">
			<h2>Contact us</h2>
			<div>
				<span class="material-symbols-outlined">pin_drop</span>
				<span>Plot 142 Church Street, Arepo, Ogun State, Nigeria </span>
			</div>
			<div>
				<span class="material-symbols-outlined">call</span>
				<span>+234 703 048 5056</span>
			</div>
			<div>
				<span class="material-symbols-outlined">mail</span>
				<span>info@company.com</span>
			</div>
			<div>
				<span class="material-symbols-outlined">language</span>
				<span>https://www.companyname.com</span>
			</div>
		</div>
	</main>
</body>
</html>