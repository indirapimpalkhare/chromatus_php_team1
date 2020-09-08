<!doctype html>
<style>
  .report-wrapper{
    padding: 50px;
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
      <div class="report-wrapper">
        <!-- Side Bar Code -->
        <div class = "table-responsive">
        <table class="table table-hover table-sm">
          <thead>
            <tr>
              <th scope="col">Sr. No.</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Summary</th>
              <th scope="col">Created Date</th>
              <th scope="col">Last Modified</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
              <td><a href="" class="btn btn-primary"><i class="fa fa-trash"></i></a></td>
            </tr>
          </tbody>
      </table>
      </div>
    </div>
      <?php require_once('include/footer.php'); ?>

    </body>
  </html>
