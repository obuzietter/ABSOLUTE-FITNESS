<!-- <h1> WELCOME TO YOUR DASHBOARD </h1>
<hr>
<table>
    <thead>
        <th>Full Name</th>
        <th>Email</th>
        <th>Logout</th>
    </thead>
    <tbody>
        <tr>
            <td> {{$data->name}} </td>
            <td> {{$data->email}} </td>
            <td> <a href="/logout"> Logout </a> </td>
        </tr>
    </tbody>
</table> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gym Website</title>
    <style>


        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header */
        header {
            background-color: #333;
            padding: 10px;
            color: #fff;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            display: inline;
            margin-right: 10px;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        .navbar ul li a.active {
            font-weight: bold;
        }

        /* Hero Section */
        #hero-section {
            background-image: url(hero_bg.jpg);
            background-size: cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .hero-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .hero-content h1 {
            font-size: 36px;
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #555;
        }

        /* Classes Section */
        #classes-section {
            background-color: #f2f2f2;
            padding: 20px;
        }

        .class-card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .class-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* Gallery Section */
        #gallery-section {
            background-color: #fff;
            padding: 20px;
        }

        .image-card {
            margin-bottom: 20px;
        }

        .image-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /* Contact Section */
        #contact-section {
            background-color: #f2f2f2;
            padding: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #555;
        }

        /* Footer */
        footer {
            background-color: #333;
            padding: 10px;
            color: #fff;
            text-align: center;
        }
    


</style>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero-section">
        <div class="hero-content">
            <h1>Welcome to Our Gym</h1>
            <p>Get fit and stay healthy with our state-of-the-art facilities.</p>
            <a href="#" class="btn">Join Now</a>
        </div>
    </section>

    <section id="classes-section">
        <h2>Our Classes</h2>
        <div class="class-card">
            <img src="gym_class1.jpg" alt="Class 1">
            <h3>Class 1</h3>
            <p>Description of Class 1</p>
            <a href="#" class="btn">Learn More</a>
        </div>
        <div class="class-card">
            <img src="gym_class2.jpg" alt="Class 2">
            <h3>Class 2</h3>
            <p>Description of Class 2</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>

    <section id="gallery-section">
        <h2>Photo Gallery</h2>
        <div class="image-card">
            <img src="gym_image1.jpg" alt="Gym Image 1">
        </div>
        <div class="image-card">
            <img src="gym_image2.jpg" alt="Gym Image 2">
        </div>
        <div class="image-card">
            <img src="gym_image3.jpg" alt="Gym Image 3">
        </div>
    </section>

    <section id="contact-section">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Absolute Fitness Gym . All rights reserved.</p>
    </footer>
</body>
</html>
