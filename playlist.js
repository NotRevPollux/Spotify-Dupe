function loadPlaylist() {
    const playlistElement = document.getElementById('playlist');
    const playlist = JSON.parse(localStorage.getItem('playlist')) || [];

    playlist.forEach((song, index) => {
        const row = document.createElement('tr');

        const numberCell = document.createElement('td');
        numberCell.textContent = index + 1;
        row.appendChild(numberCell);

        const titleCell = document.createElement('td');
        const titleLink = document.createElement('a');
        titleLink.href = song.url;
        titleLink.textContent = song.title;
        titleCell.appendChild(titleLink);
        row.appendChild(titleCell);

        const artistCell = document.createElement('td');
        artistCell.textContent = song.artist;  
        row.appendChild(artistCell);

        const lengthCell = document.createElement('td');
        lengthCell.textContent = song.length;
        row.appendChild(lengthCell);

        playlistElement.appendChild(row);
    });


    document.getElementById('clearPlaylist').addEventListener('click', function() {
       
        localStorage.removeItem('playlist');
       
        playlistElement.innerHTML = '';
    });
}


window.onload = loadPlaylist;
