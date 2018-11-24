<!DOCTYPE html>

<html>

<head>
	<title>CSS Contact Form</title>
	
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="m_form.css" type="text/css" media="all" />
</head>

<body>

	<h2>Match Report</h2>
	
	<form class="form">
            <div style="float:left; width:500px; height:auto;">
                <div style="width:500px; float:left;">
                    LabelText
                </div>
                <div style="width:500px; float:left;">
                    <input type="text" name="textfield" id="textfield" />
                </div>
            </div>
            <div style="float:left; width:500px; height:auto;">
                <div style="width:500px; float:left;">
                    LabelText
                </div>
                <div style="width:500px; float:left;">
                    <input type="text" name="textfield" id="textfield" />
                </div>
            </div>
    </form>
    <form class="Reaction">
        <p class="name">
			<input type="text" name="name" id="name" placeholder="John Doe" />
			<label for="name">Name</label>
		</p>
		
		<p class="email">
			<input type="text" name="email" id="email" placeholder="mail@example.com" />
			<label for="email">Email</label>
		</p>
		
		<p class="web">
			<input type="text" name="web" id="web" placeholder="www.example.com" />
			<label for="web">Website</label>
		</p>		
	
		<p class="text">
			<textarea name="text" placeholder="Write something to us" /></textarea>
		</p>
		
		<p class="submit">
			<input type="submit" value="Send" />
		</p>
	</form>

</body>

</html>

