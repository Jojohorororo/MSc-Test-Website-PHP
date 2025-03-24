<?php

session_start();
if (isset($_SESSION['confirmation_message']))
{
    echo "<script>alert('" . $_SESSION['confirmation_message'] . "');</script>";
    unset($_SESSION['confirmation_message']); // Unset the session variable after displaying the message
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Εργασία</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header class='container'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <a class="navbar-brand" href="./index.php"><img src="./assets/images/logo.png" alt="Logo" height="30"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Αρχική</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Εγγραφή</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="carousel slide" id="carousel-465823">
			<ol class="carousel-indicators">
				<li data-slide-to="0" data-target="#carousel-465823">
				</li>
				<li data-slide-to="1" data-target="#carousel-465823">
				</li>
				<li data-slide-to="2" data-target="#carousel-465823" class="active">
				</li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item">
					<img class="d-block w-100" alt="Carousel Bootstrap First" src="./assets/images/banners/banner1.png" />
					<div class="carousel-caption">
						<h4>
							Εμπόδιο στις προαγωγές θα μπορούσε να αποτελέσει η τηλεργασία, σύμφωνα με τη Dell
						</h4>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" alt="Carousel Bootstrap Second" src="./assets/images/banners/banner2.png" />
					<div class="carousel-caption">
						<h4>
							Πρόστιμο ύψους 250 εκατομμυρίων ευρώ επέβαλαν οι γαλλικές αρχές προστασίας του ανταγωνισμού στη Google
						</h4>
					</div>
				</div>
				<div class="carousel-item active">
					<img class="d-block w-100" alt="Carousel Bootstrap Third" src="./assets/images/banners/banner3.png" />
					<div class="carousel-caption">
						<h4>
							Σειρά ζητημάτων εξακολουθεί να προβληματίζει την Ευρωπαϊκή Ένωση στη στάση των Apple και Meta
						</h4>
					</div>
				</div>
			</div> <a class="carousel-control-prev" href="#carousel-465823" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-465823" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
		</div>

    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 offset-lg-3">
                <h3>Φόρμα Εγγραφής Χρήστη</h3>
                <form id="registration_form" action="./submit_form.php" method="POST">
                    <div class="form-group">
                        <label for="name">Όνομα:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Εισάγετε το όνομά σας" required>
                        <div id="name_error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="surname">Επίθετο:</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Εισάγετε το επίθετό σας" required>
                        <div id="surname_error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Τηλέφωνο:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Εισάγετε τον αριθμό τηλεφώνου σας" required>
                        <div id="phone_error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="age">Ηλικία:</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Εισάγετε την ηλικία σας" required>
                        <div id="age_error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Εισάγετε το email σας" required>
                        <div id="email_error" class="error-message"></div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="accept_terms" name="accept_terms" required>
                        <label class="form-check-label" for="accept_terms">Αποδέχομαι τους όρους χρήσης</label>
                    </div>

					<div class="row mt-2">
						<label class="mt-2">Σημπληρωσε την πράξη</label>
                        <div class="form-check col-2">
                            <input type="number" class="form-control" id="captcha1" name="captcha1" placeholder="" required>
                            <label class="form-check-label" for="captcha1"></label>
                        </div>
                        <label class="mt-2">+</label>
                        <div class="form-check col-2">
                            <input type="number" class="form-control" id="captcha2" name="captcha2" placeholder="" required>
                            <label class="form-check-label" for="captcha2"></label>
                        </div>
                        <div class="form-check col-2">
                            <input type="number" class="form-control" id="captcha3" name="captcha3" placeholder="" required>
                            <label class="form-check-label" for="captcha3"></label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Υποβολή</button>
                </form>
            </div>
        </div>
    </div>

    <footer class='container mt-5'>

    </footer>

    <script>

        var form = document.getElementById("registration_form");
        form.addEventListener("input", function(event)
        {
            var inputs = document.querySelectorAll('.form-control');
            inputs.forEach(function(input) {
            	var errorElement = document.getElementById(input.id + "_error");
                var value = input.value.trim();

                var inputlength = 0;
    			var errorMessage = "";

    			switch(input.id)
    			{
    				case "name":
    					inputlength = 3;
    					errorMessage = "Το όνομα πρέπει να περιέχει τουλάχιστον 3 χαρακτήρες.";
    					break;
    				case "surname":
    					inputlength = 3;
    					errorMessage = "Το επίθετο πρέπει να περιέχει τουλάχιστον 3 χαρακτήρες.";
    					break;
    				case "phone":
    					inputlength = 10;
    					errorMessage = "Το τηλέφωνο πρέπει να περιέχει τουλάχιστον 10 νούμερα.";
    					break;
    				case "age":
    					inputlength = 1;
    					errorMessage = "H ηλικία πρέπει να περιέχει τουλάχιστον μία τιμή.";
    					break;
    				case "email":
    					inputlength = 5;
    					errorMessage = "Το email δεν είναι σωστό";

    					if (value.length < inputlength || !value.includes("@"))
                        {
                            errorElement.innerHTML = '<img alt="error" style="width: 18px;" src="./assets/images/icon_error.png"></i> ' + errorMessage;
                        }
                        else
                        {
                        	errorElement.innerHTML = '<i><img alt="ok" style="width: 18px;" src="./assets/images/icon_ok.png"></i>';
                        }
    					inputlength = 0;
    					break;
    			}

    			if (inputlength > 0)
    			{
                    if (value.length < inputlength)
                    {
                        errorElement.innerHTML = '<img alt="error" style="width: 18px;" src="./assets/images/icon_error.png"></i> ' + errorMessage;
                    }
                    else
                    {
                    	errorElement.innerHTML = '<i><img alt="ok" style="width: 18px;" src="./assets/images/icon_ok.png"></i>';
                    }
    			}
            });
        });

        form.addEventListener("submit", function(event)
		{
            if (!checkForm())
            {
                event.preventDefault();
                alert("Παρακαλώ ελέγξτε όλα τα στοιχεία της φόρμας.");
            }
		});

		function checkForm()
		{
			var passChecks = true;
            var inputs = document.querySelectorAll('.form-control');
            inputs.forEach(function(input)
            {
                var errorElement = document.getElementById(input.id + "_error");
                var value = input.value.trim();

    			var inputlength = 0;
    			var errorMessage = "";

    			switch(input.id)
    			{
    				case "name":
    					inputlength = 3;
    					errorMessage = "Το όνομα πρέπει να περιέχει τουλάχιστον 3 χαρακτήρες.";
    					break;
    				case "surname":
    					inputlength = 3;
    					errorMessage = "Το επίθετο πρέπει να περιέχει τουλάχιστον 3 χαρακτήρες.";
    					break;
    				case "phone":
    					inputlength = 10;
    					errorMessage = "Το τηλέφωνο πρέπει να περιέχει τουλάχιστον 10 νούμερα.";
    					break;
    				case "age":
    					inputlength = 1;
    					errorMessage = "H ηλικία πρέπει να περιέχει τουλάχιστον μία τιμή.";
    					break;
    				case "email":
    					inputlength = 5;
    					errorMessage = "Το email δεν είναι σωστό";

    					if (value.length < inputlength || !value.includes("@"))
                        {
                            errorElement.innerHTML = '<img alt="error" style="width: 18px;" src="./assets/images/icon_error.png"></i> ' + errorMessage;
                            passChecks = false;
                        }
                        else
                        {
                        	errorElement.innerHTML = '<i><img alt="ok" style="width: 18px;" src="./assets/images/icon_ok.png"></i>';
                        }

    					inputlength = 0;
    					break;
    			}

    			if (inputlength > 0)
    			{
                    if (value.length < inputlength)
                    {
                        errorElement.innerHTML = '<img alt="error" style="width: 18px;" src="./assets/images/icon_error.png"></i> ' + errorMessage;
                        passChecks = false;
                    }
                    else
                    {
                    	errorElement.innerHTML = '<i><img alt="ok" style="width: 18px;" src="./assets/images/icon_ok.png"></i>';
                    }
    			}
            });

            return passChecks;
		}
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
