<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <div class="container w-50">
    <div class="card-header bg-white border-0">
      <h2 class="text-center">REGISTRATION</h2>
    </div>

    <div class="card-body">
      <form action="" method="post">
        <div class="mb-4">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="me-4">
          <label for="year-level" class="form-label">Year Level</label>
          <select name="year_level" id="year-level" class="form-select" required>
            <option value="" hidden>Choose your year level</option>
            <option value="1">Year 1</option>
            <option value="2">Year 2</option>
            <option value="3">Year 3</option>
            <option value="4">Year 4</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="units" class="form-label">Total Units</label>
          <input type="number" class="form-control" id="units" name="units" max="23"
          placeholder="Maximum of 23" required>
        </div>
        <div class="mb-3 text-center">
          <div class="form-check form-check-inline">
            <input type="radio" name="laboratory" id="no-lab" class="form-check-input" value="no_lab">
            <label for="no-lab" class="form-check-label">Without Lab</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="laboratory" id="lab" class="form-check-input" value="lab">
            <label for="lab" class="form-check-label">With Lab</label>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <input type="submit" value="Submit" class="btn btn-dark w-100" name="submit">
          </div>
        </div>
      </form>

      <?php
        include 'School.php';

        if(isset($_POST['submit'])) {
          $name = $_POST['name'];
          $year_level = $_POST['year_level'];
          $units = $_POST['units'];
          $laboratory = $_POST['laboratory'];
          
          $school = new School();

          $school->setValues($year_level, $units, $laboratory);

          $total_price = number_format($school->computeTotalPrice(),2);

          echo "<p> Student Name: <span class='fw-bold' >$name</span></p>
                <p> Year Level: <span class='fw-bold' >$year_level</span></p>
                <p> No. of Units: <span class='fw-bold' >$units</span></p>
                <p class='fw-bold'> Total Price: $total_price</p> ";
        }
      
      ?>
    </div>
  </div>
  
</body>
</html>