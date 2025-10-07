<?php include 'admin_session.php'; ?>
<?php include "../partial/_database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Shop Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
  <style>
    body { font-family: 'Quicksand', sans-serif; background: #f4f6f8; }
    #wrapper { display: flex; min-height: 100vh; transition: all 0.3s ease; }

    /* Sidebar */
    #sidebar {
      width: 240px;
      background: linear-gradient(160deg, #1b1b2f, #0f3460);
      color: #eee;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 1rem;
      transition: transform 0.3s ease;
      z-index: 1050;
    }
    #sidebar h3 { font-size: 1.8rem; margin-bottom: 3rem; color: #f8b400; }
    .nav-link { color: #eee; padding: 0.75rem 1rem; border-radius: 50px; display: flex; align-items: center; width: 100%; transition: all 0.3s ease; }
    .nav-link i { margin-right: 1rem; }
    .nav-link:hover { background: #00adb5; transform: translateX(8px); }
    .logout { margin-top: auto; background: #e94560; color: #fff; text-align: center; width: 100%; padding: 10px; border-radius: 50px; }
    .logout:hover { background: #d63447; }

    .container-fluid { flex: 1; padding: 4rem; }

    .card { background: #fff; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: transform 0.3s ease; }
    .card:hover { transform: translateY(-10px); }

    /* Sidebar toggle */
    .sidebar-toggle {
      display: none;
      position: fixed;
      top: 15px;
      left: 15px;
      z-index: 1100;
      width: 35px;
      height: 28px;
      background: transparent;
      border: none;
      flex-direction: column;
      justify-content: space-between;
      cursor: pointer;
    }
    .sidebar-toggle span { display: block; height: 4px; width: 100%; background: #333; border-radius: 4px; transition: all 0.3s ease; }
    .sidebar-toggle.active span:nth-child(1) { transform: rotate(45deg) translate(6px, 6px); }
    .sidebar-toggle.active span:nth-child(2) { opacity: 0; }
    .sidebar-toggle.active span:nth-child(3) { transform: rotate(-45deg) translate(6px, -6px); }

    /* Overlay */
    #overlay {
      position: fixed; inset: 0;
      background: rgba(0,0,0,0.45);
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.25s ease, visibility 0.25s ease;
      z-index: 1040;
    }

    /* Mobile */
    @media (max-width: 768px) {
      #sidebar { position: fixed; top: 0; left: 0; transform: translateX(-100%); height: 100vh; }
      #sidebar.open { transform: translateX(0); }
      .sidebar-toggle { display: flex; flex-direction: column; justify-content: space-between; }
      #overlay.active { opacity: 1; visibility: visible; }
      body.no-scroll { overflow: hidden; }
    }
  </style>
</head>
<body>

<!-- Toggle Button for Mobile -->
<button id="sidebarToggle" class="sidebar-toggle d-md-none" aria-label="Toggle sidebar">
  <span></span>
  <span></span>
  <span></span>
</button>

<div id="wrapper">
  <!-- Sidebar -->
  <?php include 'admin_sidebar.php'; ?>

  <!-- Page Content -->
  <div class="container-fluid p-4">
    <h2 class="mb-4">📋 All Orders</h2>
    <div class="table-responsive">
      <table class="table table-striped table-hover order-table" id="myTable">
        <thead class="table-dark">
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Total (₹)</th>
            <th>Date</th>
            <th>Status</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT o.*, CONCAT(u.fname, ' ', u.lname) AS customer_name 
                  FROM orders o
                  JOIN users u ON o.user_id = u.user_id
                  ORDER BY o.order_date DESC";
        $result = mysqli_query($conn, $query);
        while ($order = mysqli_fetch_assoc($result)) {
          $status_class = match($order['payment_status']) {
            'paid'      => 'badge bg-success',
            'shipped'   => 'badge bg-info text-dark',
            'pending'   => 'badge bg-warning text-dark',
            'cancelled' => 'badge bg-danger',
            default     => 'badge bg-secondary'
          };
          echo "<tr>
                  <td>{$order['order_id']}</td>
                  <td>{$order['customer_name']}</td>
                  <td>{$order['phone']}</td>
                  <td>{$order['address']}, {$order['city']}, {$order['state']} - {$order['pincode']}</td>
                  <td>₹{$order['total_amount']}</td>
                  <td>{$order['order_date']}</td>
                  <td><span class='{$status_class}'>".ucfirst($order['payment_status'])."</span></td>
                  <td><a href='admin_order_details.php?order_id={$order['order_id']}' class='btn btn-primary btn-sm'>View</a></td>
                </tr>";
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Overlay -->
<div id="overlay" aria-hidden="true"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
<script>
  let table = new DataTable('#myTable');
</script>

<!-- Sidebar Toggle JS -->
<script>
(function() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const overlay = document.getElementById('overlay');

    function openSidebar() {
        sidebar.classList.add('open');
        overlay.classList.add('active');
        document.body.classList.add('no-scroll');
        toggleBtn.classList.add('active');
    }

    function closeSidebar() {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
        document.body.classList.remove('no-scroll');
        toggleBtn.classList.remove('active');
    }

    toggleBtn?.addEventListener('click', function(e) {
        e.stopPropagation();
        sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
    });

    overlay?.addEventListener('click', closeSidebar);

    window.addEventListener('resize', function() {
        if(window.innerWidth >= 768) closeSidebar();
    });
})();
</script>

</body>
</html>
