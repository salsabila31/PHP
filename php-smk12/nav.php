<nav>
    <ul>
        <li>Kontak</li>
        <li>Sejarah</li>
        <li>Jurusan</li>
    </ul>
</nav>

<?php 
    
    if (isset($_POST['kirim'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        echo $email;
        echo '<br>';
        echo $password;
    }
    
?>