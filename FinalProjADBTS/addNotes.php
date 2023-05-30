
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notez</title>
    <link rel="icon"  href="./asset/mainlogo.svg">
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
            <li >
                <a href="./index.php">
                <span class="material-symbols-outlined " id="icons">home</span>
                    <h2  id="nav_name">Home</h2>
                </a>
                
            </li>
            <li>
                <a href="./about.php">
                    <span class="material-symbols-outlined " id="icons">page_info</span>
                    <h2 id="nav_name">About</h2>
                </a>
              
            </li>
            <li class="bg">
                <a href="">
                <span class="material-symbols-outlined active">note_alt</span>
                    <h2 class="active">Note</h2>
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
        </footer>
    </nav>

    <div class="main_note_add">
        <form action="./insert.php" method="post">
    
        <span>
           <h1 id="main_note_title">
           <img src="./asset/mainlogo.svg" alt=""> 
          Add your Note</h1> 
        </span>

        <input type="text" id="title" name="title" placeholder="title" maxlength="17">
        
        <textarea name="content" id="content" cols="30" rows="10" placeholder="content here"></textarea>

        <input type="submit" class="subsub" value="add"> 
        <a href="./note.php">cancel</a>
        </form>
        
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


            document.getElementById('nav_name').style.color = styleSS ? "white" : '' 

            document.querySelector('#main_note_title').style.color = styleSS ? "white" : ''
            
            
        }

    </script>

</body>
</html>