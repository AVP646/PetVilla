<?php include 'admin_session.php'; ?>
<?php include "../partial/_database.php"; ?>
<?php
$userQuery = "SELECT * FROM users";
$query = mysqli_query($conn, $userQuery);
$users = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Shop Admin Users</title>
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

    /* Sidebar toggle button */
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
    #overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.45); opacity: 0; visibility: hidden; transition: opacity 0.25s ease, visibility 0.25s ease; z-index: 1040; }

    /* Mobile */
    @media (max-width: 768px) {
      #sidebar { position: fixed; top: 0; left: 0; transform: translateX(-100%); height: 100vh; }
      #sidebar.open { transform: translateX(0); }
      #overlay.active { opacity: 1; visibility: visible; }
      .sidebar-toggle { display: flex; flex-direction: column; justify-content: space-between; }
      body.no-scroll { overflow: hidden; }
    }

    /* Table */
    .table thead { background-color: #343a40; color: #fff; }
    .table tbody tr:hover { background-color: #f1f1f1; }
    .btn { border-radius: 20px; }
    .table-responsive { box-shadow: 0 4px 20px rgba(0,0,0,0.05); padding: 1rem; background: #fff; border-radius: 10px; }
  </style>
</head>
<body>

<!-- Sidebar Toggle Button for Mobile -->
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
    <h2 class="mb-4">👥 All Users</h2>
    <div class="table-responsive">
      <table class="table table-striped align-middle" id="myTable">
        <thead>
          <tr>
            <th>#ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Username</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($query) > 0){
            while ($row = mysqli_fetch_assoc($query)){
                echo "<tr>
                    <td>{$row['user_id']}</td>
                    <td>{$row['fname']}</td>
                    <td>{$row['lname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['Mno']}</td>
                    <td>{$row['username']}</td>
                    <td class='action-btns'>
                        <a href='admin_user_remove.php?id={$row['user_id']}'><button class='btn btn-sm btn-danger'>Delete</button></a>
                    </td>
                </tr>";
            }
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Overlay -->
<div id="overlay" aria-hidden="true"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
