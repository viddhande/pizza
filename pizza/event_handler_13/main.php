<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Handlers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Event Handlers</h1>
    <button id="clickButton">Click Me</button>
    <button id="mouseOverButton">Hover Over Me</button>
    <button id="mouseEnterButton">Mouse Enter</button>
    <button id="mouseLeaveButton">Mouse Leave</button>
    <button id="doubleClickButton">Double Click Me</button>
    <button id="keyPressButton">Press any Key</button>
    <p id="output"></p>

    <script>
        // Function to handle click event
        function handleClick() {
            var outputElement = document.getElementById('output');
            outputElement.innerText = 'Button clicked!';
        }

        // Function to handle mouse over event
        function handleMouseOver() {
            var outputElement = document.getElementById('output');
            outputElement.innerText = 'Mouse over button!';
        }

        // Function to handle mouse enter event
        function handleMouseEnter() {
            var outputElement = document.getElementById('output');
            outputElement.innerText = 'Mouse entered button!';
        }

        // Function to handle mouse leave event
        function handleMouseLeave() {
            var outputElement = document.getElementById('output');
            outputElement.innerText = 'Mouse left button!';
        }

        // Function to handle double click event
        function handleDoubleClick() {
            var outputElement = document.getElementById('output');
            outputElement.innerText = 'Button double clicked!';
        }

        // Function to handle key press event
        function handleKeyPress() {
            var outputElement = document.getElementById('output');
            outputElement.innerText = 'Key pressed!';
        }

        // Add event listeners to the buttons
        document.getElementById('clickButton').addEventListener('click', handleClick);
        document.getElementById('mouseOverButton').addEventListener('mouseover', handleMouseOver);
        document.getElementById('mouseEnterButton').addEventListener('mouseenter', handleMouseEnter);
        document.getElementById('mouseLeaveButton').addEventListener('mouseleave', handleMouseLeave);
        document.getElementById('doubleClickButton').addEventListener('dblclick', handleDoubleClick);
        document.getElementById('keyPressButton').addEventListener('keypress', handleKeyPress);
    </script>
</body>
</html>
