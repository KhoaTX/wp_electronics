<aside id="column-left" class="col-sm-3 ">
   <div class="box category">
      <div class="box-heading">
         <h3><i class="flaticon-show5"></i>Categories</h3>
      </div>
      <div class="box-content">
         <div class="box-category">
            <ul class="menu">
               <li>
                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=33">TV &amp; Video</a>
               </li>
               <li>
                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=25">Mobile</a>
                  <ul>
                     <li>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=32">Aenean viverra</a>
                     </li>
                     <li>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=31">Nullam iaculis</a>
                     </li>
                     <li>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=30">Phasellus vel</a>
                     </li>
                     <li>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=28" class="parent">Praesent imperdiet</a>
                        <ul>
                           <li>
                              <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=36">Aliquam eget</a>
                           </li>
                           <li>
                              <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=35">Lorem ipsum</a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=29">Praesent sodales</a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=34">Computing</a>
               </li>
               <li>
                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=18">Cameras &amp; Camcorders</a>
               </li>
               <li>
                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=37">Household Items</a>
               </li>
               <li>
                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=20">Kitchen Appliances</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <script>
      jQuery(document).ready(function(){
      jQuery('.box-category .menu').find('li>ul').before('<i class="fa fa-angle-right"></i>');
        jQuery('.box-category .menu li i').on("click", function(){
         if (jQuery(this).hasClass('fa-angle-down')) { jQuery(this).removeClass('fa-angle-down').parent('li').find('> ul').slideToggle(); }
          else {
           jQuery(this).addClass('fa-angle-down').parent('li').find('> ul').slideToggle();
          }
        });
      });
   </script>
   <div class="box specials">
      <div class="box-heading">
         <h3>Specials</h3>
      </div>
      <div class="box-content">
         <div class="product-layout">
            <div class="specials-scroll">
               <div>
                  <div class="product-thumb transition equal-height-767">
                     <div class="sale">Sale</div>
                     <div class="image">
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=33">
                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-52-76x55.png" alt="Aliquam dolor tellus" title="Aliquam dolor tellus" class="img-responsive"/>
                        </a>
                     </div>
                     <div class="caption">
                        <div class="price">
                           <span class="price-new">
                           $150.00 </span>
                           <span class="price-old">
                           $200.00 </span>
                        </div>
                        <div class="name">
                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=33">
                           Aliquam dolor tellus </a>
                        </div>
                        <div class="description">
                        </div>
                        <div class="rating">
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                        </div>
                     </div>
                     <div class="cart-button"></div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div>
                  <div class="product-thumb transition equal-height-767">
                     <div class="sale">Sale</div>
                     <div class="image">
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=28">
                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-76x55.png" alt="Aliquam eget" title="Aliquam eget" class="img-responsive"/>
                        </a>
                     </div>
                     <div class="caption">
                        <div class="price">
                           <span class="price-new">
                           $80.00 </span>
                           <span class="price-old">
                           $100.00 </span>
                        </div>
                        <div class="name">
                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=28">
                           Aliquam eget </a>
                        </div>
                        <div class="description">
                        </div>
                        <div class="rating">
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                        </div>
                     </div>
                     <div class="cart-button"></div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div>
                  <div class="product-thumb transition equal-height-767">
                     <div class="sale">Sale</div>
                     <div class="image">
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47">
                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-76x55.png" alt="Consectetur adipiscing" title="Consectetur adipiscing" class="img-responsive"/>
                        </a>
                     </div>
                     <div class="caption">
                        <div class="price">
                           <span class="price-new">
                           $60.00 </span>
                           <span class="price-old">
                           $100.00 </span>
                        </div>
                        <div class="name">
                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47">
                           Consectetur adipiscing </a>
                        </div>
                        <div class="description">
                        </div>
                        <div class="rating">
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                        </div>
                     </div>
                     <div class="cart-button"></div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div>
                  <div class="product-thumb transition equal-height-767">
                     <div class="sale">Sale</div>
                     <div class="image">
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=30">
                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-76x55.png" alt="Dolor sit amet" title="Dolor sit amet" class="img-responsive"/>
                        </a>
                     </div>
                     <div class="caption">
                        <div class="price">
                           <span class="price-new">
                           $80.00 </span>
                           <span class="price-old">
                           $100.00 </span>
                        </div>
                        <div class="name">
                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=30">
                           Dolor sit amet </a>
                        </div>
                        <div class="description">
                        </div>
                        <div class="rating">
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                        </div>
                     </div>
                     <div class="cart-button"></div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div>
                  <div class="product-thumb transition equal-height-767">
                     <div class="sale">Sale</div>
                     <div class="image">
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=44">
                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-34-76x55.png" alt="Donec non posuere" title="Donec non posuere" class="img-responsive"/>
                        </a>
                     </div>
                     <div class="caption">
                        <div class="price">
                           <span class="price-new">
                           $90.00 </span>
                           <span class="price-old">
                           $1,000.00 </span>
                        </div>
                        <div class="name">
                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=44">
                           Donec non posuere </a>
                        </div>
                        <div class="description">
                        </div>
                     </div>
                     <div class="cart-button"></div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div>
                  <div class="product-thumb transition equal-height-767">
                     <div class="sale">Sale</div>
                     <div class="image">
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=41">
                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-76x55.png" alt="Lorem euismod" title="Lorem euismod" class="img-responsive"/>
                        </a>
                     </div>
                     <div class="caption">
                        <div class="price">
                           <span class="price-new">
                           $90.00 </span>
                           <span class="price-old">
                           $100.00 </span>
                        </div>
                        <div class="name">
                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=41">
                           Lorem euismod </a>
                        </div>
                        <div class="description">
                        </div>
                     </div>
                     <div class="cart-button"></div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div>
                  <div class="product-thumb transition equal-height-767">
                     <div class="sale">Sale</div>
                     <div class="image">
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=42">
                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-22-76x55.png" alt="Lorem ipsum" title="Lorem ipsum" class="img-responsive"/>
                        </a>
                     </div>
                     <div class="caption">
                        <div class="price">
                           <span class="price-new">
                           $90.00 </span>
                           <span class="price-old">
                           $100.00 </span>
                        </div>
                        <div class="name">
                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=42">
                           Lorem ipsum </a>
                        </div>
                        <div class="description">
                        </div>
                        <div class="rating">
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                        </div>
                     </div>
                     <div class="cart-button"></div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div>
                  <div class="product-thumb transition equal-height-767">
                     <div class="sale">Sale</div>
                     <div class="image">
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49">
                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-49-76x55.png" alt="Mauris gravida" title="Mauris gravida" class="img-responsive"/>
                        </a>
                     </div>
                     <div class="caption">
                        <div class="price">
                           <span class="price-new">
                           $150.00 </span>
                           <span class="price-old">
                           $199.99 </span>
                        </div>
                        <div class="name">
                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49">
                           Mauris gravida </a>
                        </div>
                        <div class="description">
                        </div>
                        <div class="rating">
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                           <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i>
                           <i class="fa fa-star-o fa-stack-2x"></i>
                           </span>
                        </div>
                     </div>
                     <div class="cart-button"></div>
                     <div class="clear"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
      if ($('.specials-scroll').length > 0) {
          var slider = $('.specials-scroll');
          if ($(window).width() > 767) {
              slider.bxSlider({
                  mode: 'vertical',
                  slideWidth: 270,
                  minSlides: 3,
                  maxSlides: 3,
                  moveSlides: 1,
                  pager: false,
                  slideMargin: 30,
                  controls: true
              });
          } else{
              if (!slider.hasClass('activated')){
                  slider.owlCarousel({
                      items:3,
                      margin: 30,
                      smartSpeed: 450,
                      dots: false,
                      nav: true,
                      loop: true,
                      navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
                      responsive: {
                          0: {items: 1},
                          370: {items: 2},
                          570: {items: 3}
                      }
                  });
                  slider.addClass('activated');
              }
          }
      }
   </script> 
   <div class="box bestsellers">
      <div class="box-heading">
         <h3>Bestsellers</h3>
      </div>
      <div class="box-content">
         <div class="bestseller-slider">
            <div class="product-layout">
               <div class="product-thumb transition .equal-height-767-2">
                  <div class="image">
                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47"><img alt="Consectetur adipiscing" title="Consectetur adipiscing" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-76x55.png" src="<?= get_bloginfo("template_url"); ?>/<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-76x55.png"/></a>
                  </div>
                  <div class="caption">
                     <div class="price">
                        <span class="price-new">$60.00</span> <span class="price-old">$100.00</span>
                     </div>
                     <h4>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47">Consectetur adipiscing</a>
                     </h4>
                     <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                     </div>
                  </div>
                  <div class="cart-button"></div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="product-layout">
               <div class="product-thumb transition .equal-height-767-2">
                  <div class="image">
                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49"><img alt="Mauris gravida" title="Mauris gravida" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-49-76x55.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-49-76x55.png"/></a>
                  </div>
                  <div class="caption">
                     <div class="price">
                        <span class="price-new">$150.00</span> <span class="price-old">$199.99</span>
                     </div>
                     <h4>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49">Mauris gravida</a>
                     </h4>
                     <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                     </div>
                  </div>
                  <div class="cart-button"></div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="product-layout">
               <div class="product-thumb transition .equal-height-767-2">
                  <div class="image">
                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=33"><img alt="Aliquam dolor tellus" title="Aliquam dolor tellus" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-52-76x55.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-52-76x55.png"/></a>
                  </div>
                  <div class="caption">
                     <div class="price">
                        <span class="price-new">$150.00</span> <span class="price-old">$200.00</span>
                     </div>
                     <h4>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=33">Aliquam dolor tellus</a>
                     </h4>
                     <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                     </div>
                  </div>
                  <div class="cart-button"></div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="product-layout">
               <div class="product-thumb transition .equal-height-767-2">
                  <div class="image">
                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=48"><img alt="Praesent imperdiet" title="Praesent imperdiet" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-19-76x55.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-19-76x55.png"/></a>
                  </div>
                  <div class="caption">
                     <div class="price">
                        $100.00 
                     </div>
                     <h4>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=48">Praesent imperdiet</a>
                     </h4>
                     <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                     </div>
                  </div>
                  <div class="cart-button"></div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="product-layout">
               <div class="product-thumb transition .equal-height-767-2">
                  <div class="image">
                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=35"><img alt="Aenean viverra" title="Aenean viverra" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-46-76x55.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-46-76x55.png"/></a>
                  </div>
                  <div class="caption">
                     <div class="price">
                        $100.00 
                     </div>
                     <h4>
                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=35">Aenean viverra</a>
                     </h4>
                     <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                     </div>
                  </div>
                  <div class="cart-button"></div>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
      if ($('.bestseller-slider').length > 0) {
          var slider =  $(".bestseller-slider");
          if ($(window).width() > 767) {
              slider.bxSlider({
                  mode: 'vertical',
                  slideWidth: 270,
                  minSlides: 3,
                  maxSlides: 3,
                  moveSlides: 1,
                  pager: false,
                  slideMargin: 30,
                  controls: true
              });
          }else{
              if (!slider.hasClass('activated')){
                  slider.owlCarousel({
                      items:3,
                      margin: 30,
                      smartSpeed: 450,
                      dots: false,
                      nav: true,
                      loop: true,
                      navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
                      responsive: {
                          0: {items: 1},
                          370: {items: 2},
                          570: {items: 3}
                      }
                  });
                  slider.addClass('activated');
              }
          }
      }
   </script>
</aside>