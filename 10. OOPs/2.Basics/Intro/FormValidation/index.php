  <?php

    require('user_validator.php');

    $errors = [];

    if (isset($_POST['submit'])) {
        // validate entries
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();

        // if errors is empty --> save data to db
    }

    ?>

  <html lang="en">

  <head>
      <title>PHP OOP</title>
      <style>
          body {
              background: #ffece5;
              font-family: verdana;
          }

          .new-user {
              background: #fff;
              padding: 20px 40px;
              max-width: 300px;
              margin: 0 auto;
          }

          h2 {
              color: #555;
          }

          label,
          input {
              display: block;
              margin: 18px 0;
          }

          label {
              color: #777;
          }

          input[type='text'],
          input[type='email'] {
              border: 1px solid #ddd;
              padding: 10px;
              border-radius: 10px;
              width: 100%;
          }

          input[type='submit'] {
              margin: 24px auto;
              font-size: 18px;
              background: coral;
              color: #fff;
              padding: 6px 16px;
              border: none;
              border-radius: 10px;
          }

          .error {
              color: coral;
          }
      </style>
  </head>

  <body>

      <div class="new-user">
          <h2>Create a new user</h2>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

              <label>username: </label>
              <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>">
              <div class="error">
                  <?php echo $errors['username'] ?? '' ?>
              </div>
              <label>email: </label>
              <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">
              <div class="error">
                  <?php echo $errors['email'] ?? '' ?>
              </div>
              <input type="submit" value="submit" name="submit">

          </form>
      </div>

  </body>

  </html>