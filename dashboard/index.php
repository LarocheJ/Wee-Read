<?php 
    require('../includes/connection.php');

    $sql = "SELECT * FROM users";
    $stmt = mysqli_stmt_init($connection);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    include('../includes/head.php'); 
    
?> 

<div class="hero orange-bg mb-3">
    <div class="container">
        <h2 class="center white medium-heading">Dashboard</h2>
    </div>
</div>

<div class="container">
<div class="dashboard">
    <div class="center">
        <h3>
            <?php 
                $total_users = mysqli_num_rows($result);
                print $total_users;
            ?>
        </h3>
        <h2>Total registered users</h2>
    </div>

    <h1 class="center my-5">wee read</h1>
    <div class="grid">
        <div>
            <h3>
                <?php
                    $sql = "SELECT COUNT(*) AS total_users FROM `users` WHERE wee_read_status >= 1";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_object($result);
                    if($row->total_users == 0 ) {
                        print 0;
                    } else {
                        print $row->total_users;
                    }
                ?>
            </h3>
        <h2>Users who have started wee read</h2>
        </div>
        <div>
            <h3>
                <?php
                    $sql = "SELECT COUNT(*) AS total_users FROM `users` WHERE wee_read_status = 7";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_object($result) ;
                    if($row->total_users == 0) {
                        print 0;
                    } else {
                        print $row->total_users;
                    }
                ?>
            </h3>
            <h2>Users who have completed wee read</h2>
        </div>
        <div>
            <h3>
                <?php
                    $sql = "SELECT COUNT(*) AS total_users FROM `users` WHERE wee_read_volunteer = 'yes'";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_object($result) ;
                    if($row->total_users == 0) {
                        print 0;
                    } else {
                        print $row->total_users;
                    }
                ?>
            </h3>
            <h2>Users who have started wee read volunteer training</h2>
        </div>
        <div>
            <h3>
                <?php
                    $sql = "SELECT COUNT(*) AS total_users FROM `users` WHERE completed_wee_read_volunteer = 'yes'";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_object($result) ;
                    if($row->total_users == 0) {
                        print 0;
                    } else {
                        print $row->total_users;
                    }
                ?>
            </h3>
            <h2>Users who have completed wee read volunteer training</h2>
        </div>
    </div>

    <h1 class="center my-5">pee wee read</h1>
    <div class="grid">
        <div>
            <h3>
                <?php
                    $sql = "SELECT COUNT(*) AS total_users FROM `users` WHERE pee_wee_read_status >= 1";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_object($result) ;
                    if($row->total_users == 0) {
                        print 0;
                    } else {
                        print $row->total_users;
                    }
                ?>
            </h3>
            <h2>Users who have started pee wee read</h2>
        </div>
        <div>
            <h3>
            <?php
                $sql = "SELECT COUNT(*) AS total_users FROM `users` WHERE pee_wee_read_status = 10";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_object($result) ;
                if($row->total_users == 0) {
                    print 0;
                } else {
                    print $row->total_users;
                }
                ?>
            </h3>
            <h2>Users who have completed pee wee read</h2>
        </div>
        <div>
            <h3>
                <?php
                    $sql = "SELECT COUNT(*) AS total_users FROM `users` WHERE pee_wee_read_volunteer = 'yes'";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_object($result) ;
                    if($row->total_users == 0) {
                        print 0;
                    } else {
                        print $row->total_users;
                    }
                ?>
            </h3>
            <h2>Users who have started pee wee read volunteer training</h2>
        </div>
        <div>
            <h3>
                <?php
                    $sql = "SELECT COUNT(*) AS total_users FROM `users` WHERE completed_pee_wee_read_volunteer = 'yes'";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_object($result) ;
                    if($row->total_users == 0) {
                        print 0;
                    } else {
                        print $row->total_users;
                    }
                ?>
            </h3>
            <h2>Users who have completed pee wee read volunteer training</h2>
        </div>
    </div>
</div>

<?php
    // while($row = mysqli_fetch_assoc($result)) {
    //     print $row['full_name'];
    // }
?>

</div>

<?php include('../includes/footer.php'); ?>