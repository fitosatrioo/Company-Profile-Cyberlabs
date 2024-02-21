<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="login.css">
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400&display=swap" rel="stylesheet">
    <style type="text/css">
     form i {
    
    
}


    </style>

</head>
<body>

    <div class="container"  style="width: 400px; padding-top: 5rem;">
        <div class="card shadow-lg">
            <div class="row">

                <div class="text-center mt-4">
                    <img class="cl" src="img/cyberlabs.png" alt="login" width="150px" >
                </div> 
                <div class="col mt-5">
                    
                    <form action="{{ route('postlogin') }}" method="post">
                        {{ csrf_field() }}
                       
                       <div class="container">
                        <div class="mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username"
                             placeholder="Username" name="username" required>
                          
                        
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                                <input style="outline: none" type="password" class="form-control" id="password"
                                placeholder="Password" name="password" required >
                                {{-- <i class="bi bi-eye-slash" id="togglePassword"></i> --}}
                           
                        </div>
                        <div class="mb-4 pb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                        <!--  <div class="mb-4">
                            <p>Not Have Account? <a href="register.html">Register Here!
                            </a></p>
                        </div>  -->
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>

    <script src="asset/js/bootstrap.min.js"></script>
    
</body>
</html>
