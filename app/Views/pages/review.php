<div class="container my-5">
    <h2 class="text-center mb-4">📝 Leave a Review</h2>

    <!-- Display success or error messages -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <!-- Review Form -->
    <form action="./review/create" method="post" class="p-4 bg-light rounded shadow">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Your Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="review" class="form-label fw-bold">Your Review:</label>
            <textarea name="review" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit Review</button>
    </form>
</div>


    <!-- Back to Home Button -->
    <div class="text-center mt-4">
        <a href="home.php" class="btn btn-outline-success"><i class="bi bi-arrow-left"></i> Back to Home</a>
    </div>
</div>
</body>
</html>
