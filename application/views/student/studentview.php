<!DOCTYPE html>
<html>
<head>
  <title><?php echo $page_title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
		.dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
		}

		.dropdown {
        position: relative;
        display: inline-block;
		}

		.dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 250px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
		}

		.dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
		}

		.dropdown-content a:hover {background-color: #ddd;}

		.dropdown:hover .dropdown-content {display: block;}

		.dropdown:hover .dropbtn {background-color: #3e8e41;}
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php echo $left_side?>

      <div class="col-sm-6 col-md-6 col-lg-6">
          <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Update</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $i=1;
                    foreach($data as $row){
                ?>
                  <tr>
                      <td><?= $i ?></td>
                      <td><?= $row->name ?></td>
                      <td><?= $row->gender ?></td>
                      <td><a href='<?= base_url()?>student/student/updatedata?id=<?=$row->id?>'>Update</a></td>
                      <td><a href='<?= base_url()?>student/student/deletedata?id=<?=$row->id?>'>Remove</a></td>
                  </tr>
                <?php 
                      $i++;
                    }
                ?>
                </tbody>

              </table>
          </div> 
      </div>
      <?php echo $badges?>
  </div>
</body>
</html>

