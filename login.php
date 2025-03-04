<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/rest.css">
<link rel="stylesheet" href="css/gellery.css">
<link rel="stylesheet" href="css/form.css">
    <title>Document</title>
</head>
<body>
    
<div class="form">
 <div class="formConteiner">
 <form action="engine/function_login.php" method="post">
            <label for="login">
                Логин:
            </label>
            <input type="text" id="login" name="login" 
                placeholder="Логин" required>

            <label for="password">
                Пароль:
            </label>
            <input type="password" id="password" name="password" 
                placeholder="пароль" required>

            <div class="submit">
                <button type="submit">
                    Войти
                </button>
            </div>
            
        </form>

 </div>
 </div>
</body>
</html>


