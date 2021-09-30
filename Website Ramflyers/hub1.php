<!DOCTYPE html>
<html>
    <head>
        <title>
            Hubungi Kami | Ramflyers
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script>

$(document).ready(function() {
            document.getElementById("test").style.visibility="hidden";
            $(".toggle-button").click(function() {
$(this).parent().find("input").slideToggle(function() {
    document.getElementById("myInput").style.visibility ="visible";
    
$(this).parent().find("button").slideToggle(function() {
    document.getElementById("submit").style.visibility ="visible";
    
$(this).parent().find("ul").slideToggle(function() {
    document.getElementById("myUL").style.visibility ="hidden";
});
  
    
});
});
});
$(".toggle-enter").click(function() {
$(this).parent().find("ul").slideToggle(function() {
    document.getElementById("myUL").style.visibility ="visible";
});
});
        })
        </script>
        <script>
            function myFunction() {
              // Declare variables
              var input, filter, ul, li, a, i, txtValue;
              input = document.getElementById('myInput');
              filter = input.value.toUpperCase();
              ul = document.getElementById("myUL");
              li = ul.getElementsByTagName('li');
            
              // Loop through all list items, and hide those who don't match the search query
              for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  li[i].style.display = "";
                } else {
                  li[i].style.display = "none";
                }
              }
}
            
            </script>
        <style>
            ::-webkit-scrollbar {
                width: 10px;
             }
             ::-webkit-scrollbar-track {
                background: #f1f1f1; 
            }
            ::-webkit-scrollbar-thumb {
                background: #888; 
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #555; 
            }
            body{
                max-width: 200%;
                margin:auto;
                background-image: url('tetrisblack.jpg');
            }
            html{
                scroll-behavior: smooth;
            }
            .header{
                z-index: 999;
                background-color: black;
                width:100%;
                float:left;
                height:100px;
                display: flex;
                margin-top: -18px;
                position:fixed;
                border-color:white;
                border-style:none none solid none;
                border-width:thick;
            }
            .img{
                margin-left:20px;
                margin-top:10px;
                margin-bottom: 10px;
                padding: 10px;
                float:left;
                padding:10px;
            }
            .forgodsake{
                float:left;
                background-color: rgb(0, 0, 0);
                color:#fff;
                padding:100px;
                margin-right:50px;
                margin-left: -30px;
                margin-top: 2px;
                
                height:32px;
                list-style: none;
                padding:25px;
                font-size: 20spx;
                font-family:"Nunito Sans";
            }
            .forgodsake:hover{
                background-color: rgb(0, 0, 0);
                cursor:default;
            }
            .list{
                float:left;
                background-color: rgb(0, 0, 0);
                color:#fff;
                padding:25px;
                height:34px;
                list-style: none;
                padding:25px;
                margin-top: 0px;
                display: flex;
                flex-direction: column;
                filter:drop-shadow();
                transition: 0.7s ease-in-out;
                font-family:"Nunito Sans"; 
            }
            .list:hover{
                background-color:rgb(53, 54, 54);
                padding:25px;
            }
            .searchbar #test li{
                line-height: 25px;
                list-style: none;
            }
            .searchbar #test{
                position:absolute;
                top:90px;
                right:25px;
                margin-top:10px;
                padding-inline-start: 20px;
            }
            .searchbar{
                max-width: 35px;
            }
            .searchbar input{
                height: 30px;
                width:180px;
                border-style: solid;
                border-color:pink;
                border-width: 5px;;
                border-radius: 10px 0 0 0;
                font-family: "Nunito Sans";
                padding:5px;
            }
            .searchbar #submit{
                background-color: white;
                color:black;
                border-width: 5px;
                border-style: solid;
                border-color:pink;
                padding:5px;
                border-radius: 0 10px 0 0;
            }
            #myUL{
                background-color: black;
                padding:10px;
                border-style:solid;
                border-color: pink;
                border-width: 5px;
                border-radius: 0 0 10px 10px;
                font-family: "Nunito Sans";
                position:absolute;
                left:7.4%;
                top:100%;
                width:80.5%;
                max-height:300px;
                overflow-y:auto;

            }
            #myUL a{
                color: white;
                line-height:10px;
                padding:10px;
                margin:0;
            }
            #myUL ul{
                
            }
            #myUL li{
                background-color:black;
                margin:0;
                border-style:none none solid none;
                border-width:thin;
                border-color:pink;
                width:74%;
            }
            #myUL li:hover{
                background-color:rgb(53, 54, 54);
            }
            #test{
                float:left;
                position:absolute;
                left:78%;
            }
            #test ul{
                float:none;
            }
            #submit{
                float:left;
                height:50px;
                line-height:30px;
                width:20%;
                font-family:"Nunito Sans";
                text-align:center;
            }
            #submit:hover{
                cursor:pointer;
            }
            #myInput{
                float:left;
            }
            nav{
                margin:16px 0;
                background-color:#ffffff;
            }
            nav ul{
                padding:0 ;
                margin:0 ;
                list-style:none;
                position:relative;
            }
            nav ul li{
               
                float:left;
                background-color: rgb(0, 0, 0);
                color:#fff;
                padding:25px;
                height:34px;
                list-style: none;
                padding:25px;
                margin-top: 0px;
                display: flex;
                flex-direction: column;
                filter:drop-shadow();
                transition: 0.7s ease-in-out;
                font-family:"Nunito Sans";
                
            }
            nav ul li:hover{                
                background-color:rgb(53, 54, 54);
            }
            nav a{
                display:block;
                padding: 0;
                color:#ffffff;
                font-size:20px;
                line-height:40px;
                text-decoration:none;
            }
            nav ul ul{
                display:none;
                position:absolute;
                top:84px;
                right:-380px;
                width:500px;
            }
            nav ul li:hover > ul{
                display:inherit;
            }
            nav ul ul li{
                
                float:left;
                background-color: rgb(0, 0, 0);
                color:#fff;
                padding:25px;
                height:34px;
                list-style: none;
                padding:25px;
                margin-top: 0px;
                display: flex;
                flex-direction: column;
                filter:drop-shadow();
                transition: 0.7s ease-in-out;
                font-family:"Nunito Sans";
                
            }
            li > a:only-child:after{
                content: "";
            }
            .ramflytomenu{
                margin:0 0 0 40px;
            }
            .f{
                font-size: 72px;
                color: rgb(242, 120, 141);
            }
            .f2{
                font-size: 20px;
                color: white
            }
            .f3{
                font-size: 30px;
                color: black;
            }
            .box{
                box-sizing:border-box;
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                border:thick solid whitesmoke;
                border-radius: 10px;
                background-color: rgb(242, 120, 141);
                width: 31%;
                padding: 15px;
                text-decoration: none;
                box-shadow: 0 0 1.7em 0 #ffffff;
            }
            .h{
                border: thin solid black;
                border-radius: 999px;
                background-color: white;
            }
            input{
                border-radius: 4px;
                outline: none;
                border: none;
            }
            .i{
                background-color: rgb(242, 120, 141);;
                color: black;
                margin-left: -2px;
            }
            .info{
                background-color:darkgrey;
            }
            ::placeholder{
                color: rgb(78, 78, 78);
            }
            .s{
                border: 2px solid black;
                background-color: rgb(255, 96, 123);
                box-shadow: 0 0 0.5em 0 black;
                width: 150px;
                height: 50px;
            }
            .s:hover{
                cursor: pointer;
                background-color: rgb(235, 90, 114);
                border: 1px solid black;
                box-shadow: 0 0 0.2em 0 black;
            }
            .ukuran{
                font-size: 20px;
                font-family: "Nunito Sans";
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <div>
                <img class="img" src="logo-removebg-preview.png" width="75px" height="75px">
            </div>
            <div class="ramflytomenu">
                
            <nav>
            <ul>
                <li class="forgodsake">
                    <b>Ramflyers</b>
                </li>
                <div style="margin-left: 835px;">
                <li>
                    <a href="home1.php">Home</a>
                </li>
                <li>
                    <a href="info1.php">Info</a>
                </li>
                <li class="info">
                    <a href="hub1.php">Hubungi Kami</a>
                </li>        
                <li>
                    <div class=searchbar>
                    <a class="toggle-button" href="#">
                            <img src="search_button.png" width="26" height="26">
                        </a>
                                <div id="test">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tutorial">
                              <button type="button" onclick="document.getElementById('myUL').style.visibility ='visible';" class="toggle-enter" id="submit">CARI</button>
                            
                              <ul id="myUL">
                                  <li><a href="#">Tutorial 1</a></li>
                                  <li><a href="#">Tutorial 2</a></li>
                                
                                  <li><a href="#">Tutorial 3</a></li>
                                  <li><a href="#">Tutorial 4</a></li>
                                
                                  <li><a href="#">Tutorial 5</a></li>
                                  <li><a href="#">Tutorial 6</a></li>
                                  <li><a href="#">Tutorial 7</a></li>
                                </ul>
                              </div>
                    </div>
                        </li>
        
                <li class="list">
                    
                <a href="#">
                  <img src="more_button.png" width="30" height="25">
                </a>
                <ul>
                    <li class="list">
                <a href="index.html">Log Out</a>
                </li>
                </ul>
                </li> 
            </div>
            </ul>
            
            </nav>
        </div>
        </div>
        <center>
            <br><br><br><br><br>
            <span class="f">Contact Us</span><br>
            <span class="f2">Want To Ask Something?</span>
            <br><br><br>
            <form method="POST" action="simpan1.php">
            <div class="box">
                <p class="f3">Fill Here</p>
                <br><br>
                <input type="text" name="nama" placeholder="Your Name" autocomplete="off" size="50" class="i"><hr class="h">
                <br><br>
                <input type="text" name="email" placeholder="Your Email" autocomplete="off" size="50" class="i"><hr class="h">
                <br><br>
                <input type="text" name="subject" placeholder="Subject" autocomplete="off" size="50" class="i"><hr class="h">
                <br><br>
                <input type="text" name="message" placeholder="Message" autocomplete="off" size="50" class="i"><hr class="h">
                <br><br>
                <input type="submit" name="sendmymessage" value="Send My Message" class="s"><br><br>
            </div>
            <br><br><br>
        </center>
        <div class="ukuran">
            </form>
            <center>
                <br>
                &copy;2021 Ramfly Ramsend Incorporation. Ramflyers and the Ramflyers Logo are among our registered and unregistered trademarks in Southeast Asia and other countries.
                <br><br>
            </center>
        </div>
    </body>
</html>