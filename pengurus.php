<!DOCTYPE html>
<?php 
include('index.php');
?>
<table width="980">
    <tr>
        <td>
            <div>
                <h2 class="heading">Daftar Pengurus UKKI UPN "Veteran" Jawa Timur tahun 2019/2020</h2>
                </div>        
        </td>
    </tr>
</table>
<table class="data-table" id="frame" width="980">
          <thead class="thead">   
              <?php
              include ('koneksi.php');
              $select = "SELECT * FROM pengurus;";
              $result = mysqli_query($conn, $select);
              if(!$result) {
                die ('SQL Error: ' . mysqli_error($conn));
                  }
              else if (mysqli_num_rows($result) > 0) {
              $no   = 1;
              $bulan  = array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
              ?>
                <tr>
                  <th>NO</th>
                  <th>ID ANGGOTA</th>
                  <th>NPM</th>
                  <th>NAMA</th>
                  <th>NAMA DEPARTEMEN</th>
                  <th>JURUSAN</th>
                  <th>ANGKATAN</th>
                  <th>TANGGAL LAHIR</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) 
                  {
                    $tgl  = explode('-', $row['tgl_lahir']);
                    echo '
                      <tr>
                        <td>'.$no.'</td>
                        <td>'.$row['id_anggota'].'</td>
                        <td>'.$row['npm'].'</td>
                        <td>'.$row['nama'].'</td>
                        <td>'.$row['nama_departemen'].'</td>
                        <td>'.$row['jurusan'].'</td>
                        <td>'.$row['angkatan'].'</td>
                        <td>'.$tgl[2] . ' ' . $bulan[(int)$tgl[1]] . ' ' . $tgl[0] . '</td>
                        </tr>';
                    $no++;
                  };
                   }else {
                        echo '<script>window.alert("Data Pengurus belum terisi");</script>';
                        };
                    ?>
                  </tbody>
                </table>
              </div>
</body>
</html>