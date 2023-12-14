<?php
  session_start();

  include '../classes/user.php';

  $user_obj = new User;
  $user = $user_obj->getUser(); 

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">
        <h1 class="h3">The Company</h1>
      </a>
      <div class="navbar-nav">
        <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
        <form action="../actions/logout.php" method="post" class="d-flex ms-2">
          <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
        </form>
      </div>
    </div>
  </nav>

  <main class="row justify-content-center gx-0">
    <div class="col-4">
      <h2 class="text-center mb-4">EDIT USER</h2>

      <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center mb-3">
          <div class="col-6">
            <?php
            if($user['photo']) {
              ?>
              <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto edit-photo">
              <?php
            } else {
              ?>
              <i class="fa-solid fa-user text-secondary d-block text-center edit-icon"></i>
              <?php
            }

            ?>
            <input type="file" name="photo" class="form-control mt-2" accept="image/*">
          </div>
        </div>
        <div class="mb-3">
          <label for="first-name" class="form-label">First Name</label>
          <input type="text" name="first_name" id="first-name" class="form-control" value="<?= $user['first_name'] ?>">
        </div>
        <div class="mb-3">
          <label for="last-name" class="form-label">Last Name</label>
          <input type="text" name="last_name" id="last-name" class="form-control" value="<?= $user['last_name'] ?>">
        </div>
        <div class="mb-4">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" id="username" class="form-control fw-bold" value="<?= $user['username'] ?>" maxlength="15">
        </div>

        <div class="text-end">
          <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
          <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>