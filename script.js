document.getElementById('weatherForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Mengambil nilai dari input form
    var suhu = document.getElementById('suhu').value;
    var kelembaban = document.getElementById('kelembaban').value;
    var tekanan = document.getElementById('tekanan').value;
    var curahHujan = document.getElementById('curahHujan').value;
    var radiasiMatahari = document.getElementById('radiasiMatahari').value;
    var kecepatanAngin = document.getElementById('kecepatanAngin').value;
    var arahAngin = document.getElementById('arahAngin').value;

    // Mengambil waktu saat ini
    var now = new Date();
    var hours = String(now.getHours()).padStart(2, '0');
    var minutes = String(now.getMinutes()).padStart(2, '0');
    var seconds = String(now.getSeconds()).padStart(2, '0');
    var timestamp = `${hours}:${minutes}:${seconds}`;

    // Menampilkan data di halaman HTML
    var displayData = document.getElementById('displayData');
    displayData.innerHTML = `
        <h3>Data diinput pada ${timestamp}</h3>
        <p>Suhu (°C): ${suhu}</p>
        <p>Kelembaban (%): ${kelembaban}</p>
        <p>Tekanan (Pa): ${tekanan}</p>
        <p>Curah Hujan (mm): ${curahHujan}</p>
        <p>Radiasi Matahari (W/m²): ${radiasiMatahari}</p>
        <p>Kecepatan Angin (km/h): ${kecepatanAngin}</p>
        <p>Arah Angin (derajat): ${arahAngin}</p>
    `;
});
