// function getFocus() {
//   document.querySelectorAll(".input").focus();
// }
// const inputs = document.querySelectorAll(".input");

// function addcl() {
//   let parent = this.parentNode.parentNode;
//   parent.classList.add("focus");
// }

// function remcl() {
//   let parent = this.parentNode.parentNode;
//   if (this.value == "") {
//     parent.classList.remove("focus");
//   }
// }

// inputs.forEach((input) => {
//   input.addEventListener("focus", addcl);
//   input.addEventListener("blur", remcl);
// });
/*Menu desplegable*/
const $detailsList = document.querySelectorAll("details");
$detailsList.forEach(($details) => {
  $details.querySelector("summary").addEventListener("click", expand);
});
function expand() {
  $detailsList.forEach(($details) => {
    $details.removeAttribute("open");
  });
}
/*Fin menu despegable */
/*Modal*/
function primerForm() {
  document.getElementById("container-Modal").style.display = "flex";
  document.getElementById("container-Modal2").style.display = "none";
}
function segundoForm() {
  document.getElementById("container-Modal").style.display = "none";
  document.getElementById("container-Modal2").style.display = "flex";
}
