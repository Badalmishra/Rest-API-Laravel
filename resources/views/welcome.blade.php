<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="mt-5 text-center">
    <nav aria-label="breadcrumb text-center">
  <span class="breadcrumb text-center">
    <h1 class="breadcrumb-item active text-center ml-auto" style="width:100%"><span class="">Welcome To The RestAPI Laravel Blog</span></h1>
  </span>
</nav>


  <nav aria-label="breadcrumbborder border-primary ">
    <span class="breadcrumb text-center w-50 mx-auto ">
      <h1 class="breadcrumb-item active  mx-auto">Feature Guide and api end points</h1>
<!--hidden
      <h3 class="breadcrumb-item active text-justify border border-primary p-4"><span class="lead"><b>Register</b> </span>:<code> Route:"api/register"</code>
        <div class="">

        </div>
        <p class="lead">Creates user and sends back api_token with other user details</p>
        <p class="lead">header must contain: <br>
        name , email , password , password_confirmation </p>
      </h3>
-->
      <ul class="list-group text-justify mx-auto w-75">
        <li class="list-group-item  w-100">Register:

          <hr>
          <ul>
            <span class="breadcrumb">Tpye post || Route /api/register <br>
        </span>
          Data: name , email , password , password_confirmation. <br>
          Creates User and returns api token
          </ul>
        </li>

        <li class="list-group-item w-100">Login:
          <hr>
          <ul>
            <span class="breadcrumb">Tpye post ||Route  /api/login <br>
        </span>
          Data: email , password. <br>
          Log existing User in and returns api token
          </ul>
        </li>

        <li class="list-group-item w-100">All Articles:
          <hr>
          <ul>
            <span class=" breadcrumb">Tpye Get ||Route /api/articles <br>
        </span>
          Data: . <br>
          Returns all articles as json || Requries Api Token in header
          </ul>
        </li>

        <li class="list-group-item w-100">Specific Article:
          <hr>
          <ul>
            <span class="breadcrumb">Tpye Get ||Route /api/article/{article_id} <br>
        </span>
          Data: . <br>
          Returns one articles as json || Requries Api Token in header
          </ul>
        </li>

        <li class="list-group-item w-100">Post Article:
          <hr>
          <ul>
            <span class="breadcrumb ">Tpye post ||Route /api/article/<br>
        </span>
          Data: Title , Body.<br>
          Saves new Article || Requries Api Token in header
          </ul>
        </li>

        <li class="list-group-item w-100">Update Article:
          <hr>
          <ul>
            <span class=" breadcrumb">Tpye Put ||Route /api/article/{article_id} <br>
        </span>
          Data: Title or Body or both<br>
          Updates Specified Article || Requries Api Token in header
          </ul>
        </li>

        <li class="list-group-item w-100">Delete Article:
          <hr>
          <ul>
            <span class="breadcrumb">Tpye Delete ||Route /api/article/{article_id} <br>
        </span>
          Data: . <br>
          Deletes Specified Article || Requries Api Token in header
          </ul>
        </li>
      </ul>
    </span>
  </nav>


  </body>
</html>
