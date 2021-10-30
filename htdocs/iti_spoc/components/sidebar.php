<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
</head>
<body style="margin: 0;">
<div class="sidebar-container">
    <div class="sidebar-logo">
        <h3 style="margin: 0; color: white;">Quality Monitoring Framework</h3>
    </div>
    <ul style="" class="sidebar-navigation">
        <li class="header">Navigation</li>
        <li>
            <a style="" href="/iti_spoc/dashboard.php">
                <i class="fa fa-home" aria-hidden="true"></i>HOME
            </a>
        </li>
        <li style="font-weight: bold;" class="header">BASIC OPERATIONS</li>
        <li>
            <a href="/iti_spoc/iti/iti_edit.php?NCVT_MIS_code=<?php echo $id; ?>">
                <i class="fa fa-tachometer" aria-hidden="true"></i> ITI Information
          </a>
        </li>
        <li>
            <a href="/iti_spoc/trainee/trainee.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Enroll New Trainee
            </a>
        </li>
        <li>
            <a href="/iti_spoc/trainee/trainee_display.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> List of Trainees
            </a>
        </li>
        <li style="font-weight: bold;" class="header">REPORTS</li>
         <li>
            <a href="/iti_spoc/reports/add_attendance.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Add Attendance
          </a>
        </li>
        <li>
            <a href="/iti_spoc/reports/attendance.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> View Attendance
          </a>
        </li>
        <li>
            <a href="/iti_spoc/reports/add_assessment.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Add Assessment
          </a>
        </li>
        <li>
            <a href="/iti_spoc/reports/assessment.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> View Assessment
            </a>
        </li>
        <li>
            <a href="/iti_spoc/reports/add_course_progress.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Add Curriculum Progress
          </a>
        </li>    
        <li>
            <a href="/iti_spoc/reports/course_progress.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> View Curriculum Progress
          </a>
        </li>
        <li>
            <a href="/iti_spoc/reports/add_placement.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Add Placement
          </a>
        </li>
        <li>
            <a href="/iti_spoc/reports/placement.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> View Placement
            </a>
        </li>
        <li>
            <a href="/iti_spoc/reports/add_teaching_aids.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Add Teaching Aids
          </a>
        </li>
        <li>
            <a href="/iti_spoc/reports/teaching_aids.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> View Teaching Aids
            </a>
        </li>
      <li style="font-weight: bold;" class="header">VIRTUAL INSPECTION</li>
        <li>
            <a style="font-weight: bold;" href="/iti_spoc/virtual_inspection/virtual_inspection.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> View
            </a>
        </li>
        <li>
            <a style="font-weight: bold;" href="/iti_spoc/virtual_inspection/add_virtual_inspection.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Add
            </a>
        </li>
</div>
</body>
</html>