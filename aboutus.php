<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="about_styles.css">
</head>

<body>

    <header>
        <?php include 'header.php'; ?>

    </header>


    <main>
        <h1>About Winny Cafe</h1>
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
            <p>Hello, I'm Vinnath Satharasinghe, the proud owner of Winny Cafe. My journey in the coffee industry began over a decade ago, driven by a passion for quality coffee and a dream to create a community space where everyone feels welcome.</p>
            <p>With a background in culinary arts and business management, I bring a unique blend of skills and experiences to Winny Cafe. My commitment to excellence has earned the cafe numerous awards and recognitions, and I continue to strive for the best in everything we do.</p>
            <p>When I'm not at the cafe, I enjoy exploring new coffee trends, attending industry events, and spending time with my family and friends. Thank you for being a part of the Winny Cafe community. I look forward to welcoming you and making your visit special.</p>
        </section>
    </main>


</body>

</html>


<?php include 'footer.php'; ?>