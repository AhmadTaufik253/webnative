<?php
class Produk{
    private $koneksi;
    public function __construct(){
        global $dbh; //instance obj dbkoneksi.php
        $this->koneksi = $dbh;
    }
    // member3 method CEUD
    public function dataProduk(){
        $sql = "SELECT produk.*, jenis_produk.nama as Kategori FROM produk INNER JOIN jenis_produk ON jenis_produk.id = produk.jenis_produk_id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getProduk($id){
        $sql = "SELECT produk.*, jenis_produk.nama as Kategori FROM produk INNER JOIN jenis_produk ON jenis_produk.id = produk.jenis_produk_id WHERE produk.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    // menambahkan upload foto
    public function simpan($data){
        $sql = "INSERT INTO produk(kode,nama,harga_beli,Harga_jual,stok,min_stok,jenis_produk_id,foto) VALUES (?,?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE produk SET kode=?,nama=?,harga_beli=?,Harga_jual=?,stok=?,min_stok=?,jenis_produk_id=?, foto=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}




?>