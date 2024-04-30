let flag = true;
document.getElementById("myButton").onclick = function () {
    flag = !flag;
    if (flag) {
        document.getElementById("hacked").innerHTML = "";
    }
    else {
        let img = document.createElement("img");
        img.src = "https://cont.ws/uploads/pic/2020/12/2c365e3d03f0bdf766dad.png";
        document.getElementById("hacked").appendChild(img);
    }
}