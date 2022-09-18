<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Real-Time Chat Application using PHP & jQuery">
  <meta name="author" content="Swastik Kulshreshtha & Bootstrap Team">
  <title>ChatApp-PHP</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <meta name="theme-color" content="#712cf9">
  <link rel="icon" href="img/favicon.ico">

  <link href="css/mybootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="#" aria-label="ChatApp">
        <img src="img/favicon.ico" alt="ChatApp - PHP" height="24" width="24">
      </a>
      <a class="py-2 d-none d-md-inline-block" href="#home">Home</a>
      <a class="py-2 d-none d-md-inline-block" href="#about">About</a>
      <a class="py-2 d-none d-md-inline-block" href="#contact">Contact Us</a>
      <a class="py-2 d-none d-md-inline-block" href="#chat">Chat</a>
    </nav>
  </header>

  <main id="home">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" id="chat">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">ChatApp - PHP</h1>
        <p class="lead fw-normal">Real-Time Chat Application using PHP & jQuery</p>
        
        <form action="claim.php" method="post">
          <input type="text" class="form-control" style="text-align: center;" placeholder="Enter Room Name" name="room">
          <br>
          <button class="btn btn-outline-secondary" href="#">Claim Room</button>
        </form>

      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">MyRoom</h2>
          <p class="lead">Bring my Friends.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">GGEventChat</h2>
          <p class="lead">Where is the Anchor?</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>
    </div>
  </main>

  <p align="Center">This Webpage is an Example Template from Bootstrap <a href="https://getbootstrap.com/docs/5.2/examples/product/" class="link-secondary">here</a>.</p>

  <footer class="container py-5">
    <div class="row">
      <div class="col-20 col-md">
      <img src="img/favicon.ico" alt="ChatApp - PHP" height="24" width="24"><br><br>
        
      </div>
      <div class="col-6 col-md">
        <h5 id="requisites">Pre-Requisites</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="https://www.apachefriends.org/">PHP</a></li>
          <li><a class="link-secondary" href="https://www.apachefriends.org/">mySQL</a></li>
          <li><a class="link-secondary" href="https://jquery.com/">jQuery</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 id="features">Features</h5>
        <ul class="list-unstyled text-small">
          <li>Real-Time</li>
          <li>No Logging</li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 id="contact">Contact Us</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="https://github.com/Swastik2442">GitHub</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 id="about">About</h5>
        <ul class="list-unstyled text-small">
          <li>Made with ❤️ by Swastik</li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>