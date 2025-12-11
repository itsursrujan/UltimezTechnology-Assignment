let products = [];

function addProduct() {
    const name = document.getElementById("pname").value;
    const price = Number(document.getElementById("pprice").value);

    if (name === "" || price === 0) {
        alert("Please enter valid details");
        return;
    }

    const product = {
        productName: name,
        productPrice: price
    };

    products.push(product);
    displayProducts();
    calculateTotal();
}

function displayProducts() {
    let html = "<ul>";
    products.forEach((p) => {
        html += `<li>${p.productName} - Rs.${p.productPrice}</li>`;
    });
    html += "</ul>";

    document.getElementById("list").innerHTML = html;
}

function calculateTotal() {
    let total = products.reduce((sum, p) => sum + p.productPrice, 0);
    document.getElementById("total").innerText = total;
}
