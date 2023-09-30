<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gym Website</title>
    <link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ url('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('/css/dash.css') }}">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="{{ '/dashboard' }}" class="active">Home</a></li>
                <li><a href="{{ 'about' }}">About</a></li>
                <li><a href="{{ 'classes' }}">Classes</a></li>
                <li><a href="{{ 'trainer' }}">Trainor</a></li>
                <li><a href="{{ 'contact' }}">Contact</a></li>
                <li><a href="{{ 'membership' }}">Membership</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h2>Welcome {{ $data->first_name }} !</h2>
                <h1>Fit <span>Zone</span> </h1>
                <p>Eat . Sleep . Conquer. Repeat</p>
                <a href="#" class="btn">Join Now</a>
            </div>


        </section>
        <section class="main-row">
            <div class="image">

            </div>
            <div class="description">
                <h3>Sign Up for a Class</h3>
                <p>
                    Welcome to our classes page at XYZ Gym! Our classes are designed to help you achieve your fitness
                    goals, no matter your age or fitness level. Whether you're a beginner looking to kickstart your
                    fitness journey or a seasoned athlete seeking new challenges, we have a wide range of classes to
                    cater to your needs. From high-energy cardio workouts that will get your heart pumping and calories
                    burning, to strength and conditioning sessions that will sculpt and tone your muscles, we offer a
                    variety of options to keep you motivated and engaged. Our experienced and certified instructors are
                    dedicated to creating a supportive and inclusive environment, ensuring that every participant feels
                    comfortable and confident throughout their fitness class experience. So why wait? Join us today and
                    take the first step towards a healthier, stronger, and happier you!
                </p>
                <button class="btn">Sign Up</button>
            </div>
        </section>
        <section class="main-row">
            <div class="image">

            </div>
            <div class="description">
                <h3>Get Your Membership Today</h3>
                <p>Welcome to our Membership Page at Fitzone Gym! We are thrilled to have you here and eager to assist you
                    in exploring our exclusive membership options. At XYZ Gym, we prioritize providing outstanding
                    customer service to ensure that your membership experience is seamless and enjoyable. Whether you
                    have inquiries regarding our diverse membership plans, pricing details, special offers, or any other
                    aspect of our gym, our knowledgeable staff is dedicated to guiding you through the process. You can
                    conveniently reach out to us through the contact form on this page, and we will promptly respond to
                    address your needs and provide the information you seek. If you prefer a more direct approach, feel
                    free to give us a call or visit us in person at our gym location. Our friendly reception team will
                    be delighted to assist you, answer your questions, and help you select the membership option that
                    best aligns with your fitness goals. Your feedback is incredibly valuable to us, so if you have any
                    suggestions or comments about our membership services, we encourage you to share them with us. At
                    XYZ Gym, we are committed to delivering the finest fitness experience possible, and we eagerly
                    anticipate welcoming you to our vibrant community of health enthusiasts. Join us today and embark on
                    a remarkable fitness journey tailored to your needs!</p>
                <button class="btn">Join Us</button>
            </div>
        </section>
        
        <section class="separator">
            <h1>Join Us and Transform Your Body and Mind</h1>
        </section>
        
        <section class="extra">
            <div class="image">
                <video autoplay loop>
                    <source src="https://v4.cdnpk.net/videvo_files/video/free/video0461/large_watermarked/_import_60d714ac7dd357.38440934_FPpreview.mp4" type="">
                </video>
            </div>
            <div class="desc">
                <h3>Motivation</h3>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font. I’m a great place for you to
                    tell a story and let your users know a little more about you</p>
            </div>
        </section>
        <section class="extra">
            <div class="desc">
                <h3>Results</h3>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font. I’m a great place for you to
                    tell a story and let your users know a little more about you.</p>
            </div>
            <div class="image">
               <div class="pic"></div>
            </div>
        </section>
        <section class="extra">
            <div class="image">
                <video autoplay loop>
                    <source src="/videos/test.mp4" type="">
                </video>
            </div>
            <div class="desc">
                <h3>Community</h3>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font. I’m a great place for you to
                    tell a story and let your users know a little more about you</p>
            </div>
        </section>
    </main>
    {{-- <video  autoplay loop>
    <source src="https://v4.cdnpk.net/videvo_files/video/free/video0456/large_watermarked/_import_60b09a3c455a87.35279282_FPpreview.mp4" type="">
</video> --}}
    {{-- <section class="hero-section">
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
    </section> --}}

    <footer>
        <p>&copy; 2023 Absolute Fitness Gym . All rights reserved.</p>
    </footer>
</body>


</html>
