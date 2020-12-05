<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="col-lg-4 col-sm-6">
        <form action="{{ route('post') }}" method="get">
            @csrf
            <div class="form-group">
              <label for="Title">Username</label>
              <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="Title">Password</label>
                <input type="password" name="title" class="form-control" id="password" aria-describedby="password" placeholder="Enter password">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
