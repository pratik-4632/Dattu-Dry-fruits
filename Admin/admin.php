<html>
<head>
    <title>ADMIN PANEL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
      </head>
      <style>
      *{
        font-family: 'Maven Pro', sans-serif;
      }
      .form {
        opacity: 90%;
        background-color: antiquewhite;
        width: 30%;
      }
      @media only screen and (max-width: 600px) {
        .form{
            opacity: 90%;
            background-color: antiquewhite;
            width: 100%;
        }
        }
    </style>
      <body>
<div class='container form mt-5'   id='login_form'>
      <form class='p-4' action="verify_admin.php" method="post">
        <h4 class='text-center'> Admin Login</h4>
        <hr class='w-50'>
        <div class="form-group">
          <label for="title_username">Email address/username:</label>
          <input type="text" class="form-control" placeholder="Enter email /user" name="username" id="email" >
        </div>
        <div class="form-group">
          <label for="title_username">Password</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
        </div>
        <div class='text-center'>
          <input type='submit' class="btn btn-primary p-3" name value='Login'>
        </div>
      </form>
          </div>
    </body>
    </html>