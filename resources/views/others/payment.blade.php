<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment here</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12">
                <div class="card mx-auto">
                    <p class="heading">PAYMENT DETAILS</p>
                    <form class="card-details">
                        <div class="form-group mb-0">
                            <p class="text-warning mb-0">Card Number</p>
                            <input type="text" name="card-num" placeholder="1234 5678 9012 3457" size="17" id="cno" minlength="19" maxlength="19">
                            <img src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                        </div>

                        <div class="form-group">
                            <p class="text-warning mb-0">Cardholder's Name</p>
                            <input type="text" name="name" placeholder="Name" size="17" id="name">
                        </div>
                        <div class="form-group">
                            <p class="text-warning mb-0">Amount</p>
                            <label id="amount-label" style="font-size: 17px;">{{$total}}/-</label>
                        </div>
                        <div class="form-group pt-2">
                            <div class="row d-flex">
                                <div class="col-sm-4">
                                    <p class="text-warning mb-0">Expiration</p>
                                    <input type="text" name="exp" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7">
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-warning mb-0">Cvv</p>
                                    <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" id="cvv" minlength="3" maxlength="4">
                                </div>
                                <div class="col-sm-5 pt-0">
                                    <button type="button" class="btn btn-primary" id="proceed-button" style="white-space: nowrap;">Proceed</button>
                                </div>
                            </div>
                        </div>      
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('proceed-button').addEventListener('click', function() {
            const cardNumber = document.getElementById('cno').value;
            const cardHolderName = document.getElementById('name').value;
            const expirationDate = document.getElementById('exp').value;
            const cvv = document.getElementById('cvv').value;

            if (!cardNumber || !cardHolderName || !expirationDate || !cvv) {
                alert('Please fill in all fields.');
                return;
            }

            if (cardNumber.length !== 19) {
                alert('Please enter a valid card number.');
                return;
            }

            if (expirationDate.length == 0) {
                alert('Please enter a valid expiration date.');
                return;
            }

            if (cvv.length < 3 || cvv.length > 4) {
                alert('Please enter a valid CVV.');
                return;
            }

            alert('Payment successful!');
        });
    </script>
</body>
</html>
