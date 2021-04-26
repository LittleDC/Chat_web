<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Realtime Chat App</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <img src="./me_min.jpg" alt="">
          <div class="details">
            <span>Coding Nepal</span>
            <p>Active now</p>
          </div>
        </div>
        <a href="./index.html" class="logout">Logout</a>
      </header>

      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>

      <div class="users-list">
        <a href="#">
          <div class="content">
            <img src="./me_min.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./me_min.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./me_min.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./me_min.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./me_min.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./me_min.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
      </div>
    </section>
  </div>

  <script src="./js/users.js"></script>

</body>

</html>