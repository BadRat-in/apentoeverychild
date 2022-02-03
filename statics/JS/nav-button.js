const sleep = (delay) => new Promise((resolve) => setTimeout(resolve, delay));

let opendrawer = async (str) => {
  let menu_view = document.getElementById(str).style;
  if (menu_view.display === "flex") {
    menu_view.animation = "slide-right 300ms ease-in";
    menu_view.right = "-100vw";
    await sleep(300);
    menu_view.display = "none";
  } else {
    menu_view.display = "flex";
    menu_view.animation = "slide-left 300ms ease-in";
    menu_view.right = "-3vw";
  }
  
  for (var i; i < 5; i++) {}
};

let closedrawer = async (str, homediv, payment) => {
  homediv.style.display = "block";
  payment.style.display = "none";
  let menu_view = str.style;
  menu_view.animation = "slide-right 300ms ease-in";
  menu_view.right = "-100vw";
  await sleep(300);
  menu_view.display = "none";
};


let hidePopUp = async() => {
  let popUp = document.querySelector("#popUp");
  popUp.style.animation = "hide-pop-up 300ms ease-out";
  await sleep(300);
  popUp.style.display = "none";
}