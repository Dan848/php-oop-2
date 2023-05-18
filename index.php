<?php 
include __DIR__.'/Database/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pet Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <header class="container text-center">
        <h1 class="mt-2">[P]et s[H]o[P]</h1>
        <h6>Non vende animali ma mi serviva per inserire PHP nel titolo in modo divertente</h6>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <?php foreach ($products as $product) {?>
                <div class="col-12 col-md-6 col-lg-4 g-3">
                    <!-- CARD -->
                    <div class="card bg-warning text-black border-0">
                        <!-- IMAGE -->
                        <div>
                            <?php echo $product->getCoverImage()?>
                        </div>
                        <!-- Name -->
                        <div class="px-2 pb-2 fw-medium">
                            <?php echo $product->getName()?>
                            
                            <!-- INFO -->
                            <div class="d-flex justify-content-between">
                            <?php echo $product->getPrice()?>
                            <?php echo $product->getInfo()?>
                            </div>

                            <div class="d-flex justify-content-between">
                            <?php echo $product->getType()?>
                            <?php echo $product->getCategory()?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main>
</body>
</html>