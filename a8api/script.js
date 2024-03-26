fetch('https://nekos.best/api/v2/neko')
.then(response => {
    if (!response.ok) {
        throw new Error('ERROR');
    }
    return response.json(); // Parse the JSON from the response
})
.then(json => {
    displayImage(json.results[0].url); // Assuming the API response structure includes results
})
.catch(error => {
    console.error('There was an issue fetching the neko image:', error);
    document.getElementById('image-display').innerText = 'Failed to load image';
});

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
