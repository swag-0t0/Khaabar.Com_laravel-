<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-2">
                    <h4>Your cart</h4>
                   
                </div>

                <div id="cart-items"></div>

                <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                    <input type="text" class="form-control border-0 gift-card" id="discount-code" placeholder="discount code/gift card">
                    <button class="btn btn-outline-warning btn-sm ml-2" type="button" id="apply-discount">Apply</button>
                </div>
                <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                    <h5 class="text-grey mr-2">Total: $<span id="total-price">0.00</span></h5>
                </div>
                <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><a class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button" href="#" id="proceed-to-pay">Proceed to Pay</a></div>
            </div>
        </div>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cartItemsContainer = document.getElementById('cart-items');
            let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
            
            function renderCart() {
                cartItemsContainer.innerHTML = '';
                let total = 0;

                cart.forEach((item, index) => {
                    total += item.price * item.quantity;
                    cartItemsContainer.innerHTML += `
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded product" data-index="${index}">
                            <div class="mr-1"><img class="rounded" src="${item.image}" width="70"></div>
                            <div class="d-flex flex-column align-items-center product-details">
                                <span class="font-weight-bold">${item.name}</span>
                                <div class="d-flex flex-row product-desc">
                                    <div class="size mr-1"><span class="text-grey">Quantity:</span><span class="font-weight-bold">&nbsp;${item.quantity}</span></div>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger minusBtn" data-index="${index}"></i>
                                <h5 class="text-grey mt-1 mr-1 ml-1 quantity">${item.quantity}</h5><i class="fa fa-plus text-success plusBtn" data-index="${index}"></i>
                            </div>
                            <div><h5 class="text-grey item-total">${(item.price * item.quantity).toFixed(2)}/-</h5></div>
                            <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger removeBtn" data-index="${index}"></i></div>
                        </div>`;
                });
                
                document.getElementById('total-price').textContent = total.toFixed(2);
            }

            renderCart();

            cartItemsContainer.addEventListener('click', (e) => {
                const target = e.target;
                const index = target.dataset.index;
                
                if (target.classList.contains('minusBtn')) {
                    if (cart[index].quantity > 1) {
                        cart[index].quantity -= 1;
                    } else {
                        cart.splice(index, 1);
                    }
                    sessionStorage.setItem('cart', JSON.stringify(cart));
                    renderCart();
                }

                if (target.classList.contains('plusBtn')) {
                    cart[index].quantity += 1;
                    sessionStorage.setItem('cart', JSON.stringify(cart));
                    renderCart();
                }

                if (target.classList.contains('removeBtn')) {
                    cart.splice(index, 1);
                    sessionStorage.setItem('cart', JSON.stringify(cart));
                    renderCart();
                }
            });

            document.getElementById('apply-discount').addEventListener('click', () => {
                // Discount code logic can be implemented here
                const discountCode = document.getElementById('discount-code').value;
                if (discountCode === 'Web') {
                    const total = parseFloat(document.getElementById('total-price').textContent);
                    const discountedTotal = total * 0.9;
                    document.getElementById('total-price').textContent = discountedTotal.toFixed(2);
                }
                else {
                    alert('Invalid discount code');
                }
            });

            document.getElementById('proceed-to-pay').addEventListener('click', (e) => {
                if (cart.length === 0) {
                    e.preventDefault();
                    alert('Your cart is empty.');
                } else {
                    const totalPrice = document.getElementById('total-price').textContent;
                    // Here you would typically send the total price to the server or the next view.
                    // For demonstration, we'll just log it to the console.
                    console.log('Total price to pay:', totalPrice);
                    window.location.href = `/payment?total=${totalPrice}`;
                }
            });
        });
    </script>
</body>
</html>
