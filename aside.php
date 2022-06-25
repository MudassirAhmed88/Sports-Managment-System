 <?php
 error_reporting(0);
 $lt_news= "SELECT * FROM `news_updates` order by 1 DESC LIMIT 0,5";
 $lt_run= mysqli_query($con, $lt_news);
 $no=1;
 ?>
<aside class="col-md-">
    
    <!--// Widget Popular News //-->
    <div class="widget widget_popular_news">
        <div class="ritekhela-fancy-title-two">
            <h2>Letest News</h2>
        </div>
        <ul>
            <?php
             while ($lt_row = mysqli_fetch_array($lt_run)) 
            {
                $lt_id = $lt_row['id'];
                $lt_title = $lt_row['title'];
                $lt_date = $lt_row['date'];
                $lt_author = $lt_row['author'];
                $lt_image = $lt_row['image'];
                $lt_description = $lt_row['description'];
            
            ?>
            <li>
                <span><?php echo $no++; ?></span>
                <div class="popular_news_text">
                    <small>The Team</small>
                    <a href="news_detail.php?view=<?php echo $id; ?>"> 
                        <?php echo $lt_title; ?></a>
                    <time datetime="2008-02-14 20:00"><?php echo $lt_date;?></time>
                </div>
            </li>
        <?php } ?>
            
        </ul>
    </div>
    <!--// Widget Popular News //-->

    <!--// Widget Team Profile //-->
    <div class="widget widget_categories">
        <div class="ritekhela-fancy-title-two">
            <h2>Team Profiles</h2>
        </div>
        <ul>
            <?php
                $sel= "SELECT * FROM `team account`";
                $sel_run= mysqli_query($con, $sel);
                $sno=1;
                while ($row= mysqli_fetch_array($sel_run)) 
                {
                    $id= $row['id'];
                    $dep_name= $row['department_name'];
                    $team_name= $row['team_name']; 

                ?>
                <li>
                        
                        <div class="popular_news_text">
                            <a href="team_detail.php?view=<?php echo $id; ?>"><?php echo  $team_name; ?></a>
                        </div>
                    </li>
            <?php } ?>
        </ul>

    </div>
    <!--// Widget Team Profile //-->


    <div class="widget widget_social_media">
        <div class="ritekhela-fancy-title-two">
            <h2>Team Announsmet</h2> 
        </div><br><br><br>
        <div>
            <?php 
                $sel_ann= "SELECT * FROM `player_announsment`";
                $sel_run= mysqli_query($con, $sel_ann);
                if (mysqli_num_rows($sel_run)==0) 
                {
                    ?>
                    <span class="alert alert-danger">No Annousment Yet</span>
                    <?php
                }
                else
                {
                    $no=1;
                    while ($sel_row= mysqli_fetch_array($sel_run)) 
                    {
                        $id= $sel_row['id'];
                        $d_id= $sel_row['dpt_id'];
                        $title= $sel_row['title'];
                        $detail= $sel_row['detail'];
                        $date= $sel_row['date'];

                        $dpt_qry= "SELECT * FROM `team account` Where id='$d_id'";
                        $dpt_run= mysqli_query($con, $dpt_qry);
                        $dpt_row= mysqli_fetch_array($dpt_run);
                        $dpt_name= $dpt_row['team_name'];
                    
                
                ?>
                <p class="alert alert-success"><?php echo $no++ .". ".  $detail; ?> <small class="text-danger" style="font-weight: italic">Posted Date:<?php echo $date; ?></small> <br>
                    <b>Announsment for: <small class="text-danger"><?php echo "Team ". $dpt_name; ?></small></b>
                <?php }}?>
                </p>
                
        </div>
    </div>

    <!--// Widget Social Media //-->
    <div class="widget widget_social_media">
        <div class="ritekhela-fancy-title-two">
            <h2>Follow Us</h2>
        </div>
        <ul>
            <li>
                <a href="#" class="fb">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </a>
            </li>

            <li>
                <a href="#" class="instagram">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram</span>
                </a>
            </li>
            <li>
                <a href="#" class="twitter">
                    <i class="fab fa-twitter"></i>
                    <span>Twitter</span>
                </a>
            </li>
            <li>
                <a href="#" class="pint">
                    <i class="fab fa-pinterest-p"></i>
                    <span>Pinterest</span>
                </a>
            </li>
        </ul>
    </div>
    <!--// Widget Social Media //-->
</aside>
<!--// SideBaar //-->