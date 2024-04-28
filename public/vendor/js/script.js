const kamarData = [
  { nomor: 1, ukuran: '4x4', harga: 850000 },
  { nomor: 2, ukuran: '3x3', harga: 850000 },
  { nomor: 3, ukuran: '4x4', harga: 750000 },
  { nomor: 4, ukuran: '3x4', harga: 650000 },
  { nomor: 5, ukuran: '4x4', harga: 950000 },
];

const daftarKamar = document.getElementById('daftar-kamar');

// Fungsi untuk membuat elemen kamar dan menambahkannya ke daftar kamar
function tambahkanKamar(kamar) {
  const li = document.createElement('li');
  li.classList.add('kamar');
  li.innerHTML = `<strong>Kamar ${kamar.nomor}</strong><br>Ukuran: ${kamar.ukuran}<br>Harga: Rp ${kamar.harga.toLocaleString()}`;
  daftarKamar.appendChild(li);
}
// Iterasi melalui data kamar dan memanggil fungsi tambahkanKamar untuk setiap kamar
kamarData.forEach(function (kamar) {
  tambahkanKamar(kamar);
});
