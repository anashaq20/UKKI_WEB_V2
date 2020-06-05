<!DOCTYPE html>
<?php include('index.php');?>
	<table id="frame">
	    <tr>
	        <td width="980">
	            <div>
		<h1 class="heading">Form Pendaftaran Anggota UKKI</h1>
		<div>
        <form action="proses-daftar.php" method="POST" name="daftarkan">
        <table>
        <thead>
        	<tr>
        	<td colspan="4">Silahkan Mengisi Form Pendaftaran dibawah ini.
            </td>
            </tr>
        </thead>
        	<tbody align="left">
            <tr>
        	<td>
            <p>ID Anggota</p>
            </td>
            <td><input type="text" name="id_anggota" maxlength="10" ></input></td>
            </tr>
            <tr>
            <td>
            <p>NPM</p>
            </td>
            <td>
            <input type="text" name="npm" maxlength="11"></input>
            </td>
            </tr>            
            <tr>
            <td>
            <p>Nama</p>
            </td>
            <td colspan="2">
            <input type="text" name="nama" maxlength="50"></input>
            </td>
            </tr>
            <tr>
            <td>
            <p>Jenis Kelamin</p>
            </td>
            <td>
            <p><input type="radio" name="jk" value="L">Laki-laki</input>
            <input type="radio" name="jk" value="P">Perempuan</input></p>
            </td>
            </tr>          
            <tr>
            <td><p>Jurusan</p></td>
            <td>
            <select name="jurusan">
				<option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Agroteknologi">Agroteknologi</option>
                <option value="Agribisnis">Agribisnis</option>
                <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                <option value="Administrasi Negara">Administrasi Negara</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                <option value="Hubungan Internasional">Hubungan Internasional</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Teknologi Pangan">Teknologi Pangan</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Ilmu Hukum">Ilmu Hukum</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Infomasi">Sistem Infomasi</option>
                <option value="Data Science">Data Science</option>
            </td>
            </tr>
            <tr>
            <td>
            Angkatan
            </td>
            <td>
            <input type="text" name="angkatan"></input>
            </td>
            </tr>
        	<tr>
            <tr>
                <td>
                    Status Keanggotaan
                </td>
                <td>
                    <select name="status">
                        <option value="Aktif">Aktif</option>
                        <option value="Aktivis">Aktivis</option>
                        <option value="Luar Biasa">Luar Biasa</option>
                        <option value="Pasif">Pasif</option>
                    </select>
                </td>
            </tr>
            <td>
            Tanggal Lahir
            </td>
            <td>
            <input type="date" name="lahir"></input>
            </td>
            </tr>
        	<tr>
            <td>
            Alamat
            </td>
            <td>
            <textarea rows="5" cols="50" name="alamat"></textarea>
            </td>
            <td colspan="4" align="center">
            <p><input class="logo" type="submit" name="simpan" value="Simpan">
			<input class="logo" type="reset" name="hapus" value="Reset"></p>
            </td>
            </tr>
            </table>
        </form>
		</div>
	</div>
	        </td>
	    </tr>
	</table>
</body>
</html>