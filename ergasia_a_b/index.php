<?php

session_start();
if (isset($_SESSION['confirmation_message']))
{
    echo "<script>alert('" . $_SESSION['confirmation_message'] . "');</script>";
    unset($_SESSION['confirmation_message']);
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

		<div class="row mt-2 p-3">
			<h3>Άρθρα - Αγγελίες</h3>
		</div>

		<div class="row">
			<div class="col-md-4 mt-3">
				<div class="card p-3 shadow-sm">
					<img class="card-img-top" alt="Bootstrap Thumbnail First" src="./assets/images/articles/article1.png" />
					<div class="card-block">
						<h5 class="card-title p-3">
							Sony VPL-EX225 Projector
						</h5>
						<div class="card-text">
							<ul>
								<li>Ωρες λάμπας μόνο  574</li>
                                <li>Φωτεινότητα  2100 Ansi</li>
                                <li>ανάλυση XGA (1024x768 pixels)</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="card p-3 shadow-sm">
					<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="./assets/images/articles/article2.png" />
					<div class="card-block">
						<h5 class="card-title p-3">
							PC (i5-8400 / 16GB RAM)
						</h5>
						<div class="card-text">
							<ul>
								<li>CPU: Intel i5 8400</li>
                                <li>GPU: Asus GeForce 2GB GDDR5</li>
                                <li>MB: Gigabyte H310M DS2</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="card p-3 shadow-sm">
					<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="./assets/images/articles/article3.png" />
					<div class="card-block">
						<h5 class="card-title p-3">
							Dani Box Micro + fev
						</h5>
						<div class="card-text">
							<ul>
								<li>ani Box Micro 18650</li>
                                <li>Blue + Sleeve By Leather Sleeves</li>
                                <li>Black + 1 battery V4.5S+</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 mt-3">
				<div class="card p-3 shadow-sm">
					<img class="card-img-top" alt="Bootstrap Thumbnail First" src="./assets/images/articles/article1.png" />
					<div class="card-block">
						<h5 class="card-title p-3">
							Sony VPL-EX225 Projector
						</h5>
						<div class="card-text">
							<ul>
								<li>Ωρες λάμπας μόνο  574</li>
                                <li>Φωτεινότητα  2100 Ansi</li>
                                <li>ανάλυση XGA (1024x768 pixels)</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="card p-3 shadow-sm">
					<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="./assets/images/articles/article2.png" />
					<div class="card-block">
						<h5 class="card-title p-3">
							PC (i5-8400 / 16GB RAM)
						</h5>
						<div class="card-text">
							<ul>
								<li>CPU: Intel i5 8400</li>
                                <li>GPU: Asus GeForce 2GB GDDR5</li>
                                <li>MB: Gigabyte H310M DS2</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="card p-3 shadow-sm">
					<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="./assets/images/articles/article3.png" />
					<div class="card-block">
						<h5 class="card-title p-3">
							Dani Box Micro + fev
						</h5>
						<div class="card-text">
							<ul>
								<li>ani Box Micro 18650</li>
                                <li>Blue + Sleeve By Leather Sleeves</li>
                                <li>Black + 1 battery V4.5S+</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

    <footer class='container mt-5'>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
