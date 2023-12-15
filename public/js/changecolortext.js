document.addEventListener('DOMContentLoaded', function() {
    changeColor('durability');
    changeColor('offence');
    changeColor('ability');
    changeColor('difficulty');
});

function changeColor(id) {
    var score = document.getElementById(id);
    var value = parseInt(score.textContent);
    if(id=='difficulty'){
        if (value >= 80) {
            // score.text.fontcolor("#fffff")
            score.classList.add('red');
        } else if (value >= 50) {
            score.classList.add('orange');
        } else {
            score.classList.add('green');
        }
    } else {

        if (value >= 80) {
            // score.text.fontcolor("#fffff")
            score.classList.add('green');
        } else if (value >= 50) {
            score.classList.add('orange');
        } else {
            score.classList.add('red');
        }
    }
}
