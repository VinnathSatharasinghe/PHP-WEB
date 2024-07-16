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

    <main>
        <section class="hero">
            <h1>Welcome to our website</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut felis vel est semper ultricies vel at arcu. Donec vel iaculis erat, sed bibendum arcu. Donec vel libero non nunc semper fermentum.</p>
        </section>
    </main>
    
</body>
