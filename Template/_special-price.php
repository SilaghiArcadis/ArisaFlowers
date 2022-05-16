<!--Special price-->
<?php
$category = array_map(function ($pro){return $pro['item_category'];},$product_shuffle);
$unique = array_unique($category);
sort($unique);


//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['special_price_submit'])){
        //call method addToCart
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }


}

$in_cart = $Cart->getCartId($product->getData('cart'));

?>

<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Produse</h4>
        <div id="filter" class="button-group font-size-16 text-right font-baloo">
            <button class="btn is-checked" data-filter="*">Toate Produsele</button>
            <?php
            array_map(function($category){
                printf('<button class="btn " data-filter=".%s">%s</button>',$category,$category);
            },$unique);
            ?>
        </div>
        <div class="grid">
            <?php array_map(function($item)use($in_cart){?>
            <div class="grid-item border <?php echo $item['item_category']??"Brand";?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id'])?>"><img src="<?php echo $item['item_image']??"./assets/products/01.png";?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6 class="font-rubik"><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span><?php echo $item['item_price'] ?? '0';?> lei</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??"1"?>">
                                <input type="hidden" name="user_id" value="<?php echo"1"?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">Există în coș</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Adaugă în coș</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php },$product_shuffle) ?>
        </div>


    </div>
</section>

<!--!Special price-->