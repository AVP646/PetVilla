<?php
include 'login_session.php';
include '../partial/_database.php';

$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = trim($_POST['user_name']);
    $rating = intval($_POST['rating']);
    $message = trim($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO reviews (user_name, rating, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $user_name, $rating, $message);
    if ($stmt->execute()) {
        $success = true;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pet Reviews</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .review-section {
      background: #fff;
      border-radius: 16px;
      padding: 40px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      margin-bottom: 40px;
    }
    .review-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }
    .review-card:hover {
      transform: translateY(-4px);
    }
    .review-rating i {
      color: #ffc107;
    }
    textarea {
      resize: none;
    }
  </style>
</head>
<body>
<?php include '../partial/_navbar.php'; ?>
<div class="container my-5">
  <div class="review-section">
    <h2 class="text-center mb-4">🐾 Share Your Pet Story</h2>

    <?php if ($success): ?>
      <div class="alert alert-success text-center">Thank you! Your review was submitted successfully. 🐶</div>
    <?php endif; ?>

    <form method="POST" class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Your Name</label>
        <input type="text" name="user_name" class="form-control" placeholder="Enter your name" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Rating</label>
        <select name="rating" class="form-select" required>
          <option value="">Select Rating</option>
          <option value="5">⭐⭐⭐⭐⭐ (5)</option>
          <option value="4">⭐⭐⭐⭐ (4)</option>
          <option value="3">⭐⭐⭐ (3)</option>
          <option value="2">⭐⭐ (2)</option>
          <option value="1">⭐ (1)</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">Your Message</label>
        <textarea name="message" rows="4" class="form-control" placeholder="Tell us about your pet experience..." required></textarea>
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary px-5 py-2">Submit Review</button>
      </div>
    </form>
  </div>

  <h3 class="mb-4">❤️ What People Say</h3>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php
$limit = 4; // Reviews per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$offset = ($page - 1) * $limit;

// Fetch total reviews count
$totalResult = $conn->query("SELECT COUNT(*) as total FROM reviews");
$totalRow = $totalResult->fetch_assoc();
$totalReviews = $totalRow['total'];
$totalPages = ceil($totalReviews / $limit);

// Fetch reviews with LIMIT and OFFSET
$result = $conn->query("SELECT * FROM reviews ORDER BY created_at DESC LIMIT $limit OFFSET $offset");

while ($row = $result->fetch_assoc()):
  $rating = intval($row['rating']);
  $user = htmlspecialchars($row['user_name']);
  $message = htmlspecialchars($row['message']);
?>
  <div class="col">
    <div class="review-card">
      <div class="d-flex align-items-center mb-3">
        <img src="../images/review-user.jpg" class="rounded-circle me-3" alt="<?= $user ?>" width="60" height="60">
        <div>
          <h5 class="mb-0"><?= $user ?></h5>
          <div class="review-rating">
            <?php
            for ($i = 1; $i <= $rating; $i++) echo '<i class="bi bi-star-fill"></i>';
            for ($i = $rating + 1; $i <= 5; $i++) echo '<i class="bi bi-star"></i>';
            ?>
            (<?= $rating ?>/5)
          </div>
        </div>
      </div>
      <p class="text-muted">"<?= $message ?>"</p>
    </div>
   </div>
    <?php endwhile; ?>

    <?php if ($totalPages > 1): ?>
  <nav class="mt-4">
    <ul class="pagination justify-content-center">
      <?php if ($page > 1): ?>
        <li class="page-item">
          <a class="page-link" href="?page=<?= $page - 1 ?>">« Prev</a>
        </li>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <li class="page-item <?= $i == $page ? 'active' : '' ?>">
          <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
        </li>
      <?php endfor; ?>

      <?php if ($page < $totalPages): ?>
        <li class="page-item">
          <a class="page-link" href="?page=<?= $page + 1 ?>">Next »</a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
<?php endif; ?>

  </div>
</div>

</body>
</html>

<?php include '../partial/_footer.php'; ?>