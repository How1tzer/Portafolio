// movies.js
new Vue({
    el: '#app',
    data: {
        movies: [],
    },
    created() {
        // Aquí puedes utilizar la API de moviedb para obtener la lista de películas y asignarlas a this.movies.
        // Puedes hacer solicitudes HTTP utilizando la API Key y el API Read Access Token que proporcionaste.
        // Ejemplo:
        const apiKey = 'fcee60ab977b95184902878571d03a39';
        const accessToken = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmY2VlNjBhYjk3N2I9NTE4NDkwMjg3ODU3MWQwM2EzOSIsInN1YiI6IjY1MTRiNzhlMWRiNjVkMDBlMzFiZTJiMSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.UALL50lRScUMMKBPzfd5_XLnmMevzogL6aTQAwRQNBI';

        fetch(`https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}`, {
            method: 'GET',
            headers: {
                Authorization: `Bearer ${accessToken}`,
            },
        })
        .then((response) => response.json())
        .then((data) => {
            this.movies = data.results;
        })
        .catch((error) => console.error('Error fetching movies:', error));
    }
});
