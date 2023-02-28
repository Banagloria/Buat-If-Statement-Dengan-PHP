<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas pemograman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  	<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
  			<li><a href="progam1.php">Positif dan Negatif</a></li>
  			<li><a href="progam2.php">Genap dan Ganjil</a></li>
  			<li><a href="progam3.php">Lulus atau Tidak</a></li>
  			<li><a href="progam4.php">Kalimat Palindrom</a></li>
            <li><a href="progam5.php">Tahun kabisat</a></li>
  		</ul>
  	</nav>
  	<div class="section-center"> 
      <form >
            <label for="InputPalindrom" class="label">Mengecek Apakah Sebuah Kata Atau Kalimat Palindrom Atau Tidak </label><br>
            <input type="text" id="InputPalindrom" name="InputPalindrom"  placeholder="Masukan Palindrom" class="input">
            <br><br>
            <button type="submit" name="PeriksaPalindrom" class="Tombol">Periksa</button><br><br>
            <?php 
            if (isset($_GET["PeriksaPalindrom"])){
                $Kata = $_GET["InputPalindrom"];
                $Palindrom = strrev($Kata);
                if ($Kata == $Palindrom){
                    echo "$Kata Adalah Polindrum";
                }else {
                    echo "$Kata Bukan Polindrom";
                }
            }
            ?>
         </form>
  	</div> 
</body>
</html>