const weatherData = {
    "Jakarta": {
        temperature: 30,
        condition: "Cerah"
    },
    "Bandung": {
        temperature: 25,
        condition: "Hujan Ringan"
    },
    "Surabaya": {
        temperature: 33,
        condition: "Panas Terik"
    },
    "Tenggarong": {
        temperature: 23,
        condition: "Tidak panas, tidak dingin"
        
    },
    "Balikpapan": {
        temperature: 24,
        condition: "Sejuk"

    },
    "Samarinda": {
        temperature: 28,
        condition: "Mendung"
    }
};

function displayWeather() {
    const cityInput = document.getElementById('cityInput');
    const cityName = cityInput.value.trim();
    
    const cityKey = Object.keys(weatherData).find(
        key => key.toLowerCase() === cityName.toLowerCase()
    );
    
    if (cityKey) {
        const weather = weatherData[cityKey];
        console.log(`Cuaca di ${cityKey}:`);
        console.log(`Suhu: ${weather.temperature}°C`);
        console.log(`Kondisi: ${weather.condition}`);
    } else {
        console.log(`Data cuaca untuk kota "${cityName}" tidak ditemukan.`);
    }
}

document.getElementById('showWeatherBtn').addEventListener('click', displayWeather);

document.getElementById('cityInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        displayWeather();
    }
});