<?php
use frontend\widgets\test;
use frontend\assets\AppAsset;

/* @var $this yii\web\View */
$this->title = 'wzjg520';

AppAsset::registerStaticJs($this, '@web/js/index.js');
AppAsset::registerStaticCss($this, '@web/css/index.css');

?>
<div>

    <div id="myCarousel" class="carousel slide">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="/uploads/banner1.jpg" alt="First slide">
         <div class="carousel-caption">标题 1</div>
      </div>
      <div class="item">
         <img src="/uploads/banner2.jpg" alt="Second slide">
         <div class="carousel-caption">标题 2</div>
      </div>
      <div class="item">
         <img src="/uploads/banner3.jpg" alt="Third slide">
         <div class="carousel-caption">标题 3</div>
      </div>
   </div>
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 


    <div class="body-content">
        <p></p>
        <div class="row">
            <?php for($i=0;$i<6;$i++){?>
            <div class="col-sm-3">  
                <div class="thumbnail">
                  <img src="/uploads/1.jpg" alt="...">
                  <div class="caption">
                    <h3>商城项目</h3>
                    <p>这个项目使很好的呀</p>
                  </div>
                </div>              
            </div>
            <?php }?>
            <?php for($i=0;$i<6;$i++){?>
            <div class="col-sm-3">  
                <div class="thumbnail">
                  <img src="/uploads/1.jpg" alt="...">
                  <div class="caption">
                    <h3>商城项目</h3>
                    <p>这个项目使很好的呀这个项目使很好的呀这个项目使很好的呀这个项目使很好的呀这个项目使很好的呀
                    这个项目使很好的呀
                    这个项目使很好的呀
                    这个项目使很好的呀
                    这个项目使很好的呀
                    这个项目使很好的呀
                    这个项目使很好的呀
                    这个项目使很好的呀
                    </p>
                  </div>
                </div>              
            </div>
            <?php }?>
        </div>       
    </div>
</div>
<style>
#slide,#test{
	width:200px;
}
#slide{
	background:#ccc;
}
#test{
	border:1px solid #666;
}
</style>
<div id="slide">测试专用</div>
<div id="test" style="display: none;">
    <p>测试</p>
    <p>测试</p>
    <p>测试</p>
    <p>测试</p>
</div>

<?=test::widget(); ?>
