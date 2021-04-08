<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Work</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="icon" href="./to do check.png" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div class="app-container">
        <div class="app-header">
            <div class="app-header-left">
                <p class="app-name">My Work</p>
            </div>
            <div class="app-header-right">
                <button class="mode-switch" title="Switch Theme">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <defs></defs>
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>
                <button id="myBtn" class="add-btn" title="Add New Project">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                </button>
            </div>
            <button class="messages-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                </svg>
            </button>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <?php
                // initialize errors variable
                $taskErrors = "";

                // echo "You are reading php";

                // connect to database
                // $tasksdb = mysqli_connect("127.0.0.1", "designer2", "PleaseDoNotStealMyPassword!!", "todo");

                // if ($tasksdb->connect_errno) {
                //     echo "Connect failed";
                //     printf("Connect failed: %s\n", $mysqli->connect_error);
                //     exit();
                // }

                // if (!$tasksdb) {
                //     echo "No tasksdb";
                //     die("Connection failed: " . mysqli_connect_error());
                // }

                // // insert a quote if submit button is clicked
                // if (isset($_POST['submit'])) {
                //     echo "you submitted a task";
                //     if (empty($_POST['task'])) {
                //         $taskErrors = "You must fill in the task";
                //     } else {
                //         echo "else";
                //         $task = isset($_POST['task']) ? $_POST['task'] : '';
                //         echo $task;
                //         $taskssql = "INSERT INTO tasks (task) VALUES ('$task')";
                //         echo "SQL: " . $taskssql;

                //         mysqli_query($tasksdb, $taskssql);
                //         // header('location: index.php');
                //     }
                // }

                // if (isset($_GET['del_task'])) {
                //     $id = $_GET['del_task'];

                //     mysqli_query($tasksDB, "DELETE FROM todo.tasks WHERE id=" . $id);
                //     header('location: index.php');
                // }

                // mysqli_close($db);
                ?>

                <?php
                // initialize errors variable
                $projectNameErrors = $dateErrors = "";

                // connect to database
                // $dbuser = 'lucyswett';
                // $dbpass = 'myPostgresPassword!!';
                // $host = '127.0.0.1';
                // $dbname = 'lucyswett';

                // $db = pg_connect("host=127.0.0.1 port=5432 dbname=lucyswett user=lucyswett password=myPostgresPassword!!");

                // $projectsdb = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);

                // $db = (function(){
                //     $parts = (parse_url(getenv('DATABASE_URL') ?: 'postgresql://username:password@localhost:5432/your_database_name_here'));
                //     extract($parts);
                //     $path = ltrim($path, "/");
                //     return new PDO("pgsql:host={$host};port={$port};dbname={$path}", $user, $pass);
                // })();
                //mysql://b5a255fd2c0205:77f9d461@us-cdbr-east-03.cleardb.com/heroku_6f0ec5af5a7849e?reconnect=true
                // $db       = parse_url(getenv('postgres://bjjuhdpoahxqlt:2b976c80486ddf4e050488e7789a31894c647a3cd2729e63e7d6640f4aac59bb@ec2-3-91-127-228.compute-1.amazonaws.com:5432/dditvfuno4j5u5'));
                
                //Get Heroku ClearDB connection information
                // $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
                // $cleardb_server = $cleardb_url["host"];
                // echo "ClearDB server: " . $cleardb_server;
                // $cleardb_username = $cleardb_url["user"];
                // echo "ClearDB username: " . $cleardb_username;
                // $cleardb_password = $cleardb_url["pass"];
                // echo "ClearDB password: " . $cleardb_password;
                // $cleardb_db = substr($cleardb_url["path"], 1);
                // echo "ClearDB db: " . $cleardb_db;
                // $active_group = 'default';
                // $query_builder = TRUE;
                // Connect to DB
                // host, username, password, database
                //$conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

                //$conn = mysqli_connect('us-cdbr-east-03.cleardb.com', 'b5a255fd2c0205', '77f9d461', 'heroku_6f0ec5af5a7849e');

                // $projectsdb = parse_url(getenv("DATABASE_URL"));
                // $projectsdb["path"] = ltrim($projectsdb["path"], "/");
                // echo "projectsdb: " . $projectsdb["path"];

                $pg_conn = pg_connect(getenv("HEROKU_DATABASE_URL"));

                $pg_db = 'dditvfuno4j5u5';

                if ($pg_conn) {

                    echo 'Connection attempt succeeded.';
                    
                    } else {
                    
                    echo 'Connection attempt failed.';
                    
                    }

                //$conn = pg_connect("host=ec2-3-91-127-228.compute-1.amazonaws.com");
                // $result = pg_query($conn, "SELECT datname FROM pg_database");
                // while ($row = pg_fetch_row($result)) {
                //     echo "<p>" . htmlspecialchars($row[0]) . "</p>\n";
                // host, username, password, database
                // $projectsdb = mysqli_connect("127.0.0.1", "designer2", "PleaseDoNotStealMyPassword!!", "projects");

                // insert a quote if submit button is clicked
                if (isset($_POST['projects_submit'])) {
                    echo "You submitted a project";
                    function console_log($data)
                    {
                        echo '<script>';
                        echo 'console.log(' . json_encode($data) . ')';
                        echo '</script>';
                    }
                    console_log("You submitted a project");
                    if (empty($_POST['projectName']) || empty($_POST['date'])) {
                        if (empty($_POST['projectName'])) {
                            $projectNameErrors = "You must fill in the project name";
                            echo $projectNameErrors;
                        }

                        if (empty($_POST['date'])) {
                            $dateErrors = "Your must fill in the date";
                            echo $dateErrors;
                        }
                    } else {
                        $projectName = isset($_POST['projectName']) ? $_POST['projectName'] : '';
                        echo "Project Name: " . $projectName;
                        $date = isset($_POST['date']) ? $_POST['date'] : '';
                        echo "Date: " . $date;
                        $parts = explode('/', $date);
                        $yyyy_mm_dd = $parts[2] . '-' . $parts[0] . '-' . $parts[1];
                        echo "yyyy_mm_dd: " . $yyyy_mm_dd;
                        $daysLeft = $date - (new DateTime())->format('Y-m-d');
                        echo "days left: " . $daysLeft;
                        $description = isset($_POST['description']) ? $_POST['description'] : '';
                        echo "Description: " . $description;

                        $projectsQuery = "INSERT INTO $pg_db.projects VALUES (projectName, date, mmddyyyy, description) VALUES ('$projectName', '$yyyy_mm_dd', '$date', '$description')";
                        $result = pg_query($projectsQuery);
                        //$projectssql = "INSERT INTO projects.projects (projectName, date, mmddyyyy, description) VALUES ('$projectName', '$yyyy_mm_dd', '$date', '$description')";
                        //echo "Query: " . $projectsQuery;
                        //postgres://bjjuhdpoahxqlt:2b976c80486ddf4e050488e7789a31894c647a3cd2729e63e7d6640f4aac59bb@ec2-3-91-127-228.compute-1.amazonaws.com:5432/dditvfuno4j5u5
                        //mysqli_query($conn, $projectsQuery);
                        header('location: index.php');
                    }
                }

                if (isset($_GET['del_project'])) {
                    $id = $_GET['del_project'];

                    pg_query($conn, "DELETE FROM $pg_db.projects WHERE id=" . $id);
                    header('location: index.php');
                }

                
                ?>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    Project Name: <input type="text" name="projectName" value="">
                    <span class="error">*
                        <?php
                        echo $projectNameErrors;
                        ?>
                    </span>
                    <br><br>
                    Date: <input type="text" name="date" id="datepicker" value="">
                    <span class="error">*
                        <?php
                        echo $dateErrors;
                        ?>
                    </span>
                    <br><br>
                    Description: <br><textarea name="description" rows="5" cols="40"></textarea>
                    <br><br>
                    <input type="submit" name="projects_submit" value="Submit">
                </form>
            </div>

        </div>

        <div class="app-content">

            <div class="projects-section">
                <div class="projects-section-header">
                    <p>Projects</p>
                    <div class="view-actions">
                        <button class="view-btn list-view" title="List View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                <line x1="8" y1="6" x2="21" y2="6" />
                                <line x1="8" y1="12" x2="21" y2="12" />
                                <line x1="8" y1="18" x2="21" y2="18" />
                                <line x1="3" y1="6" x2="3.01" y2="6" />
                                <line x1="3" y1="12" x2="3.01" y2="12" />
                                <line x1="3" y1="18" x2="3.01" y2="18" />
                            </svg>
                        </button>
                        <button class="view-btn grid-view active" title="Grid View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7" />
                                <rect x="14" y="3" width="7" height="7" />
                                <rect x="14" y="14" width="7" height="7" />
                                <rect x="3" y="14" width="7" height="7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="projects-section-line">

                </div>

                <div class="project-boxes jsListView">
                    <?php
                    // select all projects if page is visited or refreshed
                    //$projects = pg_query("SELECT * FROM projects ORDER BY date ASC");
                    $projects = pg_query($pg_conn, "SELECT * FROM $pg_db.projects ORDER BY date ASC");

                    $j = 1;
                    while ($projectsRow = pg_fetch_array($projects)) {
                    //while ($projectsRow = mysqli_fetch_array($projects)) {

                        $dueDate =  strtotime($projectsRow['date']);
                        $today = strtotime((new DateTime())->format('Y-m-d'));
                        $secs = $dueDate - $today;
                        $daysLeft = 1 + $secs / 86400;

                        mysqli_close($conn);
                    ?>

                        <div class="project-box-wrapper">

                            <div class="project-box <?php
                                                    if ($daysLeft > 14) {
                                                        echo " future-status-box";
                                                    } else if ($daysLeft <= 14 && $daysLeft > 7) {
                                                        echo " soon-status-box";
                                                    } else {
                                                        echo " urgent-status-box";
                                                    }
                                                    ?>">


                                <div class="project-box-header">
                                    <span><?php echo $projectsRow['mmddyyyy']; ?></span>
                                    <div class="more-wrapper">
                                        <button class="project-btn-more">
                                            <a href="index.php?del_project=<?php echo $projectsRow['id'] ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1" />
                                                    <circle cx="12" cy="5" r="1" />
                                                    <circle cx="12" cy="19" r="1" />
                                                </svg>
                                            </a>
                                        </button>
                                    </div>


                                </div>
                                <div class="project-box-content-header">
                                    <p class="box-content-header"><?php echo $projectsRow['projectName']; ?></p>
                                    <p class="box-content-subheader"><?php echo $projectsRow['description']; ?></p>
                                </div>

                                <div class="project-box-footer">
                                    <div class="days-left
                  <?php
                        if ($daysLeft > 14) {
                            echo " future-status-color";
                        } else if ($daysLeft <= 14 && $daysLeft > 7) {
                            echo " soon-status-color";
                        } else {
                            echo " urgent-status-color";
                        }
                    ?>
                  ">
                                        <?php
                                        if ($daysLeft == 1) {
                                            echo $daysLeft . " Day Left";
                                        } else {
                                            echo $daysLeft . " Days Left";
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $j++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>

</body>

</html>