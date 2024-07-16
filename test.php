<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="images/logo.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <?php
                $menuItems = [
                    'Home' => 'index.php',
                    'About' => 'about.php',
                    'Services' => 'services.php',
                    'Contact' => 'contact.php'
                ];

                foreach ($menuItems as $itemName => $itemLink) {
                    echo "<li><a href=\"$itemLink\">$itemName</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>
