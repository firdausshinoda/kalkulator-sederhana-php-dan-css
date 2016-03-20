<html>
<head>
  <title>Membuat Kalkulator Sederhana</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
  <body>
    <div class="kalkulator">
      <div class="kotak1">
        <h2 class="judul">Kalkulator</h2>
      </div>
    <div class="kotak2">
      <div class="bg1">
        <center>
          <img class="circular" src="me2.jpg" alt="photo profile">
        </center>
          <div class="box1">
            <table>
              <tr>
                <td style="text-align:left">Nama</td><td> : Firdaus N.S</td>
              </tr>
              <tr>
                <td>NIM</td><td> : 14090015</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td><td> : Laki - Laki</td>
              </tr>
              <tr>
                <td>Email</td><td> : firdausns44@gmail.com</td>
              </tr>
            </table>
          </div>
      </div>
      <div class="bg2">
        <form method="post" action="rumus.php">
          <br/><br/><br/><br/><br/><br/>
          <input type="text" name="nilai1" class="angka" autocomplete="off" placeholder="Bilangan Pertama"/>
          <select class="opt" name="operator">
    				<option value="tambah">+</option>
    				<option value="kurang">-</option>
    				<option value="kali">x</option>
    				<option value="bagi">/</option>
    			</select>
          <input type="text" name="nilai2" class="angka" autocomplete="off" placeholder="Bilangan Kedua"/>
          <br/>
          <input type="submit" class="samadengan" value="=" />
          <input type="submit" class="c" value="C" />
          <br/>
            <input type="text" value="<?php if (isset($_GET['bil3'])) echo $_GET['bil3']?>" class="hasil">
        </form>
      </div>
      <div class="bg3">
        <center>
          <img class="circular" src="arin.jpg" alt="photo profile">
        </center>
          <div class="box3">
            <table style="text-align:left">
              <tr>
                <td>Nama</td><td> : Narindra O.</td>
              </tr>
              <tr>
                <td>NIM</td><td> : 14090035</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td><td> : Laki - Laki</td>
              </tr>
              <tr>
                <td>Email</td><td> : narindray@gmail.com</td>
              </tr>
            </table>
          </div>
      </div>
    </div>
    <div class="maker">
      <marquee> <font face = "Calibri">Copyright ©  <a class="brand" color ='red' href="http://www.firdausns44.blogspot.com">firdausns44.blogspot.com</a> and 
	  <a class="brand" href="http://www.narindray.wordpress.com">narindray.wordpress.com</a> </marquee>
	  
    </div>
  </div>
  </body>
</html>
