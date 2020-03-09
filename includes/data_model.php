<?php 
    include 'myfirebase.php';

    if(isset($_POST['signin'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if($username != null) {
            if($password != null) {
                $reference = 'Admin/'.$username;
                $checkdata = $database->getReference($reference)->getValue();
                if($checkdata != null) {
                    if($password != null) 
                    {

                        //ambil data
                        $password_admin_saat_ini = $checkdata['password'];
                        
                        if($password == $password_admin_saat_ini) {
                            //jawaban benar
                            session_start();
                            $_SESSION['username'] = $username;
                            header('location: ../dashboard.php');
                        }
                        else {
                            echo 'password salah!';
                        }
                    }
                    else {
                        echo 'password salah!';
                    }
                }
                else {
                    echo 'data tidak ada!';
                }
            }
        }
    }
    else if (isset($_POST['updateWisata'])) {

        $nama_wisata_url = htmlspecialchars($_POST['nama_wisata_url']);

        $nama_wisata = htmlspecialchars($_POST['nama_wisata_url']);
        $lokasi = htmlspecialchars($_POST['lokasi']);
        $data_wisata = htmlspecialchars($_POST['data_wisata']);
        $harga_tiket = htmlspecialchars($_POST['harga_tiket']);
        $ketentuan = htmlspecialchars($_POST['ketentuan']);
        $short_desc = htmlspecialchars($_POST['short_desc']);
        $is_wifi = htmlspecialchars($_POST['is_wifi']);
        $is_photo_spot = htmlspecialchars($_POST['is_photo_spot']);
        $is_festival = htmlspecialchars($_POST['is_festival']);

        $reference = 'Wisata/'.$nama_wisata_url;

        $data = [
            'nama_wisata' =>$nama_wisata,
            'lokasi' => $lokasi,
            'data_wisata' => $data_wisata,

            'harga_tiket' => $harga_tiket,
            'ketentuan' => $ketentuan,
            'short_desc' => $short_desc,

            'is_wifi' => $is_wifi,
            'is_photo_spot' => $is_photo_spot,
            'is_festival' => $is_festival
        ];

        // upload ke server
        $pushData = $database->getReference($reference)->update($data);

        header('location: ../wisata.php');
    }

    else if (isset($_POST['updateProfile'])) {

        $username_url = htmlspecialchars($_POST['username']);

        $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
        $email_address = htmlspecialchars($_POST['email_address']);
        $password = htmlspecialchars($_POST['password']);
        $bio = htmlspecialchars($_POST['bio']);

        $reference = 'Users/'.$username_url;

        $data = [
            'nama_lengkap' =>$nama_lengkap,
            'email_address' => $email_address,
            'password' => $password,
            'bio' => $bio
        ];

        // upload ke server
        $pushData = $database->getReference($reference)->update($data);

        // lempar kepada costumer.php
        header('location: ../customer.php');
    }
    
?>