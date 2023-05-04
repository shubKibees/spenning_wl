function rotateFunction() {
  var min = 1024;
  var max = 9999;
  var deg = Math.floor(Math.random() * (max - min)) + min;
  document.getElementById("box").style.transform = "rotate(" + deg + "deg)";
}
var element = document.getElementById("mainbox");
element.classList.remove("animate");
setTimeout(function () {
  element.classList.add("animate");
}, 5000);

document.getElementsByClassName("spin")[0].addEventListener("click", () => {
  console.log(this);
  rotateFunction();
});
const distance_from_arrow = [0, 0, 0, 0, 0, 0, 0, 0];
const arrow = document.getElementsByClassName("arrow");
const arrow_rect = arrow[0].getBoundingClientRect();
const arrow_x = arrow_rect.left;
const arrow_y = arrow_rect.top;
document.getElementsByClassName("spin")[0].addEventListener("click", () => {
  let i = 0;
  for (const data of document.getElementsByClassName("span")) {
    const rect = data.getBoundingClientRect();
    let x = rect.left;
    let y = rect.top;
    let distance = Math.sqrt(
      Math.pow(x - arrow_x, 2) + Math.pow(y - arrow_y, 2)
    );
    distance_from_arrow[i] = distance;
    i++;
  }
  let distance_min_value = Math.min(...distance_from_arrow);
  let index = distance_from_arrow.indexOf(distance_min_value);
  console.log(index);
});
