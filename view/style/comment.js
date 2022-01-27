
let togg1 = document.getElementById("modifier");
let edit = document.getElementById("edit");
togg1.addEventListener("click", () => {
  if(getComputedStyle(edit).display != "none"){
    edit.style.display = "none";
  } else {
    edit.style.display = "block";
  }
})

