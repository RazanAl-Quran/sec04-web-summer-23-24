function sum() {
    let num1 = parseInt(document.getElementById('number1').value);
    console.log(num1);
    console.log(typeof num1);
    
    
    let num2 = parseInt(document.getElementById('number2').value);
    console.log(num2);

    let sumTwoNum = num1+num2;

    document.getElementById('result').value= sumTwoNum;

}

function multiply() {
    let num1 = parseInt(document.getElementById('number1').value);
    console.log(num1);
    console.log(typeof num1);
    
    
    let num2 = parseInt(document.getElementById('number2').value);
    console.log(num2)

    alert("the result= " + num1*num2)

}