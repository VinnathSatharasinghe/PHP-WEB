<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homee.css">
</head>

<body>
    <header>
        <?php include 'header.php'; ?> 

    </header>


    <main>
        <section class="hero">
            <h1>Welcome to Winny Cafe</h1>
            <p>Welcome to Winny Cafe, where coffee meets community. Discover our featured items and promotions below.</p>
            <div class="featured-items">
                <?php
                // Sample data for featured items (could be fetched from a database)
                $featuredItems = [
                    [
                        'name' => 'Espresso',
                        'description' => 'A shot of rich espresso coffee.',
                        'price' => '$2.50',
                        'image' => 'images/espresso.jpg'
                    ],
                    [
                        'name' => 'Cappuccino',
                        'description' => 'Creamy espresso with steamed milk foam.',
                        'price' => '$3.50',
                        'image' => 'images/cappuccino.jpg'
                    ],
                    [
                        'name' => 'Latte',
                        'description' => 'Smooth espresso with steamed milk and a light layer of foam.',
                        'price' => '$3.00',
                        'image' => 'images/latte.jpg'
                    ],
                    [
                        'name' => 'Mocha',
                        'description' => 'Espresso combined with chocolate syrup, steamed milk, and topped with whipped cream.',
                        'price' => '$4.00',
                        'image' => 'images/mocha.jpg'
                    ],
                    [
                        'name' => 'Americano',
                        'description' => 'Espresso with hot water, creating a strong coffee with a lighter body.',
                        'price' => '$2.75',
                        'image' => 'images/americano.jpg'
                    ],
                    [
                        'name' => 'Macchiato',
                        'description' => 'Espresso with a small amount of steamed milk, creating a bold coffee flavor.',
                        'price' => '$3.25',
                        'image' => 'images/macchiato.jpg'
                    ]
                ];

                foreach ($featuredItems as $item) {
                    echo '<div class="item">';
                    echo '<img src="' . $item['image'] . '" alt="' . $item['name'] . '">';
                    echo '<div class="item-info">';
                    echo '<h3>' . $item['name'] . '</h3>';
                    echo '<p>' . $item['description'] . '</p>';
                    echo '<p class="price">' . $item['price'] . '</p>';
                    echo '</div>'; // close item-info
                    echo '</div>'; // close item
                }
                ?>
            </div>
        </section>

        <section class="cafe-details">
            <h2>Our Story</h2>
            <img src="images/cafe_interior.jpg" alt="Winny Cafe Interior">
            <p>Welcome to Winny Cafe, a place where passion for coffee meets a love for community. Established in <?php echo date('Y') - 10; ?>, Winny Cafe has grown from a small neighborhood coffee shop into a beloved gathering spot for coffee enthusiasts and casual drinkers alike.</p>
            <p>Our journey began with a simple goal: to create a space where people could come together to enjoy great coffee and even better company. Over the years, we have expanded our menu, improved our space, and built a loyal customer base who share our love for quality coffee and a welcoming atmosphere.</p>
        </section>

        <section class="mission-vision">
            <h2>Our Mission and Vision</h2>
            <p>At Winny Cafe, our mission is to provide an exceptional coffee experience while fostering a sense of community. We believe that coffee is more than just a beverage; it's a way to bring people together, to inspire conversations, and to create lasting memories.</p>
            <p>Our vision is to continue growing as a community hub, where everyone feels welcome and valued. We aim to be a place where people can relax, work, and connect, all while enjoying the finest coffee and pastries.</p>
        </section>

        <section class="owner-details">
            <h2>Meet the Owner</h2>
            <img src="images/owner.jpg" alt="Cafe Owner">
            <p>Hello, I'm [Owner's Name], the proud owner of Winny Cafe. My journey in the coffee industry began over a decade ago, driven by a passion for quality coffee and a dream to create a community space where everyone feels welcome.</p>
            <p>With a background in culinary arts and business management, I bring a unique blend of skills and experiences to Winny Cafe. My commitment to excellence has earned the cafe numerous awards and recognitions, and I continue to strive for the best in everything we do.</p>
            <p>When I'm not at the cafe, I enjoy exploring new coffee trends, attending industry events, and spending time with my family and friends. Thank you for being a part of the Winny Cafe community. I look forward to welcoming you and making your visit special.</p>
        </section>
    </main>

</body>

</html>

<?php include 'footer.php'; ?>