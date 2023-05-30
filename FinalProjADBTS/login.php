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
            <li>
                <a href="./index.php">
                <span class="material-symbols-outlined " id="icons">home</span>
                    <h2 id="nav_name" >Home</h2>
                </a>
                
            </li>
            <li  >
                <a href="./about.php">
                    <span class="material-symbols-outlined " id="icons">page_info</span>
                    <h2 id="nav_name">About</h2>
                </a>
             
            </li>
            <li>
                <a href="./note.php">
                <span class="material-symbols-outlined" id="icons">note_alt</span>
                    <h2 id="nav_name">Note</h2>
                </a>
             
            </li>
            <li class="bg">
                <a href="./login.php">
                <span class="material-symbols-outlined active">person</span>
                    <h2 class="active">Login</h2>
                </a>
            </li>
        </ul>

        <footer>
            <h2>You is Log in</h2>
        </footer>
    </nav>

    <div class="main_log">
        <form action="">

        <span>
            <img src="./asset/mainlogo.svg" alt="">
             <h1>Note Inventory</h1>
        </span>
           
            
            <span>
                 <input type="text" name="username" id="username" placeholder =" " required>
                 <label for="username" >username</label>
            </span>

            <span>
                 <input type="password" name="password" id="password" placeholder =" " required>
                 <span class="material-symbols-outlined" id="visible">
visibility
</span>
                 <label for="password" >password</label>
            </span>

            <input type="submit" value="Log in">

            <a href="./signup.php">SIGN UP</a>

        </form>
    </div>

        <script >
            //visibily of password


let v_btn = document.getElementById("visible");
let pass = document.getElementById("password");
let moon = document.getElementById("moon");
let bol = false;
color();

v_btn.addEventListener("click", (e) => {
  e.stopPropagation();

  if (v_btn.innerHTML === "visibility_off") {
    v_btn.innerHTML = "visibility";
  } else {
    v_btn.innerHTML = "visibility_off";
  }

  if (pass.type === "text") {
    pass.type = "password";
  } else {
    pass.type = "text";
  }
});



moon.addEventListener("click", (e) => {
  e.stopPropagation();
  localStorage.setItem("night", JSON.stringify(bol));
  bol = !bol;

  color();
});

let inn = document.querySelectorAll("input");

function color() {
  let styleSS = JSON.parse(localStorage.getItem("night"));

  
  moon.innerHTML = styleSS ? "light_mode" : "dark_mode"

            moon.style.color= styleSS ? "white" : ''

  document.querySelector("body").style.backgroundColor = styleSS
    ? "#1E1E1E"
    : "white";

  let icon = document.querySelectorAll("#icons");
  let nav_name = document.querySelectorAll("#nav_name");

  for (let i = 0; i < icon.length; i++) {
    icon[i].style.color = styleSS ? "white" : "";
  }
  for (let i = 0; i < nav_name.length; i++) {
    nav_name[i].style.color = styleSS ? "white" : "";
  }

  document.getElementById('password').style.color = styleSS ? "white" : 'black'
  document.getElementById('username').style.color = styleSS ? "white" : 'black'


  document.getElementById('nav_name').style.color = styleSS ? "white" : 'black'

  document.querySelector("form").style.color = styleSS ? "white" : "black";

 

}

        </script>
</body>
</html>