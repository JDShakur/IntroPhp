<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo Php</title>
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Js script Bootstrap -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
    
    <!--Bootstrap icon CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!--Custom Css-->
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,700&display=swap');
:root{
    --primaryColor:#101820;
    --secondeColor:#009bf9;
    --textColor:#f2faff;
    --gray:rgba(42,53,62,0.5);
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    list-style: none;

}
p{
    text-indent: 20px;
    text-align:justify;
}
body{
    font-family: 'Open Sans', sans-serif;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 5.5rem;
    background-image: url('https://i.pinimg.com/originals/08/11/32/0811327321a2ec7a1cd225f5ce1293d7.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-color: var(--primaryColor) ;
    color: var(--textColor) ;
}
#mainNavbar{
    background-color: var(--primaryColor)!important ;
    border-bottom: 1px solid var(--gray);
}
#mainNavbar .nav-item .nav-link{
    position: relative;
    color: var(--textColor);
}
#mainNavbar .nav-item .nav-link::after{
   content: '';
   position: absolute;
   width: 0;
   height: 2px;
   background-color: var(--secondeColor);
   bottom: -3px;
   left:0 ;
   transition: ease 0.40s;
   -webkit-transition: ease 0.40s;
   -moz-transition: ease 0.40s;
   -ms-transition:ease 0.40s;
   -o-transition: ease 0.40s;
}
#mainNavbar .nav-item .nav-link:hover::after{
    width: 100%;
}
.navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus{
    outline: none;
    box-shadow: none;
}
ul>li{
    padding-bottom: 10px;
}

.Art-sep{
    background-color: #000000ee;
    color: #fcfcfc;
    padding: 30px 10px 40px;
}
#hero{
    background-color: #060a0ee7;
}
a{
    text-decoration: none;
}
pre{
    color: purple;
    font-size: 1.1em;
}

   </style>
</head>