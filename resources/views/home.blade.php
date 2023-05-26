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
   <link rel="stylesheet" href="{{url('/css/home.css')}}">
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
            <h1>Fit <span>Zone</span> </h1>
            <p>Eat . Sleep . Conquer. Repeat</p>
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
