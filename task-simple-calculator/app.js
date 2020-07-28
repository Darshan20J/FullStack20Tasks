// Get all components required for calculator
const btnAdd = document.getElementById('add')
const btnSub = document.getElementById('sub')
const btnMul = document.getElementById('mul')
const btnDiv = document.getElementById('div')
const disRes = document.getElementById('output');

btnAdd.addEventListener('click', function () {
    checkAllFields();
    let val1 = Number(document.getElementById('inp-1').value)
    let val2 = Number(document.getElementById('inp-2').value)
    disRes.innerText = val1 + val2
});

btnSub.addEventListener('click', function () {
    checkAllFields();
    let val1 = Number(document.getElementById('inp-1').value)
    let val2 = Number(document.getElementById('inp-2').value)
    disRes.innerText = val1 - val2
});

btnMul.addEventListener('click', function () {
    checkAllFields();
    let val1 = Number(document.getElementById('inp-1').value)
    let val2 = Number(document.getElementById('inp-2').value)
    disRes.innerText = val1 * val2
});

btnDiv.addEventListener('click', function () {
    checkAllFields();
    let val1 = Number(document.getElementById('inp-1').value)
    let val2 = Number(document.getElementById('inp-2').value)
    disRes.innerText = val1 / val2
});

function checkAllFields() {
    val1 = document.getElementById('inp-1').value
    val2 = document.getElementById('inp-2').value

    if (val1 === "" || val2 === "") {
        alert("Invalid Data Format\nSpecify Digits only");
        document.getElementById('inp-1').value = ""
        document.getElementById('inp-1').focus()
    }
}

btnClr = document.getElementById('clear').addEventListener('click', function () {
    document.getElementById('inp-1').value = ""
    document.getElementById('inp-2').value = ""
    document.getElementById('output').innerHTML = "RESULT"
})