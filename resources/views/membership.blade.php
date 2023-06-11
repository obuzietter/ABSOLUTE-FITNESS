<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('/css/membership.css') }}">
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
        <section class="hero-section">
            <h1>Get your membership right now</h1>
        </section>
        {{-- <section class="membership-cards">
            
                <div class="other">
                    <div class="description">

                    </div>
                    <div class="btn">

                    </div>
                </div>
            </div>
        </section> --}}
        
        <section class="form">
            <form action="{{'post-membership'}}" method="POST">
                @csrf
                <input type="text" name="user_id" id="" value="{{$user->user_id}}" hidden>
                <input type="text" name="first_name" id="" value="{{$user->first_name}}" hidden>
                <input type="text" name="last_name" id="" value="{{$user->last_name}}" hidden>
                <input type="email" name="email" id="" value="{{$user->email}}" hidden>
                <label for="package_name">Package</label>
                <select name="package_name" id="package_name">
                    <option value="" hidden>SELECT PACKAGE</option>
                    @foreach ($packages as $package)
                        <option value="{{ $package->package_name }}">{{ $package->package_name }}</option>
                    @endforeach
                </select>
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" id="start_date">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" id="end_date">
                <label for="duration">Duration</label>
                <input type="number" name="duration" id="duration">
                <label for="price">Price</label>
                <input type="number" name="price" id="price">
                <label for="phone">Phone number</label>
                <input type="tel" name="phone" id="phone">
                <input type="text" name="status" id="status" value="ACTIVE" hidden>
                <button type="submit">SUBMIT</button>
            </form>
            
        </section>

        <button id="button">DATE</button>
    </main>
<script src="{{'/js/membership.js'}}"></script>
</body>

</html>
