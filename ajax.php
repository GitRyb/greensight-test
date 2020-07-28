<?php
include_once('users.php');
include_once('Check.php');
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat']; 
    $errors = false;

    if (!Check::checkName($name)) {
        $errors[] = 'Введите имя!';
    }
    if (!Check::checkSurname($surname)) {
        $errors[] = 'Введите фамилию!';
    }
    if ((!Check::checkEmail($email))||($email == '')) {
        $errors[] = 'Введите правильный email!';
    }
    if (Check::checkEmaiExist($users, $email)){
        $errors[] = 'Эта почта уже используется!';
    }
    if (!Check::checkPassword($password)){
        $errors[] = 'Введите пароль!';
    }
    if (!Check::checkPassword($passwordRepeat)){
        $errors[] = 'Введите повторно пароль!';
    }
    if (!Check::checkPasswordsMatch($password, $passwordRepeat)){
        $errors[] = 'Пароли не совпадают!';
    }
    if ($errors == false) {
        $newUser[$email]['name'] = $name; 
        $newUser[$email]['surname'] = $surname; 
        $newUser[$email]['password'] = $password;
        
        $users = array_merge($users, $newUser);
        
        $newEntry ='<?php '.'$users = '. var_export($users, true).';';
        $file = fopen("users.php", "w");
        fwrite($file, $newEntry);
        fclose($file);


    } else {
        foreach ($errors as $error) {
            echo '<li>'.$error.'</li>';
        }
    }
        




