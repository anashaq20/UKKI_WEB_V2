<!DOCTYPE html>
<?php include('index.php');?>
	<table>
	    <tr>
	        <td width="980">
	            <div id="frame">
	<table>
	    <tr>
	        <td width="980">
	          <h1 class="heading">Daftar Anggota UKKI UPN "Veteran" Jawa Timur tahun 2019/2020</h1>
	        </td>
	    </tr>
	    <tr>
	        <td width="980">
	            Daftar Nama Anggota Aktif UKKI UPN "Veteran" Jawa Timur disajikan dalam tabel berikut.
            </td>
        </tr>
        <tr>
            <td width="980">
              <?php
              include ('koneksi.php');
              $select = "SELECT * FROM anggota_ukki where status='Aktif';";
              $result = mysqli_query($conn, $select);
              if(!$result) {
                die ('SQL Error: ' . mysqli_error($conn));
                  };
              $no   = 1;
              $bulan  = array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
              if (mysqli_num_rows($result) > 0) {?>
              <table class="data-table" width="980">
              <thead class="thead">
              <tr>
                  <th width="20">NO</th>
                  <th>NPM</th>
                  <th  width="160">NAMA</th>
                  <th>JENIS KELAMIN</th>
                  <th>JURUSAN</th>
                  <th  width="30">ANGKATAN</th>
                  <th>STATUS</th>
                  <th width="120">TANGGAL LAHIR</th>
                  <th>ALAMAT</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) 
                  {
                    $jk="";
                    $tgl  = explode('-', $row['tgl_lahir']);
                    if($row['jenis_kelamin']=="L")
                    {
                        $jk= "Laki-Laki";
                    }else{
                        $jk= "Perempuan" ; 
                    };
                    echo '
                      <tr>
                        <td>'.$no.'</td>
                        <td>'.$row['npm'].'</td>
                        <td>'.$row['nama'].'</td>
                        <td>'.$jk.'</td>
                        <td>'.$row['jurusan'].'</td>
                        <td>'.$row['angkatan'].'</td>
                        <td>'.$row['status'].'</td>
                        <td>'.$tgl[2] . ' ' . $bulan[(int)$tgl[1]] . ' '.$tgl[0].'</td>
                        <td>'.$row['alamat'].'</td>
                        </tr>';
                    $no++;
                  };}
                    else{
                      echo ("<script>window.alert('Belum ada anggota pada daftar ini!!')</script>");
                  };
                    ?>
                  </tbody>
                    </table>
                </td>
                </tr>
	        </table>
            </div>
	        </td>
	    </tr>
	</table>
	
</body>
</html>