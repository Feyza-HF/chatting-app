<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
</head>
<body>
  <header>
    <a href="#" class="logo">Chatting App</a>
    <ul class="navmenu">
      <li><a href="">Home</a></li>
      <li><a href="{{ route('login') }}">Log In</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
    </ul>
  </header>

  <section class="profile-container">
    <div class="profile">
      <div class="home-img">
        <img src="{{asset('image/jett.jpg')}}" alt="Feyza's Photo" />
      </div>
      <div class="home-text">
        <h2>Hello, I'm Feyza <i class="ph-bold ph-hand-waving"></i></h2>
        <h3>Road To Front End Developer</h3>
        <p>I want to become a front end developer. I'm from Pontianak,
          and I'm very passionate and dedicated to becoming a Front End Developer.</p>
      </div>
    </div>

    <div class="profile">
      <div class="home-img">
        <img src="{{asset('image/dimas.jpg')}}" alt="Dimas's Photo" />
      </div>
      <div class="home-text">
        <h2>Hello, I'm Dimas <i class="ph-bold ph-hand-waving"></i></h2>
        <h3>Aspiring Backend Developer</h3>
        <p>I am an aspiring backend developer from Pontianak, committed to enhancing my skills
          and contributing to impactful projects.</p>
      </div>
    </div>
  </section>

  <div class="socials-icons">
    <a href="#"><i class="ph-bold ph-instagram-logo"></i></a>
    <a href="https://wa.me/6289693712963"><i class="ph-bold ph-whatsapp-logo"></i></a>
    <a href="#"><i class="ph-bold ph-github-logo"></i></a>
  </div>

  <div class="socials-icons socials-icons-right">
  <a href="#"><i class="ph-bold ph-instagram-logo"></i></a>
  <a href="https://wa.me/6289688393012"><i class="ph-bold ph-whatsapp-logo"></i></a>
  <a href="#"><i class="ph-bold ph-github-logo"></i></a>
</div>

</body>
</html>
