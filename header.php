<!DOCTYPE html>
<head>
<title>UKKI UPN "Veteran" Jawa Timur</title>
<link href='Cabin-Regular.ttf' rel='stylesheet'>
<link rel="icon" href="UKKI.png">
<link rel="Stylesheet" type="text/css" href="efek.css">
<script type = "text/javascript" src="jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
		$(".sembunyi").click(function() 
			{$("#foto1").hide("slow") });
		$(".tampil").click(function() 
			{$("#foto1").show("slow") });
	});</script>
<script>
setInterval( function(){
    document.getElementById("demo").innerHTML = ramadhan();
    },1000);
function ramadhan(){
	//License under GB_source
	//Write by Goru
	//Ramadhan counter 2020

	var ramadhan_kata_gugel = new Date("April 23, 2020 18:00:00");    //gugel bilang 17 Mei at 12:00am sebenernye
	var nuw = new Date();
    var t = ramadhan_kata_gugel - nuw ;
    var du = 86400000;	//1 hari dalam millisecond
    var ou = 3600000;	//1 jam dalam millisecond
    var mu = 60000;		//1 menit dalam millisecond
    var su = 1000;		//1 detik dalam millisecond
    
    var r = Math.floor(t/du);
    var a = t - (r*du);
    var m = Math.floor(a/ou);
    var a = a - (m*ou);
    var d = Math.floor(a/mu);
    var a = a - (d*mu);
    var n = Math.floor(a/su);	

    var kapan =  r+"hari, "+m+" jam, "+d+" menit, "+n+" detik";;
    return kapan;
}
  function Dropdownku() {
  document.getElementById("myDropdown").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}  

function Dropdownku2() {
  document.getElementById("myDropdown2").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown2");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
function Dropdownku3() {
  document.getElementById("myDropdown3").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn3')) {
  var myDropdown3 = document.getElementById("myDropdown3");
    if (myDropdown3.classList.contains('show')) {
      myDropdown3.classList.remove('show');
    }
  }
}
</script>
</head>
<body>
<table width="980" class="logo">
  <tr>  
    <td width="120" height="120" colspan="1"><a href="index.php"><img src="UKKI.png" width="120" height="120" alt="Logo UKKI UPN &quot;Veteran&quot; Jawa Timur"></a></td>
    <td width="24" style="font-size:120px"><marquee direction="up" behavior="slide" scrollamount="10%">|</marquee></td>
    <td width="814" >
    <marquee width="450" behavior="slide" direction="right" scrollamount="35%">
	<h1>Unit Kegiatan Kerohanian Islam<br>UPN "Veteran" Jawa Timur</h1></marquee></td>
  </tr>
  </table>
  <table width="980">
    <tr>
    <td width="980">
      <marquee width="980px" scrollamount="10%">-Assalamu'alaikum Wr. Wb. Ahlan wa sahlan ikhwan dan akhwat fillah di Website Resmi UKKI UPN "Veteran" Jawa Timur-
      </marquee>
    </td>
    </tr>
  </table>
<table>
     <tr>
         <td width="980">
            <div style="
            background-image: url('logo ukki.png');
            background-align: right;
            background-size: 200px;
            background-repeat: no-repeat;
            background-color: #86ac41;
            font-family: 'Century Gothic';
            font-size: 30px;
            text-align: center;
            height: 100px;
            color: #fff;
            padding: 10px;
            box-sizing: border-box;
            outline: 2px dashed #666;
            outline-offset: -5px;">
      <div style="background-color: #324851;
            font-family: 'Century Gothic';
            font-size: 22px;
            text-align: center;
            width: 400px;
            border-radius: 20px;
            padding: 9px;
            box-sizing: border-box;
            height: 40px;
            color: #fff;
            margin: 0 auto;">Menuju Ramadhan 2020</div>
      <div id="demo"></div>
         </td>
     </tr>
     </table>
  <table>
      <tr>
          <td width="980">
            <div>  
            <div class="navbar">
            <a href="index.php">Beranda</a>
            <div class="dropdown">
            <button class="dropbtn" onmouseover="Dropdownku()" >Profil
            </button>
            <div class="dropdown-content" id="myDropdown">
            <a href="sejarah.php">Sejarah UKKI</a>
            <a href="visi_misi.php">Visi dan Misi</a>
            <a href="struktur.php">Struktur Organisasi</a>
            <a href="pengurus.php">Anggota Kepengurusan</a>
            </div>
            </div>
            <div class="dropdown">
            <button class="dropbtn2" onmouseover="Dropdownku2()">
            Departemen UKKI
            </button>
            <div class="dropdown-content" id="myDropdown2">
                <a href="bph.php">BPH</a>
                <a href="bakmin.php">Bakat dan Minat</a>
                <a href="dakwah.php">Dakwah</a>
                <a href="danus.php">Dana Usaha</a>
                <a href="humas.php">Humas</a>  
                <a href="kaderisasi.php">Kaderisasi</a>
                <a href="media.php">Media</a>
            </div>
            </div>
            <div class="dropdown">
            <button class="dropbtn3" onmouseover="Dropdownku3()" >Daftar Anggota
            </button>
            <div class="dropdown-content" id="myDropdown3">
            <a href="anggota_aktif.php">Anggota Aktif</a>
            <a href="aktivis.php">Aktivis</a>
            <a href="anggota_pasif.php">Anggota Pasif</a>
            <a href="anggota_LB.php">Anggota Luar Biasa</a>
            </div>
            </div>
            <div>
            <a href="daftar.php">Daftar</a>
            </div>
            </div>
            </div>            
          </td>
      </tr>
    </table>
</body>
</html>