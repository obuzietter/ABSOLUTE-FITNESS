<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('/css/about.css') }}">
    <title>Document</title>
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
            <h1>WELCOME TO FITZONE</h1>
            <p>Welcome to our fitness center, where we are dedicated to transforming lives through the power of fitness.
                With a passion for health and wellness, our team is committed to providing a dynamic and supportive
                environment that inspires individuals to reach their full potential. From our top-notch facilities to
                our experienced trainers, we strive to create an inclusive community that fosters growth, challenges
                limits, and celebrates achievements. Whether you're a seasoned fitness enthusiast or just starting your
                fitness journey, join us as we embark on a path of strength, endurance, and personal transformation.</p>
        </section>
        <section class="about-info">
            <div class="cards">
                <div class="card">
                    <h2>Welcome to Our Fitness Center</h2>
                    <hr>
                    <p>
                        At our gym, we believe in empowering individuals to achieve their fitness goals and lead a
                        healthier lifestyle. With state-of-the-art facilities and a team of dedicated fitness experts,
                        we provide a supportive environment where everyone can thrive. Whether you're a beginner taking
                        your first steps into fitness or an experienced athlete aiming to reach new heights, we have the
                        resources and expertise to assist you on your journey.
                    </p>
                </div>
                <div class="image">
                    {{-- background image goes here --}}
                </div>
            </div>
        </section>
        <section class="extras">
            <div class="extra">
                <div class="image">
                    <img src="{{ url('/images/success.jpg') }}" alt="">
                </div>
                <div class="description">
                    <h2>Our Commitment to Excellence</h2>
                    <p>
                        We are committed to delivering excellence in every aspect of our fitness center. From our
                        cutting-edge equipment to our diverse range of fitness classes, we strive to offer a
                        comprehensive fitness experience that caters to all ages and fitness levels. Our team of
                        certified trainers is here to guide you, providing personalized workout programs tailored to
                        your specific needs and goals.
                    </p>
                </div>
            </div>
            <div class="extra">
                <div class="image">
                    <img src="{{ url('/images/facilities.jpg') }}" alt="">
                </div>
                <div class="description">
                    <h2>Unparalleled Facilities</h2>
                    <p>Step into our gym, and you'll be greeted with a modern and well-equipped space designed to
                        enhance your workout experience. We have a wide array of cardio machines, weightlifting
                        equipment, and strength training tools to challenge and inspire you. Our spacious group fitness
                        studios host a variety of classes, including yoga, spinning, high-intensity interval training
                        (HIIT), and more, led by experienced instructors who will motivate you to push your limits.</p>
                </div>
            </div>
            <div class="extra">
                <div class="image">
                    <img src="{{ url('/images/community.jpg') }}" alt="">
                </div>
                <div class="description">
                    <h2>Community and Support</h2>
                    <p>At our fitness center, we foster a strong sense of community and support. Joining our gym means
                        becoming part of a fitness family that encourages and uplifts one another. Our group fitness
                        classes not only provide an opportunity to work out together but also to connect with
                        like-minded individuals who share a passion for fitness. We organize regular social events,
                        challenges, and workshops to create a welcoming atmosphere where you can meet new friends and
                        find encouragement in your fitness journey.</p>
                </div>
            </div>
            <div class="extra">
                <div class="image">
                    <img src="{{ url('/images/locker.jpg') }}" alt="">
                </div>
                <div class="description">
                    <h2>Additional Amenities</h2>
                    <p>In addition to our fitness facilities, we offer convenient amenities to enhance your overall
                        experience. Our locker rooms are equipped with showers, saunas, and changing areas for your
                        comfort and convenience. We also have a smoothie bar where you can refuel with delicious and
                        nutritious post-workout snacks and beverages.</p>
                </div>

            </div>
        </section>
        <section class="additional">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <h2>Begin Your Fitness Journey Today</h2>
                            <p>Whether you're looking to lose weight, build strength, increase flexibility, or simply improve your
                                overall well-being, we are here to support you. Visit our gym today and discover the difference that
                                a dedicated fitness center can make in helping you achieve your goals. Our friendly staff will be
                                delighted to provide a tour, answer any questions you may have, and help you get started on your
                                fitness journey. Let's embark on this transformative adventure together!</p>
                        </div>
                        <div class="card-back">
                            <p><a href="{{ 'classes' }}">TRY NOW</a></p>
                        </div>
                    </div>
                </div>


        </section>
    </main>
    <footer>

    </footer>

</body>

</html>
