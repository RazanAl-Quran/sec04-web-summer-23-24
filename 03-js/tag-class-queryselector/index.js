function changeBackground() {
    // let allPs = document.getElementsByTagName('p');
    // let allPs = document.getElementsByClassName('matrix');
    let allPs = document.querySelectorAll('.matrix');
    console.log(allPs);
    allPs[0].style.backgroundColor = 'aqua';
    allPs[0].style.color = 'red';
    allPs[1].style.backgroundColor = 'blue';
    allPs[2].style.backgroundColor = 'yellow';
}

function reset() {
    let allPs = document.getElementsByTagName('p');
    console.log(allPs);
    allPs[0].style.backgroundColor = '';
    allPs[1].style.backgroundColor = '';
    allPs[2].style.backgroundColor = '';
}
// ===