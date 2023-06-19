<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('/css/trainer.css') }}">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="{{ '/dashboard' }}">Home</a></li>
                <li><a href="{{ 'about' }}">About</a></li>
                <li><a href="{{ 'classes' }}">Classes</a></li>
                <li><a href="{{ 'trainer' }}">Trainer</a></li>
                <li><a href="{{ 'contact' }}">Contact</a></li>
                <li><a href="{{ 'membership' }}">Membership</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>WE DEFINE
                PROFESSIONAL TRAINING
            </h1>
            <p>
                Welcome to our Trainer Page at FITZONE Gym! We take pride in our team of highly skilled and dedicated
                trainers who are here to guide you on your fitness journey. Our trainers are not only experts in their
                respective fields, but they are also passionate about helping you reach your fitness goals. Whether
                you're aiming to lose weight, build strength, improve flexibility, or enhance athletic performance, our
                trainers have the knowledge and experience to design personalized workout programs tailored specifically
                to your needs. They will work closely with you to understand your goals, assess your current fitness
                level, and provide ongoing support and motivation to keep you on track. With their expertise and
                guidance, you can maximize your results, prevent injuries, and make the most out of your workouts. Our
                trainers are approachable, friendly, and committed to your success. So come meet our exceptional team
                and start your fitness journey with us today!
            </p>
        </section>
        <section class="cards-container">
           
            @foreach ($trainers as $trainer)
                <div class="card">
                    <div class="image">
                        <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                    </div>
                    <div class="description">
                        <h3>{{ $trainer->first_name }} {{ $trainer->last_name }}</h3>
                        <p>{{ $trainer->slogan }}</p>
                        <p>{{ $trainer->skills }}</p>
                        <p>{{ $trainer->gender }}</p>
                        <p class="social">
                            <a href=""><img src="{{ url('/images/icons/whatsapp.png') }}" alt=""></a>
                            <a href=""><img src="{{ url('/images/icons/facebook.png') }}" alt=""></a>
                            <a href=""><img src="{{ url('/images/icons/instagram.png') }}" alt=""></a>
                        </p>
                        
                    </div>
                </div>
            @endforeach
            
        </section>
        <hr>

    </main>
    <footer>

    </footer>

</body>

</html>
