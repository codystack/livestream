const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
    e.preventDefault();
    var username=document.getElementById("username").value;
    var otherdata = {username:username, lastName:"nothing"};
    let handler = PaystackPop.setup({
        key: 'pk_test_274c204e073e2b9d908430573ba1603a843c66d4', // Replace with your public key
        email: document.getElementById("email").value,
        metadata: otherdata,
        amount: document.getElementById("amount").value * 100,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1),
        onClose: function(){

        },
        callback: function(response){
            if(myref==response.reference){
                location.replace("regsuccess")
            }
        }
    });
    handler.openIframe();
}