<!-- REST Connection Start -->
<?php
 
  session_start();
 
  if(empty($_SESSION))
      header('Location: index.php');
 
  require_once('executeREST.php');
  $url = $_SESSION['url'].'/api/1.0/'.$_SESSION['ws'].'/cases';
  $case_list = executeREST( $url, 'GET', array(), $_SESSION['access_token'] );
 
?>
<!-- REST Connection End -->
<?php include_once("header.html"); ?>
<!-- Page Content Start-->
        <div>
             <h3>INBOX (<?php echo count($case_list); ?>)</h3>
             <table class="table table-hover table-bordered">
               <thead><tr class="bg-primary">
                <th>#</th>
                <th>Case Number</th>
                <th>Process</th>
                <th>Task</th>
                <th>Sent By</th>
                <th>Due Date</th>
                <th>Status</th>
                <th></th></tr></thead>
                <?php
                echo $case_list;
                ?>
                <!--?php
                    $i = 0;
                    foreach($case_list as $case){
                    $i++;
                    echo "<tr><td>".$i."</td>
                        <td>".$case['app_number']."</td>
                        <td>".$case['app_pro_title']."</td>
                        <td>".$case['app_tas_title']."</td>
                        <td>".$case['app_del_previous_user']."</td>
                        <td>".$case['del_task_due_date']."</td>
                        <td>".$case['app_status']."</td>
                        <td><a href='dynaform.php?proj=".$case['pro_uid']."&task=".$case['tas_uid']."&app=".$case['app_uid']."' class='btn btn-default btn-xs'>Open</a></td></tr>";
                    }
                ?-->
             </table>
        </div>
<!-- Page Content End-->
<?php include_once("footer.html"); ?>
