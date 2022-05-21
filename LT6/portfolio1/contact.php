<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect"href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0
    ,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700& display=swap"rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

    <div class="hero">
        <nav>
            <h2 class="logo">Portfo<span>lio</span></h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <a href="#" class="btn">Subscribe</a>
        </nav>
        <div class="hero1">
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Let's get in touch</h3>
                    <p class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="info">
                        <div class="information">
                            <img src="location.png" class="icon">
                            <p>Zone 2, Brgy Tuburan E.B Magalona</p>
                        </div>
                        <div class="information">
                            <img src="email.png" class="icon">
                            <p>zandrixpongos@gmail.com</p>
                        </div>
                        <div class="information">
                            <img src="phone.png" class="icon">
                            <p>+63123456789</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="contact.php">
                        <h3 class="title">Contact Us</h3>
                        <div class="input-container">
                            <input type="text" name="name" class="input">
                            <label for="">Username</label>
                            <span>Username</span>
                        </div>
                        <div class="input-container">
                            <input type="text" name="email" class="input">
                            <label for="">Email</label>
                            <span>Email</span>
                        </div>
                        <div class="input-container">
                            <input type="tel" name="phone" class="input">
                            <label for="">Phone</label>
                            <span>Phone</span>
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                        </div>
                        <input type="submit" value="Send" class="btn"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>