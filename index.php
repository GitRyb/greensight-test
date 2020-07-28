
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src= "https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <div>
            
            <div id="forms" class="bg-primary p-5 form-wp" >
                <ul id="errors" class="errors-block bg-warning"></ul>
                <h1>Регистрация на сайте AJAX</h1>
                <form >
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="surname" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="password" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="passwordRepeat" placeholder="Подтвердите пароль">
                    </div>
                    <input type="button" value="Зарегистрироваться" id="submit" class="btn btn-outline-light btn-block">
                </form>
            </div>
        </div>

        <script>
            $("#submit").click(function(){
                var params = {
                    name: $("#name").val(),
                    surname: $("#surname").val(),
                    email: $("#email").val(),
                    password: $("#password").val(),
                    passwordRepeat: $("#passwordRepeat").val(),
                }
                $.post("ajax.php", params, function (data){
                    document.querySelector(".errors-block").style.display="block";
                    $("#errors").html(data);
                    var arr = [];
                    arr = $("#errors").children();
                    if (!arr.length) {
                        $("#forms").html("<h1>Вы успешно зарегистрировались!</h1>"); 
                    }
                });
            });  
        </script>



            
    </body>
</html>


