<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project14.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="form">


    <div class="basic-layout">
        <p>Basic Info</p>
        <div class="basic-item">
            <table>
                <tr>
                    <td class="">Employee ID</td>
                    <td class="">9</td>
                </tr>
                <tr>
                    <td>Last name</td>
                    <td>Dodsworth</td>
                </tr>
                <tr>
                    <td>First name</td>
                    <td>
                        <input type="text" class="inputtext" value="Anne">
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="option" id="" value="Male"> Male<br>
                        <input type="radio" name="option" id="" value="Female"> Female<br>
                        <input type="radio" name="option" id="" value="XXX"> XXX<br>
                        <input type="radio" name="option" id="" value="ZZZ"> ZZZ<br>
                    </td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" class="inputtext"  value="Sales Representative">
                    </td>
                </tr>
                <tr>
                    <td>Suffix</td>
                    <td>
                        <input type="text" class="inputtext"  value="Ms.">
                    </td>
                </tr>
                <tr>
                    <td>BirthDate</td>
                    <td>
                        <input type="text" class="inputtext"  value="1969-07-02 00:00:00">
                    </td>
                </tr>
                <tr>
                    <td>HireDate</td>
                    <td>
                        <input type="text" class="inputtext"  value="1994-11-15 00:00:00">
                    </td>
                </tr>
                <tr>
                    <td style="width : 150px">SSN # (if applicable)</td>
                    <td>
                        <input type="text" class="inputtext"  value="">
                    </td>
                </tr>
                <tr>
                    <td>Reports to</td>
                    <td>
                        <select>
                            <option>hue01</option>
                            <option>hue02</option>
                            <option>hue03</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </div>



    <div class="contact-layout">
        <p>Contact Info</p>
        <div class="contact-item">
        <table>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" class="inputtext"  placeholder="name@example.com">
                </td>
            </tr>
            <tr>
                <td>Andress</td>
                <td>
                    <input type="text" class="inputtext"  value="7 Houndstooth Rd.">
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <input type="text" class="inputtext"  value="London">
                </td>
            </tr>
            <tr>
                <td>Region</td>
                <td>
                    <input type="text" class="inputtext" name="option" id="" value="">
                </td>
            </tr>
            <tr>
                <td>Postal Code</td>
                <td>
                    <input type="text" class="inputtext"  value="WG2 7LT">
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select>
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
                            foreach ($countries as $country) {
                                echo '<option>' . $country . '</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr class>
                <td style="width : 150px" >US Home Phone</td>
                <td>
                    <input type="text" class="inputtext" name="option" id="" value="(234)234-2342">
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>
                    <input type="text" class="inputtext"  value="EmpID9.bmp">
                </td>
            </tr>               
        </table>
    </div>
    </div>



    <div class="optinal-layout">
        <p>Optinal Info</p>
        <div class="optinal-item">
        <table>
            <tr>
                <td>Notes</td>
                <td>
                    <textarea name="post_content" id="post_content" rows="8" cols="65"></textarea>
                </td>
            </tr>
            <tr>
                <td style="width : 150px">Preferred Shift</td>
                <td>
                    <input type="checkbox" name="shift" id="" value="Regular"> Regular<br>
                    <input type="checkbox" name="shift" id="" value="GravyYard"> Gravy Yard                    </td>
            </tr>
            <tr >
                <td>Active?</td>
                <td>
                    <input type="checkbox" name="active" id="" value="isActive">
                </td>
            </tr>
            <tr>
                <td>Are you human?</td>
                <td>
                    <div>
                        <h2 id="randomWord fw-bold"></h2>
                        <button type="button" class="fw-bold col-12 border-0 bg-white" id="btnChange">Click to change</button>
                        <input type="text" class="inputtext" name="human" id="">
                    </div>
                </td>
            </tr>
        </table>
    </div>
    </div>

        <div>
            <div>
                <button ><i class="fa-solid fa-caret-left"></i></button>
                <button ><i class="fa-solid fa-caret-right"></i></button>

            </div>

            <div>
                <button type="button"><i class="fa-solid fa-square-caret-left"></i> Submit</button>
                <button type="button"><i class="fa-solid fa-square-caret-right"></i> Cancel</button>
            </div>
        </div>


</div>
   
</body>
</html>
