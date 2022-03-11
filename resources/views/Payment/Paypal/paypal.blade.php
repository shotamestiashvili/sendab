<body>
<!-- Set up a container element for the button -->
<div id="paypal-button-container"></div>

<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=AXw2sm7el5MJ9S_lWBfKGjnKVRl4z0DkkJwzA4JiwR8HD6uIsBtlr8zXf_uKfYl1p_b55bdZ8gmy9t6K&currency=USD"></script>

<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({
        // Call your server to set up the transaction
        createOrder: function(data, actions) {
            return fetch('/paypal/order/create', {
                method: 'POST',
                body:JSON.stringify({
                    'course_id': "{{$course->id}}",
                    'user_id' : "{{auth()->user()->id}}",
                    'amount' : $("#paypalAmount").val(),
                })
            }).then(function(res) {
                //res.json();
                return res.json();
            }).then(function(orderData) {
                //console.log(orderData);
                return orderData.id;
            });
        },

        // Call your server to finalize the transaction
        onApprove: function(data, actions) {
            return fetch('/paypal/order/capture' , {
                method: 'POST',
                body :JSON.stringify({
                    orderId : data.orderID,
                    payment_gateway_id: $("#payapalId").val(),
                    user_id: "{{ auth()->user()->id }}",
                })
            }).then(function(res) {
                // console.log(res.json());
                return res.json();
            }).then(function(orderData) {

                // Successful capture! For demo purposes:
                //  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                iziToast.success({
                    title: 'Success',
                    message: 'Payment completed',
                    position: 'topRight'
                });
            });
        }

    }).render('#paypal-button-container');
</script>
</body>
