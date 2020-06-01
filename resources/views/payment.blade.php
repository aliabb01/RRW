<script src="https://js.stripe.com/v3/"></script>

<form action="/charge" method="post" id="payment-form">
  @csrf
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

  <h1 style="font-weight: normal; margin-top:10%;" class="text-center">Online Payment System for tickets</h1>

  <div class="form-row mt-5 text-center" style="margin-top:2%;">

    <div class="col text-center" style="margin-bottom:10px;">
      <label for="name">
        Name,Surname:
      </label>
      <input style="width:200px;" id="name" name="name" placeholder="Jenny Rosen" required>
    </div>

    <div class="col text-center" style="margin-bottom:50px;">
      <label for="email">
        Email Address :
      </label>
      <input style="width:200px;" id="email" name="email" type="email" placeholder="jenny.rosen@example.com" required>
    </div>

    <label for="card-element" style="margin-right:21%;">
      Credit or debit card :
    </label>

    <div class="text-center" id="card-element" style="width:30%; margin-left:35%; margin-top:10px;">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <div class="text-center" style="margin-top:50px;">
    <button class="btn" style="background-color:#1A2652; color:white;">Submit Payment</button>
  </div>
</form>

<style>
  .StripeElement {
    box-sizing: border-box;

    height: 40px;

    padding: 10px 12px;

    border: 1px solid transparent;
    border-radius: 4px;
    background-color: white;

    box-shadow: 0 5px 15px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
  }

  .StripeElement--focus {
    /*box-shadow: 0 1px 3px 0 #cfd7df;*/
    border: 2px solid dodgerblue;
  }

  .StripeElement--invalid {
    border-color: #fa755a;
  }

  .StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
  }

  .btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    line-height: 1.6;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }

  .text-center {
    text-align: center !important;
  }


  /**
* The CSS shown here will not be introduced in the Quickstart guide, but
* shows how you can use CSS to style your Element's container.
*/
  input,
  .StripeElement {
    height: 40px;
    padding: 10px 12px;
    color: #32325d;
    background-color: white;
    border-radius: 4px;
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
  }

  input,
  .StripeElement:focus {
    border: 2px solid purple;
    transition: 0.5s;
  }
</style>


<script>
  // Create a Stripe client.
var stripe = Stripe('pk_test_SW4bYWMzriQ4L9K1ug1BoEG800lIz30pUQ');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
</script>

<script>
  function fill(){
    document.getElementById('name').innerHTML = "SomeName";
    document.getElementById('email').innerHTML = "someemail@gmail.com";
  }
</script>