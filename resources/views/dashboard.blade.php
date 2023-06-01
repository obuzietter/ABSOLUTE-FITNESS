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
            <td> {{ $data->name }} </td>
            <td> {{ $data->email }} </td>
            <td> <a href="/logout"> Logout </a> </td>
        </tr>
    </tbody>
</table> -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gym Website</title>
    <link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{url('/css/nav.css')}}">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="{{'/dashboard'}}" class="active">Home</a></li>
                <li><a href="{{'about'}}">About</a></li>
                <li><a href="{{'classes'}}">Classes</a></li>
                <li><a href="{{'trainer'}}">Trainor</a></li>
                <li><a href="{{'contact'}}">Contact</a></li>
                <li><a href="{{'membership'}}">Membership</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero-section">
        <div class="hero-content">
            <h2>Welcome {{$data->first_name}} !</h2>
            <h1>Fit <span>Zone</span> </h1>
            <p>Eat . Sleep . Conquer. Repeat</p>
            <a href="#" class="btn">Join Now</a>
        </div>
    </section>
    <section id="classes-section">
        <h2>Trainers</h2>
        <hr>
        <div class="cards">
            <div class="class-card">
                <h3 class="card-d">Sienna Stone</h3>

            </div>
            <div class="cards">
                <div class="class-card">
                    <h3 class="card-d">Sienna Stone</h3>

                </div>
                <div class="cards">
                    <div class="class-card">
                        <h3 class="card-d">Sienna Stone</h3>

                    </div>


                </div>
    </section>

    <section class="membership">
        <h2>Get Your Membership</h2>
        <hr>
        <div class="packages">
        <div class="package">
            <img src="/images/rope.jpg" alt="Gym Image 1">
            <span>
                <h3>Platinum</h3>
                <p>Our Platinum Membership Package offers the ultimate gym experience for fitness enthusiasts. Enjoy unlimited access to our state-of-the-art facilities, including the latest fitness equipment, group classes, and premium amenities. Benefit from personalized training sessions with our expert trainers, access to exclusive workshops and events, and priority scheduling for classes. This all-inclusive package is designed to elevate your fitness journey to the next level.</p>
            </span>
        </div>
        <div class="package">
            <img src="/images/rope.jpg" alt="Gym Image 1">
        </div>
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
