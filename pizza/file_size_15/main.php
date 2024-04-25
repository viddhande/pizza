<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Size Calculator</title>
</head>
<body>
    <h1>File Size Calculator</h1>

    <input type="file" id="fileInput">

    <div id="fileSizeResult" style="display: none;">
        <p>Selected file size: <span id="fileSize"></span> bytes</p>
    </div>

    <div id="warningMessage" style="display: none;">
        <p>Warning: Selected file size exceeds 10 MB.</p>
    </div>

    <script>
        // Function to calculate and display file size
        function calculateFileSize() {
            // Get the selected file
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];

            // Check if a file is selected
            if (file) {
                var fileSize = file.size; // File size in bytes

                // Display the file size
                var fileSizeElement = document.getElementById('fileSize');
                fileSizeElement.textContent = fileSize;

                // Show the file size result
                document.getElementById('fileSizeResult').style.display = 'block';

                // Perform conditional execution based on file size
                if (fileSize > 1024 * 1024 * 10) { // Check if file size exceeds 10 MB
                    // Show warning message if file size exceeds threshold
                    document.getElementById('warningMessage').style.display = 'block';
                } else {
                    // Hide warning message if file size is within acceptable range
                    document.getElementById('warningMessage').style.display = 'none';
                }
            } else {
                // Hide the file size result and warning message if no file is selected
                document.getElementById('fileSizeResult').style.display = 'none';
                document.getElementById('warningMessage').style.display = 'none';
            }
        }

        // Event listener for changes to the file input
        document.getElementById('fileInput').addEventListener('change', calculateFileSize);
    </script>
</body>
</html>
