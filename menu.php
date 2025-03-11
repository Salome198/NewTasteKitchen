<!-- Search Bar -->
<div class="d-flex justify-content-end mt-3">
    <div class="input-group w-50">
        <input type="search" id="search" class="form-control border-2 border-dark fw-bold shadow-sm" 
            placeholder="🔍 Search for food..." style="font-size: 18px;">
        <button class="btn btn-warning fw-bold text-dark" type="button">Search</button>
    </div>
</div>

<h2><?= esc($title) ?></h2>

<?php if ($news_list !== []): ?>

    <div class="text-center"> 
        <h2>Our Delicious Menu</h2>
    </div>

    <div class="row justify-content-center align-items-center text-decoration-none g-4">
        <?php foreach ($news_list as $news_item): ?>
            <div class="col-md-4 d-flex justify-content-center">
            <div class="card shadow-lg" style="width: 18rem; border-radius: 10px; overflow: hidden;">
                    <img src="img/veg-fried-ricw.jpg<?= esc($news_item['image']) ?>" class="card-img-top food-img" alt="<?= esc($news_item['name']) ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= esc($news_item['name']) ?></h5>
                        <p class="fw-bold">Price: £<?= esc($news_item['price']) ?></p>
                        <a href="#" class="btn btn-outline-success">
                         <i class="bi bi-cart-plus"></i> Add to Basket
                        </a>
                        <!-- Unique View Button for each item -->
                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#viewFood<?= esc($news_item['id']) ?>">View</button>
                    </div>
                </div>
            </div> 
   

        <!-- Modal for each food item -->
    <div class="modal fade" id="viewFood<?= esc($news_item['id']) ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= esc($news_item['name']) ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Description:</strong> <?= esc($news_item['description']) ?></p>
                    <p><strong>Ingredients:</strong> <?= esc($news_item['ingredients']) ?></p>
                    <p><strong>Allergens:</strong> <?= esc($news_item['allergens']) ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach ?>

<?php else: ?>
    <h3>No food</h3>
    <p>Unable to find any food for you.</p>
<?php endif ?>

</div>