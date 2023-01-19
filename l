<?php

        $conn = mysqli_connect("localhost","root","","rsashari");
        if(!empty($_POST)){
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jk = $_POST["jk"];
        $umur = $_POST["umur"];
        $nomer_hp = $_POST["nomer_hp"];
        
            echo "nama \t:$nama". "<br>" ;
            echo "alamat \t:$alamat"."<br>" ;
            echo "jk \t:$jk"."<br>";
            echo "umur \t:$umur"."<br>";
            echo "nomer_hp \t:$nomer_hp" . "<br>";

        $sql = "INSERT INTO pendaftaran(nama,alamat,jk,umur,nomer_hp)
        VALUES ('$nama','$alamat','$jk','$umur',$nomer_hp)";

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();
        }else{
            echo "varivale kosong";
        }
    ?>