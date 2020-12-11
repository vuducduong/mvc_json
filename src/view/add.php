<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Thêm Học Sinh</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Id</label>
                    <input type="text" class="form-control" name="id" id="formGroupExampleInput2"
                           placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                           placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Age</label>
                    <input type="text" class="form-control" name="age" id="formGroupExampleInput2"
                           placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Address</label>
                    <input type="text" class="form-control" name="address" id="formGroupExampleInput2"
                           placeholder="Another input">
                </div>
                <button type="submit">Enter</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>