<?php include 'login_session.php' ?>
<?php include "../partial/_navbar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Cart</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .cart-container {
      background: #fff;
      padding: 30px;
      margin-top: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .product-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 5px;
    }

    .total-box {
      background-color: #f1f1f1;
      padding: 15px;
      border-radius: 8px;
    }

    .btn-checkout {
      background-color: #007bff;
      color: white;
    }

    .btn-checkout:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container cart-container">
    <h4 class="mb-4">🛒 Your Shopping Cart</h4>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="thead-light text-center">
          <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Cancel</th>
          </tr>
        </thead>
        <tbody>
          <!-- Product 1 -->
          <tr class="text-center">
            <td><img src="../images/dog.jpg" alt="Dog Food" class="product-img"></td>
            <td>NutriBite Dog Food</td>
            <td>₹799</td>
            <td class="subtotal"><i class="fa-solid fa-xmark"></i></td>
          </tr>

          <!-- Product 2 -->
          <tr class="text-center">
            <td><img src="../images/dog.jpg" alt="Cat Toy" class="product-img"></td>
            <td>Cat Toy Ball Set</td>
            <td>₹199</td>
            <!-- <td><input type="number" class="form-control qty" value="2" min="1"/></td> -->
            <td class="subtotal"><i class="fa-solid fa-xmark"></i></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Total Box -->
    <div class="row justify-content-end">
      <div class="col-md-4">
        <div class="total-box">
          <h5>Total: ₹<span id="grand-total">1197</span></h5>
          <button class="btn btn-checkout btn-block mt-3">Proceed to Checkout</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts to update totals -->
  <script>
    const qtyInputs = document.querySelectorAll('.qty');
    const subtotals = document.querySelectorAll('.subtotal');
    const grandTotalEl = document.getElementById('grand-total');

    function updateTotals() {
      let total = 0;
      qtyInputs.forEach((input, index) => {
        const price = parseInt(subtotals[index].previousElementSibling.textContent.replace('₹',''));
        const qty = parseInt(input.value);
        const subtotal = price * qty;
        subtotals[index].textContent = `₹${subtotal}`;
        total += subtotal;
      });
      grandTotalEl.textContent = total;
    }

    qtyInputs.forEach(input => {
      input.addEventListener('change', updateTotals);
    });
  </script>

</body>
</html>
