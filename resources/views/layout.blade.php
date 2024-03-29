<!doctype html>
<html lang="en">

<style type="text/css">
.dropdown {
  position: relative;
  top: 0px;
  left: 1280px;
}

h6{
  text-align: center; 
}


</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Dorm management system</title>
 

</html>
  <body>
    <div class="container-fluid">
    <div class="row" style="font-family: 'Gill Sans MT Condensed', serif;">
            <div class="col-sm-2" style="background-color: rgb(143, 206, 216);">
            <nav>
                <a class="navbar-brand" href='homeAdmin'><img src="https://www.iconpacks.net/icons/2/free-home-icon-2502-thumb.png" alt="" width="50"> </a>  <b style="font-size: 20px;" >DMS</b>
                </nav>
              
            </div>

            <div class="col-sm-2" style="background-color: rgb(91, 158, 165);">
            <nav>
                <a class="navbar-brand" href='hometodorm'><img src="{{ asset('images/dorm3.png')}}" alt="" width="50"> </a>  <b style="font-size: 20px;" >DORM</b>
                </nav>
            </div>

            <div class="col-sm-2" style="background-color: rgb(50, 142, 142);">
            <nav>
                <a class="navbar-brand" href='hometoroom'><img src="{{ asset('images/room3.png')}}" alt="" width="40"> </a>  <b style="font-size: 20px;" >ROOM</b>
                </nav>
            </div>

            <div class="col-sm-2" style="background-color: rgb(43, 119, 127);">
            <nav>
                <a class="navbar-brand" href='hometoacc'><img src="{{ asset('images/acc.png')}}" alt="" width="60"> </a>  <b style="font-size: 20px;  " >ACCOUNT</b>
                </nav>
            </div>

            <div class="col-sm-2" style="background-color: rgb(22, 99, 97);">   
    
            </div>

            <div class="col-sm-2" style="background-color: rgb(20, 80, 71);"class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('images/acc.png')}}" alt="" width="57">
                      </a>  
            <div class="dropdown-menu">  

                <a class="dropdown-item" href="#"><img src="https://cdn-icons-png.flaticon.com/512/3596/3596149.png" alt="" width="10">  LOG OUT </a>  

            
            </div>
  

            </div>
        </div>
    

          
              
                

       


              </nav>
            </div>
        </div>
       
        @yield('content')  
   
        <div class="container-fluid">

       
     <div class="row" style="background-color: rgb(49, 92, 94); color: rgb(177, 208, 224);">
     <div class="col-md-12">
       <h3 style="font-family: 'Gill Sans MT Condensed', serif; font-size: 50px; text-align: center;">CONTACT US</h3><br>
     </div>
     <div class="col-md-3">
       
     </div>
        <div class="col-md-4" style="margin-top: 20px; font-family: 'Gill Sans MT Condensed', serif; font-size: 30px;">
        <img src="https://icons.veryicon.com/png/o/miscellaneous/yuanql/icon-admin.png" alt="" width="25"> <Strong>System administrator</Strong><br>
          <img src="https://static.thenounproject.com/png/2978618-200.png" alt="" width="25"> Tan Yu Heng<br>
          <img src="{{ asset('images/phone.png')}}" alt="" width="22">   012-56678212 <br>
          <img src="https://cdn-icons-png.flaticon.com/512/4812/4812397.png" alt="" width="22"> tanyuheng@gmail.com
        </div>
        <div class="col-md-2" style="margin-top: 20px; font-family: 'Gill Sans MT Condensed', serif; font-size: 30px;">
        <img src="https://icons.veryicon.com/png/o/miscellaneous/yuanql/icon-admin.png" alt="" width="25"> <Strong>System administrator</Strong><br>
          <img src="https://static.thenounproject.com/png/2978618-200.png" alt="" width="25"> Liong Jing Kang<br>
          <img src="{{ asset('images/phone.png')}}" alt="" width="22">   018-33209621 <br>
          <img src="https://cdn-icons-png.flaticon.com/512/4812/4812397.png" alt="" width="22"> liong@gmail.com
        </div>

        <div class="col-md-12" style="margin-top: 20px;">
      <br><br><br> <h6> Copyright 2022© DMS. All rights reserved.</h6>
        </div>
        </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  -->
</body>
</html>