document.addEventListener('DOMContentLoaded', (event) => {
    document.body.style.backgroundColor = '#FFC0CB';

    // Styling for images
    const imageDisplay = document.getElementById('image-display');
    if (imageDisplay) {
        imageDisplay.style.display = 'flex';
        imageDisplay.style.justifyContent = 'center';
        imageDisplay.style.flexDirection = 'column';
        imageDisplay.style.alignItems = 'center';
    }

    fetch('https://nekos.best/api/v2/neko')
    .then(response => {
        if (!response.ok) {
            throw new Error('ERROR');
        }
        // Parse the JSON from the response
        return response.json(); 
    })
    .then(json => {
        displayImage(json.results[0].url); 
    })
    .catch(error => {
        console.error('There was an issue fetching the neko image:', error);
        document.getElementById('image-display').innerText = 'Failed to load image';
    });
});

// Styling for the images
function displayImage(imageUrl) {
    const displayElement = document.getElementById('image-display');
    
    // Clear any previous content
    displayElement.innerHTML = '';

    // Create an image element
    const img = document.createElement('img');
    img.src = imageUrl;
    img.alt = 'Cute Neko';
    img.style.maxWidth = '500px';
    img.style.maxHeight = '500px';
    img.style.objectFit = 'cover';

    // Append the image to the display container
    displayElement.appendChild(img);
}

