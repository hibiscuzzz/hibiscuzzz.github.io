document.addEventListener('DOMContentLoaded', function() {
    // Define the URL and data for the API request
    var url = "http://colormind.io/api/";
    var data = {
        model: "default",
        input: [[44,43,44],[90,83,82],"N","N","N"]
    };

    // Create a new XMLHttpRequest
    var http = new XMLHttpRequest();

    // Set up what to do when the response is received
    http.onreadystatechange = function() {
        // Check if the request is complete and was successful
        if(http.readyState == 4 && http.status == 200) {
            // Parse the response JSON and get the palette data
            var palette = JSON.parse(http.responseText).result;
            
            // Select the container where results will be displayed
            var resultsContainer = document.getElementById('results');
            // Clear any previous results
            resultsContainer.innerHTML = '';
            
            // Loop through the palette array and create a div for each color
            palette.forEach(color => {
                var colorDiv = document.createElement('div');
                colorDiv.style.width = '100px';
                colorDiv.style.height = '100px';
                colorDiv.style.float = 'left';
                colorDiv.style.margin = '5px';
                colorDiv.style.backgroundColor = `rgb(${color.join(',')})`;
                resultsContainer.appendChild(colorDiv);
            });
        }
    };

    // Open a new connection, using the POST request on the URL endpoint
    http.open("POST", url, true);
    http.setRequestHeader("Content-Type", "application/json");

    // Send the request with the data
    http.send(JSON.stringify(data));
});
