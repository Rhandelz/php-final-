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
                    <h2 id="nav_name">Home</h2>
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

    <div class="main_sign">
        <form action="">

        <span>
            
             <h1>Sign Up</h1>
        </span>

          <span>
                 <input type="text" name="sign_username" id="sign_username" placeholder =" " required>
                 <label for="sign_username" >username</label>
            </span>
           
            
            <span>
                 <input type="text" name="sign_password" id="sign_password" placeholder =" " required>
                 <label for="sign_password" >password</label>
            </span>

            <span>
                 <input type="password" name="confirm" id="confirm" placeholder =" " required>
                 <span class="material-symbols-outlined" id="visible_sign">
visibility
</span>
                 <label for="confirm" >confirm-password</label>
            </span>

            <input type="submit" value="Log in">

            <a href="./login.php">back to log in</a>

        </form>
    </div>

        <script >
            let v_btn_sign = document.getElementById("visible_sign");
let con_pass = document.getElementById("confirm");
let moon = document.getElementById("moon");
let bol = false;

v_btn_sign.addEventListener("click", (e) => {
  e.stopPropagation();

  if (v_btn_sign.innerHTML === "visibility_off") {
    v_btn_sign.innerHTML = "visibility";
  } else {
    v_btn_sign.innerHTML = "visibility_off";
  }

  if (con_pass.type === "text") {
    con_pass.type = "password";
  } else {
    con_pass.type = "text";
  }
});

            //visibily of password
color();




moon.addEventListener("click", (e) => {
  e.stopPropagation();
  localStorage.setItem("night", JSON.stringify(bol));
  bol = !bol;

  color();
});



function color() {
  let styleSS = JSON.parse(localStorage.getItem("night"));

   moon.innerHTML = styleSS ? "light_mode" : "dark_mode"

  moon.style.color= styleSS ? "white" : '' 

  document.querySelector("body").style.backgroundColor = styleSS
    ? "#1E1E1E"
    : "white";

  let icon = document.querySelectorAll("#icons");
  let nav_name = document.querySelectorAll("#nav_name");

  for(let i = 0; i < icon.length;i++){
       icon[i].style.color = styleSS ? "white" : ''
   }
   for(let i = 0; i < nav_name.length;i++){
          nav_name[i].style.color = styleSS ? "white" : ''
    }
  document.getElementById('nav_name').style.color = styleSS ? "white" : 'black'
  document.getElementById('sign_password').style.color = styleSS ? "white" : 'black'
  document.getElementById('sign_username').style.color = styleSS ? "white" : 'black'
  document.getElementById('confirm').style.color = styleSS ? "white" : 'black'

  document.querySelector("form").style.color = styleSS ? "white" : "black";

  document.querySelector("label").style.color = styleSS ? "white" : "black";

}


        </script>
</body>
</html>