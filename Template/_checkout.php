<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        body_check {
            font-family: Arial;
            font-size: 17px;
            padding: 5px;
        }

        * {
            box-sizing: border-box;
        }

        .row_checkout {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25_checkout {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50_checkout {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75_checkout {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25_checkout,
        .col-50_checkout,
        .col-75_checkout {
            padding: 0 16px;
        }

        .container_checkout {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container_checkout {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn_checkout {
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn_checkout:hover {
            background-color: #45a049;
        }

        a_checkout {
            color: #2196F3;
        }

        hr_checkout {
            border: 1px solid lightgrey;
        }

        span_checkout.price {
            float: right;
            color: grey;
        }

    </style>
</head>
<body_check>



<div class="row_checkout">
    <div class="col-75_checkout">
        <div class="container_checkout">
                <div class="row_checkout">
                    <div class="col-50_checkout">
                        <h3>Adresa dumneavoastra</h3>
                        <label for="fname"><i class="fa fa-user"></i> Nume complet</label>
                        <input type="text" id="fname" name="firstname" placeholder="Silaghi Armand-Arcadis">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Adresa completa</label>
                        <input type="text" id="adr" name="address" placeholder="Str.Compusului, Nr.20">
                        <label for="city"><i class="fa fa-institution"></i> Oras</label>
                        <input type="text" id="city" name="city" placeholder="Dej">

                        <div class="row_checkout">
                            <div class="col-50_checkout">
                                <label for="state">Judet</label>
                                <input type="text" id="state" name="state" placeholder="Cluj">
                            </div>
                            <div class="col-50_checkout">
                                <label for="zip">Cod postal</label>
                                <input type="text" id="zip" name="zip" placeholder="405200">
                            </div>
                        </div>
                    </div>

                    <div class="col-50_checkout">
                        <h3>Plata</h3>
                        <label for="fname">Carduri acceptate</label>
                        <div class="icon-container_checkout">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        </div>
                        <label for="cname">Numele detinatorului</label>
                        <input type="text" id="cname" name="cardname" placeholder="Silaghi Amand">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Luna</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="04">
                        <div class="row_checkout">
                            <div class="col-50_checkout">
                                <label for="expyear">Anul</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2023">
                            </div>
                            <div class="col-50_checkout">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
        <center><button onclick="location.href='success.php'" class="btn btn-warning mt-3">Trimite comanda</button></center>
        </div>
    </div>
    </div>
</div>

</body_check>
</html>
