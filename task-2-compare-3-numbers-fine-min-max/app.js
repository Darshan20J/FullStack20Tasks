const inpNum1 = document.getElementById('num-1');
const inpNum2 = document.getElementById('num-2');
const inpNum3 = document.getElementById('num-3');

// Btn 
const btn = document.getElementById('check');

btn.addEventListener('click', () => {
    const value1 = inpNum1.value;
    const value2 = inpNum2.value;
    const value3 = inpNum3.value;
    const nums = [value1, value2, value3];
    nums.sort((a, b) => a - b);

    if ((value1 === "") || (value2 === "") || (value3 === "")) {
        alert("Please Enter all the fields");
    } else {
        const max = Math.max(...nums);
        const min = Math.min(...nums);

        alert(`Minimum: ${min} Maximum: ${max}`);
    }
})
