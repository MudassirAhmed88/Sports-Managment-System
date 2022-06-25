<div class="row">
<div class="col-md-12">
    <div class="ritekhela-fancy-title-two">
        <h2>Pending Matches</h2>
    </div>
    <!--// Fixture Slider //-->

    <div class="ritekhela-fixture-slider">
       <?php include_once "admin/include/dbconn.php";
			$select = "SELECT * FROM `match_shedules` where match_status='Pending'";
			$run = mysqli_query($con, $select);
            $checck= mysqli_num_rows($run);
            if ($checck==0) 
            {
                ?>
                <span class="alert alert-danger">No match yet</span>
                <?php
            }
            else 
            {
			while ($row = mysqli_fetch_array($run)) 
			{
                $id= $row['id'];
				$team1 = $row['team_one'];
				$team2 = $row['team_two'];
				$date = $row['match_date'];
				$gametype = $row['game_type'];
				$time = $row['match_time'];
                $status= $row['match_status'];
			
		?>
        <div class="ritekhela-fixture-slider-layer">
            <div class="ritekhela-fixture-box">
                 <?php
                    $team_qry1= "SELECT * FROM `team account` WHERE `id`='$team1'";
                    $team_qry2= "SELECT * FROM `team account` WHERE `id`= '$team2'";
                    $run_team_qry1= mysqli_query($con, $team_qry1);
                    $run_team_qry2= mysqli_query($con, $team_qry2);

                    $row_team1= mysqli_fetch_array($run_team_qry1);
                    $row_team2= mysqli_fetch_array($run_team_qry2);
                    $teamName1= $row_team1['team_name'];
                    $teamName2= $row_team2['team_name'];
                     ?>
                <span class="layer-shape"></span>
                <div align="center" style="color: white">
                    <?php echo $teamName1; ?>
                    <br> <h3 style="color: white">VS</h3>
                    <?php echo $teamName2; ?>
                </div>
                <ul>
                    <li>Date: <span><?php echo $date; ?></span></li>
                    <li>Time: <span><?php echo $time; ?></span></li>
                </ul>
            </div>
        </div>
        <?php }}?>
    </div>
</div>

    <!--// Fixture Slider //-->