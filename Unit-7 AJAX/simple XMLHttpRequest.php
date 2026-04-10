<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
    <script>
        function loadData() {
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("output").innerHTML = this.responseText;
                } else if (this.readyState === 4 && this.status !== 200) {
                    console.error("Error:", this.status, this.statusText);
                    document.getElementById("output").innerHTML = "Error loading data. Please try again later.";
                }
            };

            xhr.open("GET", "data.txt", true);
            xhr.send();
        }
    </script>
</head>

<body>

    <h2>Load Data via AJAX</h2>
    <button onclick="loadData()">Load Data</button>

    <div id="output"></div>

</body>

</html>