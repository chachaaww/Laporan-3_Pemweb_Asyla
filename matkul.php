<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Informasi Mata Kuliah Laboratorium</title>
</head>
<body>

<h2>Informasi Mata Kuliah Laboratorium</h2>

<p><b>Nama :</b> Asyla Salsabil Putri Kurniawan</p>
<p><b>NIM :</b> 202432069</p>

<form method="POST">

    <label><b>Nama Mata Kuliah :</b></label><br><br>

    <input
        type="text"
        name="matkul"
        placeholder="Contoh: Data Warehouse"
        required>

    <button type="submit">Cari</button>

</form>

<br>

<?php

if(isset($_POST['matkul'])){

    $input = strtolower(trim($_POST['matkul']));

    if($input == "data warehouse"){

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p><b>Laboratorium :</b> Information Retrieval Laboratory</p>
            <p><b>Nama Mata Kuliah :</b> Data Warehouse</p>
            <p><b>Kode :</b> DW001</p>
            <p><b>SKS :</b> 3 SKS</p>
            <p><b>Deskripsi :</b> Mata kuliah yang mempelajari konsep gudang data untuk mendukung analisis dan pengambilan keputusan.</p>

        </fieldset>";
    }

    elseif($input == "data mining"){

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p><b>Laboratorium :</b> Information Retrieval Laboratory</p>
            <p><b>Nama Mata Kuliah :</b> Data Mining</p>
            <p><b>Kode :</b> DM001</p>
            <p><b>SKS :</b> 3 SKS</p>
            <p><b>Deskripsi :</b> Mata kuliah yang mempelajari teknik pencarian pola dan pengetahuan dari data.</p>

        </fieldset>";
    }

    elseif($input == "pengantar big data"){

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p><b>Laboratorium :</b> Information Retrieval Laboratory</p>
            <p><b>Nama Mata Kuliah :</b> Pengantar Big Data</p>
            <p><b>Kode :</b> BD001</p>
            <p><b>SKS :</b> 3 SKS</p>
            <p><b>Deskripsi :</b> Mempelajari konsep dasar Big Data, karakteristik, dan pemanfaatannya dalam berbagai bidang.</p>

        </fieldset>";
    }

    elseif($input == "pemrograman mobile"){

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p><b>Laboratorium :</b> Information Retrieval Laboratory</p>
            <p><b>Nama Mata Kuliah :</b> Pemrograman Mobile</p>
            <p><b>Kode :</b> PM001</p>
            <p><b>SKS :</b> 3 SKS</p>
            <p><b>Deskripsi :</b> Mempelajari pengembangan aplikasi mobile berbasis Android maupun platform lainnya.</p>

        </fieldset>";
    }

    elseif($input == "pemrograman visual"){

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p><b>Laboratorium :</b> Software Engineering Laboratory</p>
            <p><b>Nama Mata Kuliah :</b> Pemrograman Visual</p>
            <p><b>Kode :</b> SEL101</p>
            <p><b>SKS :</b> 3 SKS</p>
            <p><b>Deskripsi :</b> Mempelajari pembuatan aplikasi desktop dengan antarmuka grafis.</p>

        </fieldset>";
    }

    elseif($input == "rekayasa perangkat lunak"){

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p><b>Laboratorium :</b> Software Engineering Laboratory</p>
            <p><b>Nama Mata Kuliah :</b> Rekayasa Perangkat Lunak</p>
            <p><b>Kode :</b> SEL102</p>
            <p><b>SKS :</b> 3 SKS</p>
            <p><b>Deskripsi :</b> Mempelajari metode pengembangan perangkat lunak yang terstruktur dan berkualitas.</p>

        </fieldset>";
    }

    elseif($input == "pemrograman web"){

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p><b>Laboratorium :</b> Software Engineering Laboratory</p>
            <p><b>Nama Mata Kuliah :</b> Pemrograman Web</p>
            <p><b>Kode :</b> SEL103</p>
            <p><b>SKS :</b> 3 SKS</p>
            <p><b>Deskripsi :</b> Mempelajari pengembangan aplikasi berbasis web mencakup HTML, CSS, PHP, JavaScript dan database.</p>

        </fieldset>";
    }

    elseif($input == "basis data"){

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p><b>Laboratorium :</b> Software Engineering Laboratory</p>
            <p><b>Nama Mata Kuliah :</b> Basis Data</p>
            <p><b>Kode :</b> SEL104</p>
            <p><b>SKS :</b> 3 SKS</p>
            <p><b>Deskripsi :</b> Mempelajari konsep perancangan, pengelolaan, dan implementasi database.</p>

        </fieldset>";
    }

    else{

        echo "
        <fieldset>
            <legend><b>Hasil Pencarian</b></legend>

            <p>Mata kuliah <b>'$input'</b> tidak ditemukan.</p>

        </fieldset>";
    }
}

?>

</body>
</html>