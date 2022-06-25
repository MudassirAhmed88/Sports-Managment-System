 <?php
 $sel_news= "SELECT * FROM `news_updates` order by 1 DESC LIMIT 0,4";
 $sel_run= mysqli_query($con, $sel_news);

 ?>
 <!--// Left Section //-->
<div class="col-md-8">
    <!--// Fancy Title Two //-->
    <div class="ritekhela-fancy-title-two">
        <h2>News & Updates</h2>
    </div>
    <!--// Fancy Title Two //-->

    <!--// Latest Blog's //-->
    <div class="ritekhela-blogs ritekhela-blog-view1">
        <ul class="row">
            <?php 
            while ($row = mysqli_fetch_array($sel_run)) 
            {
                $id = $row['id'];
                $title = $row['title'];
                $date = $row['date'];
                $author = $row['author'];
                $image = $row['image'];
                $description = substr($row['description'], 0, 100);
            
             ?>
            <li class="col-md-6">
                <figure><a href="#"><?php echo "<img src='admin/image/$image'>"; ?> <i class="fa fa-link"></i> </a></figure>
                <div class="ritekhela-blog-view1-text">
                    <ul class="ritekhela-blog-options">
                        <li><i class="far fa-calendar-alt"></i> <?php echo $date; ?></li>
                        <li><a href="#"><i class="far fa-comment"></i> Comments</a></li>
                    </ul>
                    <h2><a href="#"><?php echo $title; ?></a></h2>
                    <p><?php ?></p>
                    <a href="#" class="ritekhela-blog-view1-btn">Read More</a>
                </div>
            </li> 
        <?php } ?>
        </ul>
    </div>
    <!--<div class="ritekhela-blogs ritekhela-blog-view2">
        <ul class="row">
            <li class="col-md-6">
                <figure><a href="#"><img src="extra-images/blog-view2-1.jpg" alt=""></a></figure>
                <div class="ritekhela-blog-view2-text">
                    <h2><a href="#">Ipsum cursus leo vel metus</a></h2>
                    <time datetime="2008-02-14 20:00">July 01, 2019 5:50 am</time>
                </div>
            </li>
            <li class="col-md-6">
                <figure><a href="#"><img src="extra-images/blog-view2-2.jpg" alt=""></a></figure>
                <div class="ritekhela-blog-view2-text">
                    <h2><a href="#">TV host’s hand impaled</a></h2>
                    <time datetime="2008-02-14 20:00">June 01, 2019 6:20 am</time>
                </div>
            </li>
            <li class="col-md-6">
                <figure><a href="#"><img src="extra-images/blog-view2-3.jpg" alt=""></a></figure>
                <div class="ritekhela-blog-view2-text">
                    <h2><a href="#">One more time? Federer</a></h2>
                    <time datetime="2008-02-14 20:00">March 01, 2019 2:40 am</time>
                </div>
            </li>
            <li class="col-md-6">
                <figure><a href="#"><img src="extra-images/blog-view2-4.jpg" alt=""></a></figure>
                <div class="ritekhela-blog-view2-text">
                    <h2><a href="#">Federer golden opportunity</a></h2>
                    <time datetime="2008-02-14 20:00">April 01, 2019 1:80 am</time>
                </div>
            </li>
            <li class="col-md-6">
                <figure><a href="#"><img src="extra-images/blog-view2-5.jpg" alt=""></a></figure>
                <div class="ritekhela-blog-view2-text">
                    <h2><a href="#">Ipsum cursus leo vel metus</a></h2>
                    <time datetime="2008-02-14 20:00">May 01, 2019 9:50 am</time>
                </div>
            </li>
            <li class="col-md-6">
                <figure><a href="#"><img src="extra-images/blog-view2-6.jpg" alt=""></a></figure>
                <div class="ritekhela-blog-view2-text">
                    <h2><a href="#">TV host’s hand impaled</a></h2>
                    <time datetime="2008-02-14 20:00">Jan 01, 2019 3:10 am</time>
                </div>
            </li>
        </ul>
    </div> -->
    <!--// Latest Blog's //-->



    <!--// Match Result //-->
    <div class="ritekhela-match-result">
        <div class="ritekhela-match-title">
            <h4>Latest Match Result</h4>
            <span>Saturday, March 24th, 2016</span>
        </div>
        <ul>
            <li>
                <img src="extra-images/latest-result-logo-1.png" alt="">
                <h4><a href="#">Yorkshire</a></h4>
                <span>03 Mark Baily (21)</span>
            </li>
            <li class="ritekhela-match-score">
                <h5>FINAL SCORE</h5>
                <p><strong>79</strong> <small>:</small> 73</p>
            </li>
            <li>
                <img src="extra-images/latest-result-logo-2.png" alt="">
                <h4><a href="#">Sharks Club</a></h4>
                <span>03 Mark Baily (21)</span>
            </li>
        </ul>
    </div>
    <!--// Match Result //-->

</div>
<!--// Left Section //-->