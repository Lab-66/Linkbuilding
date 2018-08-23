function addNewPurchase() {
    var pl = $(".order-list");
    var out = '<li class="orderitem"><div class="order-info"><input type="text" /><input type="text" /><input type="text" /><input type="text" /></div></li>';
    pl.append(out);
}

function deleteNewPurchase(e) {
    var pl = $(".order-list");
    alert(e.currentTarget);
}
