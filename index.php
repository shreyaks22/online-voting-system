<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Webpage</title>

    <!-- Bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Online Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="actions/login.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="username" placeholder="Enter your name" required="required"
                    class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <input type="text" name="mobile" placeholder="Enter your Aaddhar number" required="required"
                    class="form-control w-50 m-auto" maxLength="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Enter your Voter ID or Group ID" required="required"
                    class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4 ">Login</button>
                <p>Don't have any account?<a href="./Partials/registration.php"class="text-white"> Register here</a></p>
                
            </form>
        </div>
    </div>
</body>
</html>