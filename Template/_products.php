<!--product-->
<?php
    $item_id = $_GET['item_id']??1;
    foreach($product->getData() as $item):
        if($item['item_id']==$item_id):
?>


<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']??"./assets/products/01.png";?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Cumpără acum</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">Adaugă în coș</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>Vândut de <?php echo $item['item_brand'] ?? "Unknown"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                </div>
                <hr class="m-0">
                <!-- product price-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Preț:</td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['item_price'] ?? "0"; ?> LEI</span><small class="text-dark font-size-12">&nbsp;&nbsp;&nbsp;&nbsp;TVA inclus  </small></td>
                    </tr>
                </table>
                <!-- !product price-->

                <!-- #policy -->
                <div class="policy">
                    <div class="d-flex">

                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a  class="font-rale font-size-12">14 Zile <br> pentru retur</a>
                        </div>


                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a  class="font-rale font-size-12">Oriunde <br> în țară</a>
                        </div>


                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a  class="font-rale font-size-12">Calitate <br> garantată</a>
                        </div>
                    </div>
                </div>
                <!-- !policy -->
                <hr>
                <!--order-details-->

                <div class="row">
                    <div class="col-6">
                        <!--color-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Culoare:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!--!color-->
                        <hr>
                        <!--Qty section-->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Cantitate:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-25 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!--!Qty section-->
                    </div>
                    <div class="col-6">

                    </div>
                </div>
                <br>
                <br>
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Vândut de <a href="https://www.facebook.com/arisaflowers.ro/" target="_blank">Arisa Flowers</a></small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp; Com.Cuzdrioara Str. Griviței 15A</small>
                </div>
                <!--!order-details-->


            </div>

            


        </div>
    </div>
</section>
<!--!product-->

<?php
    endif;
    endforeach;
    ?>