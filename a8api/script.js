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

// Displaying the API images
function displayImage(imageUrl) {
    const displayElement = document.getElementById('image-display');
    
    // Clear any previous content
    displayElement.innerHTML = '';

    // Create an image element
    const img = document.createElement('img');
    img.src = imageUrl;
    img.alt = 'Cute Neko';

    // Append the image to the display container
    displayElement.appendChild(img);
}