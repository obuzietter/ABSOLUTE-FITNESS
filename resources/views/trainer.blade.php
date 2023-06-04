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
                <li><a href="{{ '/dashboard' }}" class="active">Home</a></li>
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
        <section>
               <div class="card">
                <div class="image">
                    <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                </div>
                <div class="description">
                    <h3>{{$data[0]->first_name}} {{$data[0]->last_name}}</h3>
                    <p>{{$data[0]->slogan}}</p>
                    <p>{{$data[0]->skills}}</p>
                    <p>{{$data[0]->gender}}</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                </div>
                <div class="description">
                    <h3>{{$data[1]->first_name}} {{$data[1]->last_name}}</h3>
                    <p>{{$data[1]->slogan}}</p>
                    <p>{{$data[1]->skills}}</p>
                    <p>{{$data[1]->gender}}</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                </div>
                <div class="description">
                    <h3>{{$data[2]->first_name}} {{$data[2]->last_name}}</h3>
                    <p>{{$data[2]->slogan}}</p>
                    <p>{{$data[2]->skills}}</p>
                    <p>{{$data[2]->gender}}</p>
                </div>
            </div>
         
        </section>
        <hr>
        <section>
            <div class="card">
                <div class="image">
                    <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                </div>
                <div class="description">
                    <h3>{{$data[3]->first_name}} {{$data[3]->last_name}}</h3>
                    <p>{{$data[3]->slogan}}</p>
                    <p>{{$data[3]->skills}}</p>
                    <p>{{$data[3]->gender}}</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                </div>
                <div class="description">
                    <h3>{{$data[4]->first_name}} {{$data[4]->last_name}}</h3>
                    <p>{{$data[4]->slogan}}</p>
                    <p>{{$data[4]->skills}}</p>
                    <p>{{$data[4]->gender}}</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="{{ url('/images/trainer.jpg') }}" alt="Trainer 1">
                </div>
                <div class="description">
                    <h3>{{$data[5]->first_name}} {{$data[5]->last_name}}</h3>
                    <p>{{$data[5]->slogan}}</p>
                    <p>{{$data[5]->skills}}</p>
                    <p>{{$data[5]->gender}}</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
<ul>
    @foreach ($data as $trainer)
        <li>{{$trainer->email}}</li>
    @endforeach
</ul>
    </footer>

</body>

</html>
