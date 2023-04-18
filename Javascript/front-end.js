

function displaynav() {
    if (forjs.style.display != 'none') {

        forjs.style.display = 'none'
    }
    else if(forjs.style.display == 'none'){
        forjs.style.display = 'block'
    }
}

function display() {
    if(dropdown1.style.display != 'none') {

        dropdown1.style.display = 'none'
    }
    else{
        dropdown1.style.display = 'block'
    }
}

function display2() {
    if (dropdown2.style.display != 'none') {

        dropdown2.style.display = 'none'
    }
    else{
        dropdown2.style.display= 'block'
    }
}
// function makingnone(){
//     if(dropdown1.style.display != 'none') {

//         dropdown1.style.display = 'none'
//     }
//     if(dropdown2.style.display != 'none') {

//         dropdown2.style.display = 'none'
//     }
// }






// window.addEventListener('mouseup', function (event) {
//     var box = document.getElementById('dropdown1');
//     
//     if (event.target != box) {
//         box.style.display = 'none';
//     }
// });
// window.addEventListener('mouseup', function (event2) {
//     var box = document.getElementById('dropdown2');
//     if (event2.target != box) {
//         box.style.display = 'none';
//     }
// });