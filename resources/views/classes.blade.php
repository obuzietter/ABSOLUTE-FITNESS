<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('/css/nav.css')}}">
    <link rel="stylesheet" href="{{url('/css/classes.css')}}">
    <title>Document</title>
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
                <h1>CLASSES</h1>
            </ul>
        </nav>
    </header>
    <main>
    <section>
    <div class="card">
        <h3>Morning Class </h3>
        <p>Time: Monday, 9:00 AM - 10:00 AM</p>
        <p>Instructor: John Doe</p>
        <div class="workout">
            <strong>Workout Types:</strong>
            <ul>
                <li>Cardio</li>
                <li>Strength Training</li>
            </ul>
        </div>
        <button>Sign Up</button>
    </div>

    <div class="card">
        <h3>Afternoon Class</h3>
        <p>Time: Tuesday, 4:00 PM - 5:00 PM</p>
        <p>Instructor: Jane Smith</p>
        <div class="workout">
            <strong>Workout Types:</strong>
            <ul>
                <li>Yoga</li>
                <li>Pilates</li>
            </ul>
        </div>
        <button>Sign Up</button>
    </div>

    <div class="card">
        <h3>Evening Class</h3>
        <p>Time: Wednesday, 6:30 PM - 7:30 PM</p>
        <p>Instructor: Mike Johnson</p>
        <div class="workout">
            <strong>Workout Types:</strong>
            <ul>
                <li>Zumba</li>
                <li>Aerobics</li>
            </ul>
        </div>
        <button>Sign Up</button>
    </div>
</section>
<section>
    <form action="/book-class" method="POST">
        @csrf
        {{-- <input type="text" hidden value="{{$data->first_name}}"> --}}
       
        <div>
            <h3>
                Sig Up For Class
            </h3>
        </div>
        <div>
            <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone">
        </div>
        <div>
            <label for="class-type">Class</label>
            <select name="class_type" id="class-type">
                <option value="" hidden>SELECT CLASS</option>
                <option value="Morning">Morning</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Evening">Evening</option>
            </select>
        </div>
        <div>
            <label for="start-date">Start Date</label>
            <input type="date" name="start_date" id="start-date">
        </div>
        <div>
            <label for="end-date">End Date</label>
            <input type="date" name="end_date" id="end-date">
        </div>
        <div>
            <button type="submit">Sign Up</button>
        </div>
    </form>
</section>
    </main>
    
</body>
</html>