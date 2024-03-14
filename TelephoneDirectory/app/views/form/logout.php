<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Form sign up!</title>
    <style>
        ::placeholder {
            color: #999999;
            font-style: italic;
        }

        .btn {
            background-color: #11207a;
        }
    </style>
</head>

<body>
<h2 class="text-center mt-3">Sign Up Form</h2>
<div class="container-sm mt-3 d-flex justify-content-center">

    <form action="controller/signupprocess.php" method="post" class="border p-4">
        <div class="mb-3 mt-3">
            <label for="fullName">Fullname:</label>
            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name">
        </div>
        <div class="mb-3 ">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="mb-3">
            <label for="phone">Mobile-phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter mobile-phone">
        </div>
        <div class="mb-3">
            <label for="department">Department:</label>
            <select name="department" id="department">
                <?php foreach ($departments as $depart): ?>
                    <option value="<?php echo $depart->getName(); ?>">
                        <?php echo $depart->getName(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3 ">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="userName" placeholder="Enter username" name="userName">
        </div>
        <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="mb-3">
            <label for="reEnterPwd">Re-enter password:</label>
            <input type="password" class="form-control" id="rEpwd" placeholder="Re-Enter password" name="rEpwd">
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>