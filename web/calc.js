/**
 * Created by pavel on 07.04.15.
 */

function calc(price) {
    var oblast = document.getElementById("oblast");
    var dvigatel = document.getElementById("dvigatel");
    var fran = document.getElementById("fran");
    var price = 0;
    price = 180 * zona.value * dvigatel.value * 1.35 * fran.value;
    if (price > 600) {
        price = price * 0.8;
    } else if (price > 400) {
        price = price * 0.85;
    }
    result.innerHTML = price.toFixed(2);
}