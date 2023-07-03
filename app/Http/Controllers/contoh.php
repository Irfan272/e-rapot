Melakukan login sistem {
    Masuk ke halaman login lalu masukan email dan password.
    if ((email && password) == true){
        if(role == 'IT Support'){
            tampil halaman dashboard IT Support
        }else if(role == 'Penanggung Jawab'){
            tampil halaman dashboard Penanggung Jawab
        }else if(role == 'Manager Maintenance'){
            tampil halaman dashboard Manager Maintenance
        }else if(role == 'Teknisi'){
            tampil halaman dashboard Teknisi
        }else {
            tampil halaman login
        }
    }
}


Melakukan dashboard menu {
    if(role == 'IT Support'){
           tampil menu = dashboard, kelola data divisi, kelola data akun, kelola data peralatann, logout
        }else if(role == 'Penanggung Jawab'){
            tampil menu = dashboard, permintaan perbaikan, logout
        }else if(role == 'Manager Maintenance'){
            tampil menu = dashboard, approval perbaikan, perawatan rutin, laporan perbaikan, laporan perawatan, kartu riwayat peralatan, logout
        }else if(role == 'Teknisi'){
            tampil menu = dashboard, melakukan perbaikan, melakukan perawatan, logout
        }
}


Melakukan kelola data approval perbaikan {
    melakukan input data{
        pilih tambah data approval perbaikan
            tampil form input
            input data, klik simpan
            if (data.isEmpty()){
                data tidak boleh kosong
            }else{
                data tersimpan dan muncul pesan sukses
            }
    }  
    melakukan edit data{
        pilih edit data approval perbaikan
           menampilkan form edit yang berisi data sebelumnya
           ubah data sebelumnya, klik edit
           if (data.isEmpty()){
                data tidak boleh kosong
            }else{
                data diubah dan muncul pesan sukses
            }
    } 
    melakukan hapus data{
        pilih data approval perbaikan yang akan dihapus
        Pilih icon hapus
        Menampilkan pesan konfirmasi hapus
        if(setuju){
            Data dihapus dan muncul pesan sukses
        }else{
            kembali ke menu data approval perbaikan
        }
    }
}

Melakukan kelola data penjadwalan perawatan {
    melakukan input data{
        pilih tambah data penjadwalan perawatan
            tampil form input
            input data, klik simpan
            if (data.isEmpty()){
                data tidak boleh kosong
            }else{
                data tersimpan dan muncul pesan sukses
            }
    }  
    melakukan edit data{
        pilih edit data penjadwalan perawatan
           menampilkan form edit yang berisi data sebelumnya
           ubah data sebelumnya, klik edit
           if (data.isEmpty()){
                data tidak boleh kosong
            }else{
                data diubah dan muncul pesan sukses
            }
    } 
    melakukan hapus data{
        pilih data penjadwalan perawatan yang akan dihapus
        Pilih icon hapus
        Menampilkan pesan konfirmasi hapus
        if(setuju){
            Data dihapus dan muncul pesan sukses
        }else{
            kembali ke menu data penjadwalan perawatan
        }
    }
}

Melakukan kelola laporan {
    melakukan print laporan perbaikan{
        pilih data laporan perbaikan 
            tampil halaman data laporan perbaikan
            if (klik print){
                data laporan perbaikan di print
            }else{
                menampilkan data laporan perbaikan
            }
    }  
    melakukan print laporan  perawatan{
        pilih data laporan  perawatan 
            tampil halaman data laporan  perawatan
            if (klik print){
                data laporan  perawatan di print
            }else{
                menampilkan data laporan perawatan
            }
    } 
    melakukan print kartu riwayat peralatan{
        pilih data kartu riwayat peralatan 
            tampil halaman data kartu riwayat peralatan
            if (klik print){
                data kartu riwayat peralatan di print
            }else{
                menampilkan data kartu riwayat peralatan
            }
    }  
}