<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stages</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background: #f8f8f8;
        }

        /* MENU LATÉRAL */
        .sidebar {
            width: 250px;
            background:rgb(142, 159, 192);
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            height: 100%;
        }

        .sidebar h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .menu-item {
            font-size: 16px;
            color: #333;
            cursor: pointer;
            padding: 8px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .menu-item:hover {
            background:rgb(20, 24, 60);
        }

        .menu-item input {
            cursor: pointer;
        }

        /* CONTENU PRINCIPAL */
        .main-content {
            flex: 1;
            padding: 20px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-box {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .search-box input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 250px;
        }

        .search-box button {
            background: blue;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .welcome-box {
            background: black;
            color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 18px;
        }

        .add-button {
            background: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- MENU LATÉRAL -->
    <div class="sidebar">
        <h2>GESTION DES STAGES</h2>
        <div class="menu-item">✅ Ajouter un stage</div>
        <div class="menu-item">📁 Votre stage</div>
        <div class="menu-item">
            <input type="checkbox" checked> Déposer le rapport
        </div>
    </div>

    <!-- CONTENU PRINCIPAL -->
    <div class="main-content">
        <div class="top-bar">
            <div class="search-box">
                <input type="text" placeholder="Search for datas & reports...">
                <button>🔍</button>
            </div>
            <a href="#" class="add-button">+ AJOUTER UN STAGE</a>
        </div>

        <div class="welcome-box">
            <?php echo "welcome!"; ?>
        </div>
    </div>

</body>
</html>
