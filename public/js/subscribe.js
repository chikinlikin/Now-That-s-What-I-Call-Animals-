$(document).ready(function () {
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

          style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay',
                height: 40
            },

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '10.00',
                            currency: 'GBP',
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
});
