<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Profile</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .profile-card {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      margin-top: 40px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .avatar {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #fff;
      margin-bottom: 15px;
    }

    .nav-tabs .nav-link.active {
      background-color: #007bff;
      color: white !important;
    }

    .info-title {
      font-weight: bold;
      color: #343a40;
    }

    .info-value {
      color: #6c757d;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="profile-card text-center">
      <!-- Profile Header -->
      <img src="../images/dog.jpg" alt="User Avatar" class="avatar">
      <h4 class="mb-0">Pankaj Sharma</h4>
      <small class="text-muted">Frontend Developer • Gujarat, India</small>
      <div class="mt-3">
        <button class="btn btn-outline-primary btn-sm">Edit Profile</button>
        <button class="btn btn-outline-dark btn-sm">Message</button>
      </div>
    </div>

    <!-- Tabs for Profile Sections -->
    <div class="profile-card mt-4">
      <ul class="nav nav-tabs" id="profileTabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab">Overview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab">Settings</a>
        </li>
      </ul>
      <div class="tab-content p-3" id="profileTabsContent">
        <!-- Overview -->
        <div class="tab-pane fade show active" id="overview" role="tabpanel">
          <h5 class="info-title">About</h5>
          <p class="info-value">
            Enthusiastic web developer with a flair for crafting responsive and creative interfaces.
            Loves experimenting with PHP, Bootstrap, and pixel-perfect designs.
          </p>

          <h5 class="info-title">Contact</h5>
          <p class="info-value mb-1">📧 pankaj@example.com</p>
          <p class="info-value">📱 +91 9876543210</p>
        </div>

        <!-- Orders -->
        <div class="tab-pane fade" id="orders" role="tabpanel">
          <h5 class="info-title">Recent Purchases</h5>
          <ul class="list-group">
            <li class="list-group-item">Golden Retriever Puppy – ₹3,999 <span class="badge badge-success float-right">Delivered</span></li>
            <li class="list-group-item">NutriBite Dog Food – ₹799 <span class="badge badge-warning float-right">Shipped</span></li>
          </ul>
        </div>

        <!-- Settings -->
        <div class="tab-pane fade" id="settings" role="tabpanel">
          <h5 class="info-title">Account Settings</h5>
          <form>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" value="pankaj-dev">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" value="pankaj@example.com">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" value="********">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
