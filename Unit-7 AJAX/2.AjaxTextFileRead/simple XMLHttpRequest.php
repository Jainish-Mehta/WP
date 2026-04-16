<html>
    <head>
        <title>Ajax Text File Example</title>
    </head>
    <body>
        <h2>AJAX TEXT FILE EXAMPLE</h2>
        <button onclick="loadData()">Load Data</button>
        <div id="output"></div>
        <script>
            function loadData(){
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("output").innerHTML = this.responseText;
                    }
                    else if(this.readyState == 4 && this.status != 200){
                        document.getElementById("output").innerHTML = "Error loading data.";
                    }
                }
                xhr.open("POST","data.txt",true);
                xhr.send();
            }
        </script>
    </body>
</html>