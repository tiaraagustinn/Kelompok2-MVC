<?php
use App\database\Connection;

session_start();
error_reporting(0);
$connection = new Connection();
$dbh = $connection->connect();

if(strlen($_SESSION['alogin'])=="")
{   header("Location: /"); }else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Management System</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="public/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="public/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="public/css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="public/css/prism/prism.css" media="screen">
    <link rel="stylesheet" href="public/css/main.css" media="screen">
    <script src="public/js/modernizr/modernizr.min.js"></script>
</head>
<body>
<div class="main-wrapper">
    <div class="content-wrapper">
        <div class="content-container">
            <!-- /.left-sidebar -->
            <div class="main-page">
                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-md-12">
                            <h2 class="title" align="center">Result Management System</h2>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                <section class="section" id="exampl">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h3 align="center">Student Result Details</h3>
                                            <hr />
                                            <?php
                                            // code Student Data
                                            $rollid=$_POST['rollid'];
                                            $classid=$_POST['class'];
                                            $_SESSION['rollid']=$rollid;
                                            $_SESSION['classid']=$classid;
                                            $query = "SELECT tblstudents.StudentName, tblstudents.RollId, tblstudents.RegDate, tblstudents.StudentId, tblstudents.Status, tblclasses.ClassName, tblclasses.Section FROM tblstudents JOIN tblclasses ON tblclasses.id=tblstudents.ClassId WHERE tblstudents.RollId=? AND tblstudents.ClassId=?";
                                            $stmt = $mysqli_connection->prepare($query);
                                            $stmt->bind_param('ss', $rollid, $classid);
                                            $stmt->execute();
                                            $resultss = $stmt->get_result();
                                            $cnt=1;
                                            if($resultss->num_rows > 0) {
                                                while($row = $resultss->fetch_assoc()) {
                                                    ?>
                                                    <p><b>Student Name :</b> <?php echo htmlentities($row['StudentName']);?></p>
                                                    <p><b>Student Roll Id :</b> <?php echo htmlentities($row['RollId']);?></p>
                                                    <p><b>Student Class:</b> <?php echo htmlentities($row['ClassName']);?>(<?php echo htmlentities($row['Section']);?>)</p>
                                                    <?php
                                                }
                                            }
                                            ?>
                                    </div>
                                    <div class="panel-body p-20">
                                        <table class="table table-hover table-bordered" border="1" width="100%">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th style="text-align: center">#</th>
                                                    <th style="text-align: center">Subject</th>    
                                                    <th style="text-align: center">Marks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Code for result
                                                $query = "SELECT t.StudentName, t.RollId, t.ClassId, t.marks, t.SubjectId, tblsubjects.SubjectName FROM (SELECT sts.StudentName, sts.RollId, sts.ClassId, tr.marks, SubjectId FROM tblstudents AS sts JOIN tblresult AS tr ON tr.StudentId=sts.StudentId) AS t JOIN tblsubjects ON tblsubjects.id=t.SubjectId WHERE (t.RollId=? AND t.ClassId=?)";
                                                $stmt = $mysqli_connection->prepare($query);
                                                $stmt->bind_param('ss', $rollid, $classid);
                                                $stmt->execute();
                                                $results = $stmt->get_result();
                                                $cnt=1;
                                                $totlcount = 0;
                                                if($results->num_rows > 0) {
                                                    while($row = $results->fetch_assoc()) {
                                                        ?>
                                                        <tr>
                                                            <th scope="row" style="text-align: center"><?php echo htmlentities($cnt);?></th>
                                                            <td style="text-align: center"><?php echo htmlentities($row['SubjectName']);?></td>
                                                            <td style="text-align: center"><?php echo htmlentities($row['marks']);?></td>
                                                        </tr>
                                                        <?php 
                                                        $totlcount += $row['marks'];
                                                        $cnt++;
                                                    }
                                                ?>
                                                <tr>
                                                    <th scope="row" colspan="2" style="text-align: center">Total Marks</th>
                                                    <td style="text-align: center"><b><?php echo htmlentities($totlcount); ?></b> out of <b><?php echo htmlentities(($cnt-1)*100); ?></b></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2" style="text-align: center">Percentage</th>           
                                                    <td style="text-align: center"><b><?php echo htmlentities($totlcount*(100)/(($cnt-1)*100)); ?> %</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" align="center"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" OnClick="CallPrint(this.value)" ></i></td>
                                                </tr>
                                                <?php
                                                } else { ?>
                                                    <tr>
                                                        <td colspan="3" style="text-align: center">No results found</td>
                                                    </tr>
                                                <?php }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.main-page -->
        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.main-wrapper -->
<!-- ========== COMMON JS FILES ========== -->
<script src="public/js/jquery/jquery-2.2.4.min.js"></script>
<script src="public/js/bootstrap/bootstrap.min.js"></script>
<script src="public/js/pace/pace.min.js"></script>
<script src="public/js/lobipanel/lobipanel.min.js"></script>
<script src="public/js/iscroll/iscroll.js"></script>
<!-- ========== PAGE JS FILES ========== -->
<script src="public/js/prism/prism.js"></script>
<!-- ========== THEME JS ========== -->
<script src="public/js/main.js"></script>
<script>
    function CallPrint(strid) {
        var prtContent = document.getElementById("exampl");
        var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }

</script>
<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>
