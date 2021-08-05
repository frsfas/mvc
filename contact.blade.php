<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container-fluid ">
                <a class="navbar-brand" >LOGO</a>
                <div class="collapse navbar-collapse"></div>  
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/register">Register</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <form action="http://localhost:8000/contact" method="POST">
            @csrf
            <div>
                <div class="col-4 offset-lg-4 mb-3 mt-4">
                    <div class="form-group">                   
                        <input type="text"placeholder="Name" class="form-control"  name="name">
                    </div>
                </div>
                <div class="col-4 offset-lg-4 mb-3">
                    <div class="form-group">                   
                        <input type="email"placeholder="Email" class="form-control"  name="email">
                    </div>
                </div>
                <div class=" col-4 offset-lg-4 mb-3">
                    <div class="form-group">                   
                        <textarea rows="5" placeholder="Message" class="form-control" name="message"></textarea>
                    </div>
                </div>
                <div class=" col-4 offset-lg-4 mb-3">
                    <button type="submit" class="col-12 btn btn-danger">Send</button>
                </div>
            </div>       
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>