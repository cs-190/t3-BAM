function buy(name, price, email) {
	$.post('payment.php', { item_name: name, item_price : price, seller_email : email },
	function() {
        window.location.replace("payment.php");
    });
}


