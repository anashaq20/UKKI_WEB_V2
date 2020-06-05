<?php  
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
    include('koneksi.php');
    $id_anggota = $_POST['id_anggota'];
    //cek apa pengurus adalah anggota aktif
    $sqlcheck = "select id_anggota from anggota_ukki where ((status='Aktif') AND (id_anggota='$id_anggota'))";
    $querycheck = mysqli_query($conn,$sqlcheck);
    if($querycheck){
    // ambil data dari formulir
    $id_anggota = $_POST['id_anggota'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $dep = $_POST['departemen'];
    $jurusan = $_POST['jurusan'];    
    $angkatan = $_POST['angkatan'];
    $tgl = $_POST['lahir'];
    $tanggal = date('Y-m-d', strtotime($tgl));
    $alamat = $_POST['alamat'];
    // buat query
    $sql = "INSERT INTO pengurus VALUES ('$id_anggota', '$npm', '$nama', '$dep', '$jurusan', '$angkatan', '$tanggal', '$alamat')";
    $query = mysqli_query($conn, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.html
        echo "<script>window.alert('Selamat, Anda telah berhasil mendaftar!!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // header('Location: index.html');
        echo "<script>window.alert('Maaf, Anda gagal mendaftar!!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=daftar.php'>";
    };
    } else { 
        echo "<script>window.alert('Maaf anda tidak dapat mengisi daftar ini, silahkan mengisi form pendaftaran anggota aktif terlebih dahulu');</script>";
        echo "<meta http-equiv='refresh' content='0; url=daftar.php'>";
    };
}
    else {
    die("Akses tidak dapat diberkan");
    }
?>