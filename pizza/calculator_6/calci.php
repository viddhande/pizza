<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .calculator {
        max-width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    .display {
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        text-align: right;
        font-size: 20px;
    }
    .buttons {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }
    button {
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
    }
    button:hover {
        background-color: #e9e9e9;
    }
</style>
</head>
<body>

<div class="calculator">
    <div class="display" id="display">0</div>
    <div class="buttons">
        <button onclick="clearDisplay()">C</button>
        <button onclick="appendToDisplay('/')">/</button>
        <button onclick="appendToDisplay('*')">x</button>
        <button onclick="deleteLastDigit()">DEL</button>
        <button onclick="appendToDisplay('7')">7</button>
        <button onclick="appendToDisplay('8')">8</button>
        <button onclick="appendToDisplay('9')">9</button>
        <button onclick="appendToDisplay('-')">-</button>
        <button onclick="appendToDisplay('4')">4</button>
        <button onclick="appendToDisplay('5')">5</button>
        <button onclick="appendToDisplay('6')">6</button>
        <button onclick="appendToDisplay('+')">+</button>
        <button onclick="appendToDisplay('1')">1</button>
        <button onclick="appendToDisplay('2')">2</button>
        <button onclick="appendToDisplay('3')">3</button>
        <button onclick="calculateResult()">=</button>
        <button onclick="appendToDisplay('0')">0</button>
        <button onclick="appendToDisplay('.')">.</button>
    </div>
</div>

<script>
    function appendToDisplay(value) {
        var display = document.getElementById('display');
        if (display.textContent === '0' && value !== '.') {
            display.textContent = value;
        } else {
            display.textContent += value;
        }
    }

    function clearDisplay() {
        document.getElementById('display').textContent = '0';
    }

    function deleteLastDigit() {
        var display = document.getElementById('display');
        display.textContent = display.textContent.slice(0, -1);
        if (display.textContent === '') {
            display.textContent = '0';
        }
    }

    function calculateResult() {
        var display = document.getElementById('display');
        try {
            var result = eval(display.textContent);
            display.textContent = result;
        } catch (error) {
            display.textContent = 'Error';
        }
    }
</script>

</body>
</html>