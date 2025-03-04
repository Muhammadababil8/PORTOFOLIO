// JavaScript interaktif untuk tombol
document.addEventListener('DOMContentLoaded', () => {
    const exploreBtn = document.getElementById('explore-btn');
    const buyButtons = document.querySelectorAll('.buy-btn');

    // Event listener untuk tombol Explore Now
    exploreBtn.addEventListener('click', () => {
        window.scrollTo({
            top: document.getElementById('products').offsetTop,
            behavior: 'smooth'
        });
    });

    // Event listener untuk tombol Buy Now
    buyButtons.forEach(button => {
        button.addEventListener('click', () => {
            alert('Produk telah ditambahkan ke keranjang!');
        });
    });
});
