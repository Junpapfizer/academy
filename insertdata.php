<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>insertdata</title>
    <link rel="stylesheet" href="styleinsert.css">

    <style>
        body {

            background-image: url('4.jpg');
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="container" id="grad1">
        <div class="form-container">
            <h1>กรอกข้อมูลสมัครสมาชิก</h1>
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQqsb6lK-PlD1kHFoubbiC-jN21tqj9ADz9crJ2rBIstz1gKFPE&usqp=CAU);">
                    </div>
                </div>
            </div>
            <input type="text" name="firstname" placeholder="ชื่อ">
            <input type="text" name="lastname" placeholder="นามสกุล"><br>
            <input type="text" name="nickname" placeholder="ชื่อเล่น">
            <input type="text" name="weight" style="width:100px" placeholder="น้ำหนัก">
            <input type="text" name="height" style="width:100px"placeholder="ส่วนสูง">
            <input type="text" name="tel" placeholder="เบอร์โทร.">
            <input type="text" name="idcard" placeholder="เลขบัตรประชาชน"><br>
            <input type="date" placeholder="Birthday:" />

            <div class="form-group">
                <div class="boxfix1">
                    <h2 style="color: #fff;">เสื้อ</h2>
                    <select class="form-control">
                        <option>--ขนาดเสื้อ--</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>
                <div class="boxfix">
                    <h2 style="color: #fff;">กางเกง</h2>
                    <select class="form-control">
                        <option>--ขนาดกางเกง--</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select><br>
                </div>
            </div>
            <button type="submit" >ลงทะเบียน</button>
        </div>
    </div>

</body>

</html>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>