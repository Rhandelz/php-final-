//visibily of password
color();

let v_btn = document.getElementById("visible");
let pass = document.getElementById("password");

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

let moon = document.getElementById("moon");
let bol = false;

moon.addEventListener("click", (e) => {
  e.stopPropagation();
  localStorage.setItem("night", JSON.stringify(bol));
  bol = !bol;

  color();
});

let inn = document.querySelectorAll("input");

function color() {
  let styleSS = JSON.parse(localStorage.getItem("night"));

  document.querySelector("body").style.backgroundColor = styleSS
    ? "#1E1E1E"
    : "white";

  let icon = document.querySelectorAll("#icons");
  let nav_name = document.querySelectorAll("#nav_name");

  for (let i = 0; i < icon.length; i++) {
    icon[i].style.color = styleSS ? "white" : "black";
  }
  for (let i = 0; i < nav_name.length; i++) {
    nav_name[i].style.color = styleSS ? "white" : "black";
  }

  for (let i = 0; i < inn.length; i++) {
    inn[i].style.border = styleSS
      ? "border:1px solid white"
      : " border: 1px solid gray;";
  }

  document.querySelector("form").style.color = styleSS ? "white" : "black";
}
