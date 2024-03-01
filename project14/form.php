<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        .underLine {
            border-bottom: 1px solid #ccc;
        }

        .submit button {
            background-color: #ccc
        }
        .form{
            box-sizing: border-box;
            height: 1200px;
            width: 700px;
            margin: 0 auto;
            border: 10px solid gray;
        }
        .ip{
            margin-right: 20px;
            width: 500px;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php
    $countries = array (
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
        "Antigua & Barbuda",
        "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain",
        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
        "Bermuda", "Bhutan",
        "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
Islands", "Brunei",
        "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
    );

    ?>
    <div class="form">
        <p class="underLine">Basic Info</p>
        <table>
            <tbody>
                <tr class="">
                    <td class="">Employee ID</td>
                    <td class="">9</td>
                </tr>
                <tr class="">
                    <td class="">Last name</td>
                    <td class="">Dodsworth</td>
                </tr>
                <tr class="">
                    <td class="">First name</td>
                    <td class="" >
                        <input type="text" class=" ip" value="Anne">
                    </td>
                </tr>
                <tr class="">
                    <td class="">Gender</td>
                    <td class="">
                        <input type="radio" name="option" id="" value="Male"> Male<br>
                        <input type="radio" name="option" id="" value="Female"> Female<br>
                        <input type="radio" name="option" id="" value="XXX"> XXX<br>
                        <input type="radio" name="option" id="" value="ZZZ"> ZZZ<br>
                    </td>
                </tr>
                <tr class="">
                    <td class="">Title</td>
                    <td class="">
                        <input type="text" class="ip"  value="Sales Representative">
                    </td>
                </tr>
                <tr class="">
                    <td class="">Suffix</td>
                    <td class="">
                        <input type="text" class="ip"  value="Ms.">
                    </td>
                </tr>
                <tr class="">
                    <td class="">BirthDate</td>
                    <td class="">
                        <input type="text" class="ip"  value="1969-07-02 00:00:00">
                    </td>
                </tr>
                <tr class="">
                    <td class="">HireDate</td>
                    <td class="">
                        <input type="text" class="ip"  value="1994-11-15 00:00:00">
                    </td>
                </tr>
                <tr class="">
                    <td class="col-3" style="width : 150px">SSN # (if applicable)</td>
                    <td class="">
                        <input type="text" class="ip"  value="">
                    </td>
                </tr>
                <tr class="">
                    <td class="">Reports to</td>
                    <td class="">
                        <select class="">
                            <option>Buchanan</option>
                            <option>ThanhLe</option>
                            <option>Who</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="underLine">Contact Info</p>
            <table class="">
                <tbody>
                    <tr class="">
                        <td class="">Email</td>
                        <td class="">
                            <input type="text" class="ip"  placeholder="name@example.com">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="">Andress</td>
                        <td class="">
                            <input type="text" class="ip"  value="7 Houndstooth Rd.">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="">City</td>
                        <td class="" >
                            <input type="text" class="ip"  value="London">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="">Region</td>
                        <td class="">
                            <input type="text" class="ip" name="option" id="" value="">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="">Postal Code</td>
                        <td class="">
                            <input type="text" class="ip"  value="WG2 7LT">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="">Country</td>
                        <td class="">
                            <select class="">
                                <?php
                                    foreach ($countries as $country) {
                                        echo '<option>' . $country . '</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col-3" style="width : 150px" >US Home Phone</td>
                        <td class="">
                            <input type="text" class="ip" name="option" id="" value="(234)234-2342">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="">Photo</td>
                        <td class="">
                            <input type="text" class="ip"  value="EmpID9.bmp">
                        </td>
                    </tr>
                </tbody>
            </table>
        <p class="underLine">Optional Info</p>
        <table class="">
            <tbody>
                <tr class="">
                    <td class="">Notes</td>
                    <td class="">
                        <textarea name="post_content" id="post_content" rows="10" cols="100"></textarea>
                    </td>
                </tr>
                <tr class="">
                    <td class="" style="width : 150px">Preferred Shift</td>
                    <td class="">
                        <input type="checkbox" name="shift" id="" value="Regular"> Regular<br>
                        <input type="checkbox" name="shift" id="" value="GravyYard"> Gravy Yard                    </td>
                </tr>
                <tr class="">
                    <td class="">Active?</td>
                    <td class="">
                        <input type="checkbox" name="active" id="" value="isActive">
                    </td>
                </tr>
                <tr class="">
                    <td class="">Are you human?</td>
                    <td class="">
                        <div>
                            <h2 id="randomWord fw-bold"></h2>
                            <button type="button" class="fw-bold col-12 border-0 bg-white" id="btnChange">Click to change</button>
                            <input type="text" class="ip" name="human" id="">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class=""></p>
        <div class="d-flex justify-content-between">
            <div>
                <button ><i class="fa-solid fa-caret-left"></i></button>
                <button ><i class="fa-solid fa-caret-right"></i></button>

            </div>
            <div>
                <button type="button"><i class="fa-solid fa-square-caret-left"></i> Submit</button>
                <button type="button"><i class="fa-solid fa-square-caret-right"></i> Cancel</button>
            </div>
        </div>
        <hr>
    </div>
</body>
<script type="text/javascript">
    CKEDITOR.replace( 'post_content', {
        height: "100px"
    } );
</script>
</html>