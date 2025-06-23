<?php include "../partial/_navbar.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:wght@400;600&display=swap');
    
    body {
      background: linear-gradient(to right, #ff9468 70%, #ff8961 100%);
       font-family: "Baloo 2", cursive;
    }

    .checkout-container {
      max-width: 700px;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .form-control:invalid {
      border-color: red;
    }

    .error-text {
      color: red;
      font-size: 0.9rem;
    }

    .shipping-option {
      cursor: pointer;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px 15px;
      margin-bottom: 10px;
    }

    .shipping-option.active {
      border-color: #dc3545;
      background-color: #ffe5e5;
    }
    .check_out_img{
      filter: drop-shadow(2px 5px 5px grey);
    }
  </style>
</head>

<body>
  <div class="checkout-container">
    <h4 class="mb-4">Order Summary</h4>
    <div class="d-flex align-items-center mb-3">
      <img src="../images/pet1.png" class="me-3 check_out_img" alt="Dog Belt">
      <div>
        <strong>Dog</strong><br>
        <small>Golden Retriever Dog</small>
      </div>
      <div class="ms-auto">$0</div>
    </div>

    <div class="d-flex justify-content-between mb-2">
      <span>Subtotal</span>
      <span>$0</span>
    </div>
    <div class="d-flex justify-content-between mb-2">
      <span>Shipping</span>
      <span id="shipping-cost">$10</span>
    </div>
    <div class="d-flex justify-content-between fw-bold mb-4">
      <span>Total</span>
      <span id="total-cost">$10</span>
    </div>

    <form action="https://formsubmit.co/YOUR_EMAIL@example.com" method="POST">
      <input type="hidden" name="_subject" value="New Checkout Order">
      <input type="hidden" name="product" value="Golden Retriever Dog">
      <input type="hidden" name="_captcha" value="false">

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="tel" name="phone" class="form-control" id="phone" required>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <input type="text" name="fname" class="form-control" placeholder="First name" required pattern="[A-Za-z]{2,}">
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" name="lname" class="form-control" placeholder="Last name" required pattern="[A-Za-z]{2,}">
        </div>
      </div>
      <input type="text" name="address" class="form-control mb-3" placeholder="Address" required>
      <input type="text" name="apt" class="form-control mb-3" placeholder="Apartment, suite, etc. (optional)">
      <div class="row">
        <div class="col-md-4 mb-3">
          <input type="text" name="city" class="form-control" placeholder="City" required>
        </div>
        <div class="col-md-4 mb-3">
          <select name="state" class="form-select">
            <option value="India" selected>India</option>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <input type="text" name="zip" class="form-control" placeholder="ZIP code" pattern="[0-9]{6}" maxlength="6" required>
        </div>
      </div>

      <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" checked>
        <label class="form-check-label">Save this information for next time</label>
      </div>

      <h5 class="mb-3">Shipping Method</h5>
      <div id="shipping-options">
        <div class="shipping-option active" data-cost="10">Standard ($10)</div>
        <div class="shipping-option" data-cost="20">Safe ($20)</div>
        <div class="shipping-option" data-cost="30">Very Safe ($30)</div>
      </div>

      <h5 class="mb-3">Payment</h5>
      <select name="payment" class="form-select mb-3" id="payment-method" required>
        <option value="">Select Payment Method</option>
        <option value="gpay">Google Pay</option>
        <option value="paytm">Paytm</option>
        <option value="phonepe">PhonePe</option>
        <option value="card">Credit/Debit Card</option>
        <option value="cod">Cash on Delivery</option>
      </select>

      <div id="payment-details" class="mb-3" style="display: none;">
        <input type="text" name="payment_info" class="form-control" placeholder="Enter UPI ID">
      </div>

      <div id="card-fields" style="display: none;">
        <input type="text" class="form-control mb-3" placeholder="Card Number" pattern="[0-9]{16}" maxlength="16" required>
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Expiration (MM/YY)" pattern="(0[1-9]|1[0-2])/([0-9]{2})" required>
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="CVV" pattern="[0-9]{3}" maxlength="3" required>
          </div>
        </div>
        <input type="text" class="form-control mb-3" placeholder="Name on Card" required>
      </div>

      <button type="submit" class="btn btn-danger w-100">Pay now</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
  <script>
    const phoneInput = document.querySelector("#phone");
    const iti = window.intlTelInput(phoneInput, {
      initialCountry: "auto",
      geoIpLookup: callback => {
        fetch("https://ipapi.co/json")
          .then(res => res.json())
          .then(data => callback(data.country_code))
          .catch(() => callback("IN"));
      },
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js"
    });

    document.querySelectorAll('.shipping-option').forEach(option => {
      option.addEventListener('click', function () {
        document.querySelectorAll('.shipping-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
        const cost = parseInt(this.getAttribute('data-cost'));
        document.getElementById('shipping-cost').textContent = `$${cost}`;
        document.getElementById('total-cost').textContent = `$${cost}`;
      });
    });

    document.getElementById('payment-method').addEventListener('change', function () {
      const upiBox = document.getElementById('payment-details');
      const cardBox = document.getElementById('card-fields');
      const selected = this.value;

      upiBox.style.display = (selected === 'gpay' || selected === 'paytm' || selected === 'phonepe') ? 'block' : 'none';
      cardBox.style.display = (selected === 'card') ? 'block' : 'none';
    });
  </script>
</body>

</html>
