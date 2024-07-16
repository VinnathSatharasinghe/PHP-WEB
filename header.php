<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winny Cafe</title>


    <style>
        
        .navbar {
            
            background-color: #333;
            color: #fff;
            padding: 10px;
            margin-left: 100px;
            width: 60%;
            top: 10px; 
            z-index: 1000;
            transition: top 0.3s ease-in-out; 
            text-align: center;
            
        }

        .logo img {
            height: 40px;
            margin-left: 20px;
        }

        .nav-links {  
            display: flex;
            justify-content: flex-end;
            margin-right: -420px;
            
            
        } 

        .nav-links li {
            margin-left: 20px;
            list-style: none;
            
        }

        .nav-links a {
            color: #fff;   
            text-decoration: none;
            font-size: 16px;
            /* padding: 10px; */
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #555;
            
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>


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
                    'Home' => 'home.php',
                    'About' => 'aboutus.php',
                    'Menu' => 'menu.php',
                    'Specials' => 'specials.php',
                    'Contact' => 'contact.php'
                ];

                foreach ($menuItems as $itemName => $itemLink) {
                    echo "<li><a href=\"$itemLink\">$itemName</a></li>";
                }
                ?>
                <li><a href="#" class="button">Order Now</a></li>
            </ul>
        </nav>
    </header>
