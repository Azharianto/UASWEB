<link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cleo Store</title>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Username/Password anda salah!')</script>";
		}
	}
?>

<div class="navbar">
    <div class="navbarKiri">
        <ul>
            <span>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Produk</a></li>
            </span>
        </ul>
    </div>
    <div class="navbarKanan">
        <ul>
            <span>
                <?php
                    session_start();
                    error_reporting(0);
                    if($_SESSION['username'])
                    echo '<li><a href="logout.php">Logout</a></li>';
                    else{
                        echo '<li><a href="login.php">Login</a></li>';
                    }
                ?>
            </span>
        </ul>
    </div>
</div>

<div class="landingPage">
    <div class="welcome">
        <div>
            <img src="image/jaket.webp" alt="jaket" id="imageIndex">
        </div>
        <div class="welcome1">
            <img src="image/Logo.png" alt="logo" width="100px">
            <h3>Cleo store</h3>
            <h3>Menjual berbagai products dari brand Mathernal</h3>
            <h3>Jaket mathernal ini memiliki bahan yang berkualitas</h3>
            <h3>Jaket mathernal ini memiliki harga sangat terjangkau</h3>
            <div class="buy">
                <a href="products.php">Buy now</a>
            </div>
        </div>
    </div>
    <a href="../public/aboutme.php">
    <div class="aboutContainer">
        <img src="https://blog-static.mamikos.com/wp-content/uploads/2022/08/Gambar-logo-Maternal-Disaster-dan-penjelasannya_3.jpg" alt="aboutmeBanner" width="100%" height="50%">
    </div>
    </a>
</div>

<div class="footer">
    <div class="info">
        <div class="infoKiri">
            <p>Brand mathernal ini adalah brand lokal berkualitas terbaik.<br>  Kami telah menyediakan berbagai products mathernal dan siap mengirimkan ke seluruh Indonesia.</p>
            <p>Jika Anda ingin bantuan atau memiliki masukan, silahkan hubungi kami: <br>Jam 8:00 - 20:00 WITA (Kecuali hari libur nasional)</p>
            <p>Email : Cleostore@gmail.com</p>
        </div>
        <div class="infoKanan">
            <p>Kami menerima pembayaran : </p>
            <ul>
                <li>GOPAY</li>
                <li>DANA</li>
                <li>OVO</li>
                <li>VISA</li>
                <li>MASTER CARD</li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>COPYRIGHT 2022 MATHERNAL. ALL RIGHTS RESERVED.</p>
    </div>
</div>
