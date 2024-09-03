<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting-Registration page </title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Online Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" placeholder="Enter your username" required="required" name="username" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Enter your Aaddhar number" required="required" name="mobile" class="form-control w-50 m-auto" maxLength=10 minLenght=10>
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Enter your Voter ID or Group ID" required="required" name="password" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Confirm your Voter ID or Group ID" required="required" name="cpassword" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <input type="file"  name="photo" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <p>Already have an account?<a href="../" class="text-white">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>