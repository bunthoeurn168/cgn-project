<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?= base_url()?>asset/css/style.css">
  </head>
<body>

<div class="container-fluid">
	<h1 class="text-center">Student Information</h1>
	<div class="row">
      <?php
        include_once "left_side.php";
      ?>
      
      <div class="col-sm-7 col-md-7 col-lg-7">
        <?php
            $i=1;
            foreach($data as $row){
        ?>
        <form action="<?= base_url() ?>student/student/updatedata?id=<?= $row->id?>" method="POST"  enctype="multipart/form-data">
          <input type="text" name="id" value="<?= $row->id?>">
          <input type="text" name="img_id" value="<?= $row->img_id?>">
          <div class="form-group">
            <p><img src='<?=base_url()?>asset/uploads/<?= $row->img_name ?>' id="preview" width='70' height='90'></p>
            <input type="file" id="filetag" name="profile_pic">
          </div>
          <script>
            var fileTag = document.getElementById("filetag"),
                preview = document.getElementById("preview");
            fileTag.addEventListener("change", function() {
              changeImage(this);
            });
            function changeImage(input) {
              var reader;
              if (input.files && input.files[0]) {
                reader = new FileReader();
                reader.onload = function(e) {
                  preview.setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
              }
            }
          </script>
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?= $row->name?>" class="form-control" placeholder="Please Input Name" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" value="<?= $row->password?>" class="form-control" placeholder="Please Input Password" required>
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input type="radio" name="gender" <?= ($row->gender == 'Male') ? 'checked' : '' ?> value="Male"> Male
            <input type="radio" name="gender" <?= ($row->gender == 'Female') ? 'checked' : '' ?> value="Female" > Female
          </div>

          <input type="submit" name="update" class="btn btn-primary" value="Update Record">
          <input type="reset" class="btn btn-danger" value="Cancel">
        </form>
        <?php } ?>
      </div>
  </div>
</div>
</body>
</html>
