<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="style.css" /> --}}
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('title')

    </head>

    <body>
    <style>
    
    .w3-button {
    width:90px;
    text-align: center;
    padding: 5px;
    margin: 2px;
    border-radius: 5px;
    transition-duration: 0.4s;
}
.delete-btn {
    background-color:red;
    color: white;
    
}
.update-btn {  
    background-color:blue;
    color: white;
    
h1 {
    color: whitesmoke;
    text-shadow: 2px 2px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}

    body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 6px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 70%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #022947;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
    <!-- <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo-and-name">
                    <img src="img/logo.png" id="logo" class="rounded float-start" alt="logo">
                    <p class="name">Arai Auto Spare Parts</p>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="img/user.svg" class="float-end user" alt="">
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Insert Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">View Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">View Orders</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> -->


    <header>

<div class="header">
    
    <img  class="headerlogo" src="/img/logonew.png" width="250px" height="200px">
  
 
    <div class="header-right">
        <a class="active" href="/">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="#e">Sign up</a>
        <a href="#cot">Admin Login</a>
        <a href="/home">Stock Management</a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>     
    </div>
</header>

    @yield('content')
<footer class = "clearfix" style = "padding: 20px; background-image: linear-gradient(180deg,rgb(119, 157, 240), rgb(234, 238, 243));" >


<table style = "width: 100%; margin-left:150px; color:rgb(54, 53, 53)">
        
        <th width="50%"><u>Contact Us</u></th> 
        <th width="50%"><u>Follow Us On,</u></th> 	

    <tr>
     
        <td><br>
            <p>HotLine: +9411 2729568<br>Phone: +9411 2123789<br>E-mail: araispareparts@gmail.com</p> 
  <br><br>
        </td>
        <td >
                <a href="https://www.facebook.com/" target="blank"><img class="social" title="facebook" src="/img/social media/facebook.jpeg" alt="Facebook" width="30px"></a>
                <a href="https://www.instagram.com/" target="blank"><img class="social" title="instagram" src="/img/social media/Instagram.jpeg" alt="Instagram" width="30px"></a>
                <a href="https://www.twitter.com/" target="blank"><img class="social" title="twitter" src="/img/social media/twitter.jpeg" alt="twitter" width="30px"></a>
              <br><br><br><br><br>
        </td>
    </tr>
</table>		

<hr width="100%">	
    
<p align="center">© 2022 Arai (Pvt)Ltd.
    <br>All rights reserved
</p>						

</footer>

    {{-- Javascript --}}
    <script src="/js/script.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>