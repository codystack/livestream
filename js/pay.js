const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
    e.preventDefault();
    var username=document.getElementById("username").value;
    var otherdata = {username:username, lastName:"nothing"};
    var myref=Math.floor((Math.random() * 1000000000) + 1);
    let handler = PaystackPop.setup({
        key: 'pk_live_ec05a07c60abfd2f90a7254a22c1e3dfb1cee7c4', // Replace with your public key
        email: document.getElementById("email").value,
        metadata: otherdata,
        amount: document.getElementById("amount").value * 100,
        ref: ''+myref,
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