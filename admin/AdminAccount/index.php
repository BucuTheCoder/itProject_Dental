<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Cruz ental Clinic</title>
    
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head> 

<body>
<nav>
<header>
    <div class="logo"> <img src="../logo dental.png" alt="dental logo"></div>
    Cruz Dental Clinic
</header>


<ul>

     <li>
        <a href="../index.html">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
    </li>

    <li>
        <a href="#" class="sched-btn">
            <i class="fa-solid fa-calendar-days"></i> Schedule
            <span class="fas fa-caret-down first"></span>
        </a>
        <ul class="sched-show">
            <li><a href="#">Calendar</a></li>
            <li><a href="#">Schedule List</a></li>
        </ul>
    </li>

    <li>
        <a href="#" class="acct-btn">
            <i class="fa-solid fa-user-group"></i> Accounts
            <span class="fas fa-caret-down second"></span>
        </a>
        <ul class="acct-show">
            <li><a href="../admin/DoctorAccont/index.php">Dentist</a></li>
            <li><a href="#">Patients</a></li>
            <li><a href="../admin/AdminAccount/index.php">Administrator</a></li>
        </ul>
    </li>

    <li>
        <a href="#"> <i class="fa-solid fa-money-bill-wave"></i> Billing </a>
    </li>
    <li><a href="../announcement.html"><i class="fa-solid fa-bullhorn"></i> Announcements </a></li>
</ul>


<div class="logout">
    <li><a href="../billing.html"> <i class="fa-solid fa-right-from-bracket"></i> Logout </a></li>
    
</div>
</nav>

<div class="body_content">
       
<div class="header">
<br>
<br>
<br>
          <h4><b> <font size="+5.5">List of Administrators </font></b>
          <a href="admin-create.php">
            <button style='border: 2px solid black;padding:10px;border-radius: 25px;background:white; position: absolute; top: 10%;
  left: 50%; '>
            <i class="fa-solid fa-user-plus fa-s"></i></button> </a>
          
            
    <br>
    <br>
    <div class="col-xs-1 center-block" style="text-align:center;">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Admin Name</th>
                                    <th>Username</th>
                                    <th>Gender</th>
                                    <th>Mobile Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM admin";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $cruzdentaldatabase)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $cruzdentaldatabase['id']; ?></td>
                                                <td><?= $cruzdentaldatabase['Admin_Name']; ?></td>
                                                <td><?= $cruzdentaldatabase['Username']; ?></td>
                                                <td><?= $cruzdentaldatabase['Gender']; ?></td>
                                                <td><?= $cruzdentaldatabase['phone']; ?></td>
                                                <td>
                                                    <a href="../patient-referral.html?id=<?= $cruzdentaldatabase['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_cruzdentaldatabase" value="<?=$cruzdentaldatabase['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>