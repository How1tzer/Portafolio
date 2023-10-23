<?php
session_start();

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'login':
            $email = strip_tags($_POST['email']);
            $password = strip_tags($_POST['password']);
            $authController = new AuthController;
            $authController->login($email, $password);
            break;
    }
}

class AuthController
{
    public function login($email, $password){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'email' => $email,
                'password' => $password
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if ($response->code > 0) {
            $_SESSION['user_id'] = $response->data->id;
            $_SESSION['name'] = $response->data->name;
            $_SESSION['lastname'] = $response->data->lastname;
            $_SESSION['avatar'] = $response->data->avatar;
            $_SESSION['email'] = $response->data->email;
            $_SESSION['phone_number'] = $response->data->phone_number;
            $_SESSION['role'] = $response->data->role;
            $_SESSION['token'] = $response->data->token;

            header("Location: Nvar.php"); // Redirigir al usuario a Nvar.html después de iniciar sesión con éxito.

        } else {
            header("Location: login.php"); // Redirigir de nuevo al formulario de inicio de sesión en caso de error.
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="p-3 mb-2 bg-success text-white">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-white text-black" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Accede al panel</h2>
      
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                      <div class="form-outline form-black mb-4">
                        <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                        <label class="form-label" for="typeEmailX">Correo</label>
                      </div>
      
                      <div class="form-outline form-white mb-4">
                        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                        <label class="form-label" for="typePasswordX">Contraseña</label>
                      </div>
      
                      <input type="hidden" name="action" value="login"> 
      
                      <button class="btn btn-outline-dark btn-lg px-5" type="submit">Acceder</button>
                    </form>
      
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
