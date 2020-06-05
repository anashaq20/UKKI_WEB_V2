<!DOCTYPE html>
<?php include('index.php');?>
	<div>
		<h2 class="logo">Daftar Anggota UKKI UPN "Veteran" Jawa Timur tahun 2019/2020</h2>
	</div>
  <div id="frame">
        <p>
          Daftar Nama Anggota Pasif UKKI UPN "Veteran" Jawa Timur disajikan dalam tabel berikut.
        </p>
        <table class="data-table" id="frame">
              <thead class="thead" id=>
                <tr>
                  <th>NO</th>
                  <th>ID ANGGOTA</th>
                  <th>NPM</th>
                  <th>NAMA</th>
                  <th>JENIS KELAMIN</th>
                  <th>JURUSAN</th>
                  <th>ANGKATAN</th>
                  <th>STATUS</th>
                  <th>TANGGAL LAHIR</th>
                  <th>ALAMAT</th>
                </tr>
              </thead>
              <tbody>
              <?php
              include ('koneksi.php');
              $select = "SELECT * FROM anggota_ukki where status='Pasif';";
              $result = mysqli_query($conn, $select);
              if(!$result) {
                die ('SQL Error: ' . mysqli_error($conn));
                  };
              $no   = 1;
              $bulan  = array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
              if (((!mysqli_num_rows($result))) == 0) {
                while ($row = mysqli_fetch_assoc($result)) 
                  {
                    $tgl  = explode('-', $row['tgl_lahir']);
                    echo ('
                      <tr>
                        <td>'.$no.'</td>
                        <td>'.$row['id_anggota'].'</td>
                        <td>'.$row['npm'].'</td>
                        <td>'.$row['nama'].'</td>
                        <td>'.$row['jenis_kelamin'].'</td>
                        <td>'.$row['jurusan'].'</td>
                        <td>'.$row['angkatan'].'</td>
                        <td>'.$row['status'].'</td>
                        <td>'.$tgl[2] . ' ' . $bulan[(int)$tgl[1]] . ' '.$tgl[0].'</td>
                        <td>'.$row['alamat'].'</td>
                        </tr>');
                    $no++;
                  }
                  }
                  else {
                    echo ("<script>window.alert('Belum ada anggota pada daftar ini!!')</script>");
                   
                  };
                    ?>
                  </tbody>
                </table>
              </div>
</body>
</html>