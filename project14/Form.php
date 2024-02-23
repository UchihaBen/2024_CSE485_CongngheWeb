<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .basic-title, .contact-title {
            border-bottom: 3px solid #cccc;
        }

        .basic-input {
            display: grid;
        }

        .basic-input * {
            margin-top: 8px;
        }

        .title-form * {
            margin-top: 8px;
        }

        .gender-cb {
            display: block;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="basic">
        <div class="basic-title">
            <h3>Basic Info</h3>
        </div>
        <div class="basic-form">
            <div class="row">
                <div class="col-3 title-form">
                    <p>Employee ID</p>
                    <p>Last Name</p>
                    <p>First Name</p>
                    <p>Gender</p>
                    <p>Title</p>
                    <p>Suffix</p>
                    <p>BirthDate</p>
                    <p>HireDate</p>
                    <p>SSN # (if applicable)</p>
                    <p>Reports To</p>
                </div>
                <div class="col-9 basic-input">
                    <p>9</p>
                    <p>Dodsworth</p>
                    <input type="text">
                    <div class="gender-cb">
                        <input type="radio"> <span>Male</span>
                        <input type="radio"> <span>Female</span>
                        <input type="radio"> <span>XXX</span>
                        <input type="radio"> <span>ZZZ</span>
                    </div>
                    <input type="text">
                    <input type="text">
                    <input type="datetime-local">
                    <input type="datetime-local">
                    <input type="text">
                    <select name="" id="">
                        <option>Buchanan</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="contact mt-4">
            <div class="contact-title">
                <h3>Contact Info</h3>
            </div>

            <div class="contact-form">
                <div class="row">
                    <div class="col-3 title-form">
                        <p>Email</p>
                        <p>Address</p>
                        <p>City</p>
                        <p>Region</p>
                        <p>Postal Code</p>
                        <p>Country</p>
                        <p>US Home Phone</p>
                        <p>Photo</p>
                    </div>
                    <div class="col-9 basic-input">
                        <input type="text" placeholder="name@example.com">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <select>
                            <option>Russian Federation</option>
                        </select>
                        <input type="number">
                        <input type="text">
                    </div>
                </div>
        </div>

    </div>
</div>
</body>
</html>
