    <?php


        session_start();
        require_once 'config/db.php';


        if(isset($_POST['insertdata'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $nickname = $_POST['nickname'];
            $weigth = $_POST['weigth'];
            $height = $_POST['height'];
            $tel = $_POST['tel'];
            $idcard = $_POST['idcard'];
            $birthday = $_POST['birthday'];
            $image = $_POST['iamge'];
            $urole = 'user';  


            //! empty เช็คค่าว่าง

        }
    ?>