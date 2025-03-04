// Array to store cart items
let cart = [];

// Function to add product to the cart
function addToCart(productName, price) {
    const product = { name: productName, price: price };
    cart.push(product);
    alert(productName + " has been added to the cart!");
    console.log(cart);
}