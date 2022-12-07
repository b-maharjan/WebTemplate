<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="row">

        <div class="col-8">
            <img src="./image/bgimg.png" alt="backgroung_img" style="width: 1100px; height:750px; opacity: 0.7;">

        </div>
        <div class="col-sm-4">
            <img src="./image/bgimg2.png" alt="backgroung_img" style="z-index: -1; margin-left: 160px; padding: 20px; height: 290px;">
            
            <h1>Contact Us</h1>
            <form action="" class="validated" method="post">
                <div class="mb-3">
                    <label for="uname" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                    <label class="form-check-label" for="myCheck">I agree</label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
<footer>
    <a href="mailto:maharjanbijay070@gmail.com">Gmail</a></p>
</footer>

</html>