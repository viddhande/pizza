<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <h1>Fibonacci Series</h1>
    <label for="termCount">Enter the number of terms:</label>
    <input type="number" id="termCount" min="1" step="1">
    <button onclick="displayFibonacciSeries()">Generate Fibonacci Series</button>
    <p id="fibonacciSeries"></p>

    <script>
        // Function to generate Fibonacci series
        function generateFibonacciSeries(n) {
            var fibonacci = [];
            fibonacci[0] = 0;
            fibonacci[1] = 1;

            for (var i = 2; i < n; i++) {
                fibonacci[i] = fibonacci[i - 1] + fibonacci[i - 2];
            }

            return fibonacci;
        }

        // Function to display Fibonacci series on HTML page
        function displayFibonacciSeries() {
            var termCount = document.getElementById('termCount').value;
            var series = generateFibonacciSeries(termCount);
            var output = "Fibonacci Series up to " + termCount + " terms: " + series.join(', ');
            document.getElementById('fibonacciSeries').textContent = output;
        }
    </script>
</body>
</html>
