<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Popup</title>
    <style>
        /* Notification Popup CSS */
        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 5px;
            color: #fff;
            text-align: center;
        }

        .popup-container h2 {
            margin-top: 0;
        }

        .close-btn {
            position: absolute;
            top: 5px;
            right: 10px;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Notification Popup HTML -->
    <div class="popup-container" id="popupContainer">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>Notification</h2>
        <p>This is a notification popup.</p>
    </div>

    <button onclick="showPopup()">Show Notification</button>

    <script>
        // JavaScript function to show notification popup
        function showPopup() {
            var popup = document.getElementById("popupContainer");
            popup.style.display = "block";
            setTimeout(function(){
                popup.style.display = "none";
            }, 3000); // Close popup after 3 seconds
        }

        // JavaScript function to close notification popup
        function closePopup() {
            var popup = document.getElementById("popupContainer");
            popup.style.display = "none";
        }
    </script>

</body>
</html>