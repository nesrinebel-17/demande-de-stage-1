<?php
session_start();


$host = "localhost";
$dbname = "nesrine";
$username = "root";
$password = "";

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    if (empty($email) || empty($password)) {
        echo "Tous les champs sont requis.";
        exit;
    }

    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['password_hash'] === $password) {
        
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        
        if ($user['role'] === 'entreprise') {
            header("Location: entreprise_dashboard.php");
        } elseif ($user['role'] === 'admin') {
            header("Location: admin_dashboard.php");
        } elseif ($user['role'] === 'condidats') {
            header("Location: condidat_dashboard.php");
        }
        exit;
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}
?>
