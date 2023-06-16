<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('/css/contact.css') }}">
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
            <h1>CONTACT US</h1>
            <p>
                We're excited to hear from you and answer any questions or inquiries you may have. We believe in
                providing exceptional customer service and ensuring that your experience with us is seamless and
                enjoyable. Whether you have questions about our membership options, class schedules, personal training
                services, or any other aspect of our gym, our knowledgeable staff is here to assist you. You can reach
                out to us through the contact form on this page, and we'll respond promptly to address your needs.
                Alternatively, feel free to give us a call or visit us in person at our gym location, where our friendly
                reception team will be happy to assist you. We value your feedback, so if you have any suggestions or
                comments about our services, we encourage you to share them with us. At XYZ Gym, we strive to provide
                you with the best fitness experience possible, and we look forward to hearing from you soon!
            </p>
        </section>
        <section class="contact-box">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.834521944335!2d36.882199865657995!3d-1.2177158186195463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3fc955678a67%3A0x2c30e07746ac972a!2sTRM%20-%20Thika%20Road%20Mall!5e0!3m2!1sen!2ske!4v1686938151028!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact">
                <div class="heading">
                    <h1>Contact us</h1>
                    <p>We're open for any suggestion or just to have a chat</p>
                </div>
                <div class="info">
                    <span>
                        <h3>
                            Address
                        </h3>
                        <p>
                            198 West 21th Street, Suite 721 New York NY 10016
                        </p>
                    </span>
                    <span>
                        <h3>
                            Email
                        </h3>
                        <p>
                            info@yoursite.com
                        </p>
                    </span>
                    <span>
                        <h3>
                            Phone
                        </h3>
                        <p>
                            +1234567920
                        </p>
                    </span>
                </div>
                <div class="form">
                    <form action="" method="POST">
                        <input type="text" placeholder="Full Name" name="name">
                        <input type="email" placeholder="Email Adress" name="email">
                        <input type="text" name="subject" id="subject" placeholder="Enter Subject">
                        <textarea name="message" id="message" placeholder="Message goes here ..."></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
                <div class="socials">
                    <div class="follow">
                        FOLLOW US HERE
                    </div>
                    <div class="icons">
                        <a href=""><img src="{{ url('/images/icons/whatsapp.png') }}" alt=""></a>
                            <a href=""><img src="{{ url('/images/icons/facebook.png') }}" alt=""></a>
                            <a href=""><img src="{{ url('/images/icons/instagram.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>
