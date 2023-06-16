<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('/css/classes.css') }}">
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
            <h1>Our Classes</h1>
            <p>Welcome to our classes page at XYZ Gym! Our classes are designed to help you achieve your fitness goals, no matter your age or fitness level. Whether you're a beginner looking to kickstart your fitness journey or a seasoned athlete seeking new challenges, we have a wide range of classes to cater to your needs. From high-energy cardio workouts that will get your heart pumping and calories burning, to strength and conditioning sessions that will sculpt and tone your muscles, we offer a variety of options to keep you motivated and engaged. Our experienced and certified instructors are dedicated to creating a supportive and inclusive environment, ensuring that every participant feels comfortable and confident throughout their fitness class experience. So why wait? Join us today and take the first step towards a healthier, stronger, and happier you!</p>
        </section>
        <section class="sub-message">
            @if (Session::has('success'))
                <div class="success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="fail">{{ Session::get('fail') }}</div>
            @endif
        </section>
        <hr>
        {{-- <section>
            @foreach ($classes as $class)
                <form action="/book" method="POST">
                    @csrf
                    <input type="text" name="first_name" id="" value="{{ $data->first_name }}" hidden>
                    <input type="text" name="last_name" id="" value="{{ $data->last_name }}" hidden>
                    <input type="text" name="email" id="" value="{{ $data->email }}" hidden>
                    <input type="text" name="class_name" id="" value="{{ $class->class_name }}" hidden>



                    <div class="image">
                        <img src="{{ url('/images/trainer.jpg') }}" alt="card-image">
                    </div>
                    <div class="other-info">
                        <h3>Instructor: {{ $class->instructor_fname }} {{ $class->instructor_lname }}</h3>
                        <span>Class: {{ $class->class_name }}</span>
                    </div>
                    <div class="signup-btn">
                        <button type="submit">Sign Up</button>
                    </div>
                </form>
            @endforeach
        </section> --}}
        <section class="signup-table">
            <table>
                <thead>
                    <th>
                        Class
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Instructor
                    </th>
                    <th>
                        Fee
                    </th>
                    <th>

                    </th>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                        <form action="/book" method="POST">
                            @csrf
                            <tr>
                                <td>
                                    {{ $class->class_name }}
                                </td>
                                <td>
                                    {{ $class->description }}
                                </td>
                                <td>
                                    {{ $class->instructor_fname }} {{ $class->instructor_lname }}
                                </td>
                                <td>
                                    {{ $class->fee }}
                                </td>
                                <td>
                                    <input type="text" name="first_name" id=""
                                        value="{{ $data->first_name }}" hidden>
                                    <input type="text" name="last_name" id=""
                                        value="{{ $data->last_name }}" hidden>
                                    <input type="text" name="email" id="" value="{{ $data->email }}"
                                        hidden>
                                    <input type="text" name="class_name" id=""
                                        value="{{ $class->class_name }}" hidden>
                                    <button type="submit">
                                        Sign Up
                                    </button>
                                </td>
                            </tr>
                        
                        </form>
                        
                    @endforeach
                </tbody>
            </table>
        </section>

    </main>
    {{-- <footer>
        <ul>
            @foreach ($classes as $class)
            <li>{{$class}}</li>                
            @endforeach
        </ul>

    </footer> --}}

</body>

</html>
