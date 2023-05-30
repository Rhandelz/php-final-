<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notez</title>
    <link rel="icon" href="./asset/mainlogo.svg">

     <link rel="stylesheet" type="text/css" href="./style/stylr.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<span class="material-symbols-outlined" id="moon">
dark_mode
</span>
    <nav class="nav">
        <div class="logo-div">
            <img src="./asset/mainlogo.svg" alt="">
            <h2 id="nav_name">Note Inventory</h2>
        </div>
        
            <hr>

        <ul class="navigation">
            <li class="bg">
                <a href="">
                <span class="material-symbols-outlined active">home</span>
                    <h2 class="active">Home</h2>
                </a>
                
            </li>
            <li>
                <a href="./about.php" >
                    <span class="material-symbols-outlined" id="icons">page_info</span>
                    <h2 id="nav_name">About</h2>
                </a>
              
            </li>
            <li>
                <a href="./note.php">
                <span class="material-symbols-outlined" id="icons">note_alt</span>
                    <h2 id="nav_name">Note</h2>
                </a>
             
            </li>
            <li>
                <a href="./login.php">
                <span class="material-symbols-outlined" id="icons">person</span>
                    <h2 id="nav_name">Login</h2>
                </a>
            </li>
        </ul>

        <footer>
            <h2>You is Log in</h2>

            <a href="<?php $isLogIn=false; ?>"> 
                <span class="material-symbols-outlined">
                   power_settings_new
                </span>
            </a>
        </footer>
    </nav>

    <div class="main">
        <div class="left">
            <h1>NOTE<br>INVENTORY </h1>
            <p>Welcome to Note Invenory , here you gonna experience a fast and accesible note , you can list your to-do here. </p>

         <div class="btn">
               <a href="./login.php">Log In</a>
              <a href="./about.php">Info</a>
         </div>

        </div>

        <div class="rigth">
            <img src="./asset/mainlogo.svg" alt="">
        </div>
        
    </div>

    <script>
        let moon = document.getElementById('moon');
        let bol = false
        
        color()

        moon.addEventListener('click',()=>{
            localStorage.setItem('night',JSON.stringify(bol))
            bol = !bol

            color()


        })

        

        function color(){
            let styleSS = JSON.parse(localStorage.getItem('night'))

            moon.innerHTML = styleSS ? "light_mode" : "dark_mode"

            moon.style.color= styleSS ? "white" : ''

            document.querySelector('body').style.backgroundColor = styleSS ? "#1E1E1E" : 'white'

            let icon = document.querySelectorAll('#icons')
            let nav_name = document.querySelectorAll('#nav_name')

            for(let i = 0; i < icon.length;i++){
                icon[i].style.color = styleSS ? "white" : ''
            }
            for(let i = 0; i < nav_name.length;i++){
                nav_name[i].style.color = styleSS ? "white" : ''
            }


            document.getElementById('nav_name').style.color  

            document.querySelector('.main').style.color = styleSS ? "white" : ''
            
            
        }

     




    </script>
</body>

    

</html>