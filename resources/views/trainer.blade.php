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
                <span>Professional</span> TRAINING
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium sapiente, consequatur dolor fugit
                at quo.
            </p>
        </section>
        <section class="cards-container">
            {{-- @foreach ($trainers as $trainer)
            <div class="card">
                <div class="image">
                    <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                </div>
                <div class="description">
                    <h3>{{ $trainer->first_name }} {{ $trainer->last_name }}</h3>
                    <p>{{ $trainer->slogan }}</p>
                    <p>{{ $trainer->skills }}</p>
                    <p>{{ $trainer->gender }}</p>
                </div>
            </div>
            @endforeach --}}
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
            {{-- <div class="card">
                <div class="image">
                    <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                </div>
                <div class="description">
                    <h3>Joe Persky</h3>
                    <p>Eat Sleep Conquer Repeat</p>
                    <p>Killer cobra</p>
                    <p>MALE</p>
                    <p class="social">
                        <a href=""><img src="{{ url('/images/icons/whatsapp.png') }}" alt=""></a>
                        <a href=""><img src="{{ url('/images/icons/facebook.png') }}" alt=""></a>
                        <a href=""><img src="{{ url('/images/icons/instagram.png') }}" alt=""></a>
                    </p>
                </div>
            </div> --}}

        </section>
        <hr>

    </main>
    <footer>

    </footer>

</body>

</html>
