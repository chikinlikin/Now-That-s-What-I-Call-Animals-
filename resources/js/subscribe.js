$(document).ready(funtion (){
  <div id="paypal-button-container"></div>

  <!-- Include the PayPal JavaScript SDK -->
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

  <script>
      // Render the PayPal button into #paypal-button-container
      paypal.Buttons({
        env: 'sandbox',
        client: {
          sandbox: 'AVjzDTKablfgqX3Li-YJ2amuqrMGYCmuKyJEyllcCZPJnKCNUplPc0Uklg0gDqzmv0hhOQmCc6SLdfKh'
        }

          style: {
              color:  'blue',
              shape:  'pill',
              label:  'pay',
              height: 40
          }

      }).render('#paypal-button-container');
})
