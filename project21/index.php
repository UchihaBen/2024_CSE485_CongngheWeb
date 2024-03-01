
<?php 
    include 'products.php'; 
    $itemsPerPage=4;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    //isset để kiểm tra xem biến đã tồn tại chưa
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>products</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
            <?php foreach ($currentPageItems as $product): ?>
                <div class="col-3">
                    <div class="card">
                        <img src="<?= $product["image"] ?>" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product["name"] ?></h5>
                            <p class="card-text"><?= $product["description"] ?></p>
                            <p class="card-price">$<?= $product["price"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
    <br>
    <nav aria-label="">
    <ul class="pagination">
        <li class="page-item">
            <?php if ($currentPage > 1): ?>
                <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
            <?php endif; ?>
        </li>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <li class="page-item active" aria-current="page"><a class="page-link"><?php echo $i; ?></a></li>
            <?php else: ?>
                <li class="page-item" >
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endif; ?>
        <?php endfor; ?>

        <li class="page-item">
            <?php if ($currentPage < $totalPages): ?>
                <a class="page-link " href="?page=<?php echo $currentPage + 1; ?>">Next</a>
            <?php endif; ?>
        </li>
    </ul>
    </nav>

</body>
</html>
