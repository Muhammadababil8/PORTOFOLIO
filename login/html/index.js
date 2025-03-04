const shopNowButton = document.getElementById('shopNowButton');

// Event saat tombol "Shop Now" diklik
shopNowButton.addEventListener('click', () => {
    alert("Navigasi ke halaman Shop");
    // Anda bisa mengganti alert dengan navigasi ke halaman Shop
    window.location.href = "products.html";
});

/* about */
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

// Array to store cart items
let cart = [];

// Function to add product to the cart
function addToCart(productName, price) {
    const product = { name: productName, price: price };
    cart.push(product);
    alert(productName + " has been added to the cart!");
    console.log(cart);
}
