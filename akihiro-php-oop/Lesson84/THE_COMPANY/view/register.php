<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
  <div style="height: 100vh">
    <div class="row h-100 m-0">
      <div class="card w-25 my-auto mx-auto">


      <div class="card-header bg-white border-0 py-3">
        <h1 class="text-center">REGISTER</h1>
      </div>
      <div class="card-body">
        <form action="../actions/register.php" method="post">
          <div class="mb-3">
            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" class="form-control" require autofocus>
          </div>
          <div class="mb-3">
            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="form-control" require autofocus>
          </div>

          <!-- Bold to add emphasis -->
          <div class="mb-3">
            <label for="username" class="form-label fw-bold">Username</labe>
            <input 
              type="text"
              id="username"
              name="username"
              class="form-control fw-bold"
              min-length="8"
              required>
          </div>

          <div class="mb-5">
            <labe for="password" class="form-label fw-bold">Password</labe>
            <input 
              type="password"
              id="password"
              name="password"
              class="form-control fw-bold"
              min-length="8"
              aria-describedby="password-info"
              required>
              <div class="form-text" id="password-info">
                Password must be at least 8 characters long.
              </div>
          </div>

          <button type="submit" class="btn btn-success w-100">Register</button>
        </form>

        <p class="text-center mt-3 small">Registerd already? <a href="../views">Login.</a></p>
      </div>
    </div>
    </div>
  </div>
  
</body>
</html>