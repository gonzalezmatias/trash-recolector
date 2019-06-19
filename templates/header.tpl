<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{$title}</title>
</head>
<body>

<header>
  <div class="container example4">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar4">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home"><img class="main-logo" src="images/trash.png" alt="trash recoloctor">
          </a>
        </div>
        <div id="navbar4" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            {if $user!=admin}
            <li class="active"><a href="home">Home</a></li>
            {* <li><a href="#">About</a></li> *}
            {/if}
            {if $user!=""}
            <li><a href="logout">Logout</a></li>
            {else}
            <li><a href="registrarse">Registrarse</a></li>
            {/if}
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
  </div>
</header>
<div class="reports">
