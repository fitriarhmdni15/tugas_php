<!DOCTYPE html>
<html>
    <body>
        <h1>SELAMAT DATANG!</h1>
        <h4>Terim kasih telah bergabung di Website Kami. Media Belajar kita bersama!</h4>

        <?php
    // Tangkap data dari formulir 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'] ?? "Tidak teridentifikasi";
    $nationality = $_POST['country'];
    $language = $_POST['bahasa'] ?? "Tidak teridentifikasi";
    $bio = $_POST['komentar']; 
      
    // menampilkan hasil
    echo "<h2>Hasil Pengisian Formuir:</h2>";
    echo "<p>Nama: $firstname $lastname </p>";
    echo "<p>Gender: $gender </P>";
    echo "<p>Nationality: $nationality </P>";
    echo "<p>language: </p>" . (is_array($language) ? implode(", ", $language) : $language);
    echo "<p>Bio: $bio </p>";
?>
    </body>
</html>
