<!doctype html>
<style>
  .report-wrapper{
    padding: 100px;
    padding-left: 500px;
  }
</style>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

      <title>Dashboard - Admin</title>

    </head>
    <body>
      <header>
        <?php require_once('include/nav.php'); ?>

      </header>
      <div class="container report-wrapper">
        <!-- Side Bar Code -->
        <table class="table table-hover table-sm table-responsive">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><input class="btn btn-primary" value="Edit"></td>
              <td><input class="btn btn-primary" value="Delete"></td>
            </tr>
          </tbody>
      </table>
      </div>
      <?php require_once('include/footer.php'); ?>

    </body>
  </html>
