<?php
include_once 'koneksi.php';
include_once 'models/Produk.php';
// include_once 'product_form.php';

// step pertama yaitu menangkap requeest form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$stok = $_POST['stok'];
$min_stok = $_POST['min_stok'];
$jenis_produk_id = $_POST['jenis_produk_id'];

// menambahkan untuk upload foto produk
    $foto = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //check file yang di upload
    $extensiFileValid = ['jpg','jpeg','png'];
    $extensifile = explode('.',$foto);
    $extensifile = strtolower(end($extensifile));

    // cheeck format
    if(!in_array($extensifile, $extensiFileValid)){
        // pesan gagal
        echo "<script> alert(tidak valid) </script>";
        die();
    }

    // check ukuran file 2 mb
    if($ukuranFile > 2048000){
        // pesan gagal
        // pesan gagal
        echo "<script> alert(tidak valid) </script>";
        die();
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensifile;

    // pindahkan ke folder local
    move_uploaded_file($tmpName, 'assets/img/'. $namaFileBaru);



// menangkap form diatas dijadikan array
$data = [
    $kode,
    $nama,
    $harga_beli,
    $harga_jual,
    $stok,
    $min_stok,
    $jenis_produk_id,
    $namaFileBaru,
];
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':$model->simpan($data);
    break;
    case 'ubah' :
        $data[] = $_POST['idx']; $model->ubah($data);
    break;
    case 'hapus':
        unset($data); $model->hapus($_POST['idx']); break;
    default:
        header('Location:index.php?url=product');
     break;
}
header('Location:index.php?url=product');
?>