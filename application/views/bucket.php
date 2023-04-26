<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Page</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/projectKelompok2/assets/css/singleStyle.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div id="get-element">
            <img src="image/single.png">
            <h3>Nama Produk PC</h3>
            <div id="get-detail">
                <p>Harga</p>
                <p>RP.-</p>
            </div>
            <div id="get-detail">
                <p>Qty</p>
                <div>
                    <button class="operator" type="button"><span class="material-symbols-outlined">remove</span></button>	
                    <input type="text"  value="1" name="">
                    <button class="operator"><span class="material-symbols-outlined">add</span></button>
                </div>
            </div>
            <div id="get-detail-total">
                <p>Total</p>
                <p>RP.-</p>
            </div>
        </div>
        <div id="get-total">
            <p>TOTAL</p>
            <h4 id="get-total-payment">Rp.</h4>
            <button type="Submit" tabindex="0" id="payment"><a href="index.html">LANJUT KE PEMBAYARAN</a></button>
	</div>
</body>
</html>