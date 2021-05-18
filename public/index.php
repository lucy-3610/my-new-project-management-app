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
                $projectNameErrors = $dateErrors = "";

                $cleardb_db = 'projects';
                $conn = mysqli_connect('127.0.0.1', 'lucyswett', 'PleaseDoNotStealMyPassword!!', 'projects');

                // insert a quote if submit button is clicked
                if (!empty($_POST)) {
                    if (isset($_POST['projects_submit'])) {
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
                            $date = isset($_POST['date']) ? $_POST['date'] : '';
                            $parts = explode('/', $date);
                            $yyyy_mm_dd = $parts[2] . '-' . $parts[0] . '-' . $parts[1];
                            $daysLeft = date("d", strtotime($date) - (new DateTime())->format('Y-m-d'));
                            $description = isset($_POST['description']) ? $_POST['description'] : '';

                            $projectsQuery = "INSERT INTO $cleardb_db.projects (`id`, `projectName`, `date`, `mmddyyyy`, `description`) VALUES (NULL, '$projectName', '$yyyy_mm_dd', '$date', '$description')";
                            if (mysqli_query($conn, $projectsQuery)) {
                            } else {
                                echo "Error: " . $projectsQuery . "<br>" . mysqli_error($conn);
                            }
                        }
                    }
                }

                if (isset($_GET['del_project'])) {
                    $id = $_GET['del_project'];

                    mysqli_query($conn, "DELETE FROM $cleardb_db.projects WHERE id=" . $id);
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
                        <button class="view-btn list-view active" title="List View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                <line x1="8" y1="6" x2="21" y2="6" />
                                <line x1="8" y1="12" x2="21" y2="12" />
                                <line x1="8" y1="18" x2="21" y2="18" />
                                <line x1="3" y1="6" x2="3.01" y2="6" />
                                <line x1="3" y1="12" x2="3.01" y2="12" />
                                <line x1="3" y1="18" x2="3.01" y2="18" />
                            </svg>
                        </button>
                        <button class="view-btn grid-view" title="Grid View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7" />
                                <rect x="14" y="3" width="7" height="7" />
                                <rect x="14" y="14" width="7" height="7" />
                                <rect x="3" y="14" width="7" height="7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="projects-section-line"></div>

                <div class="project-boxes jsListView">
                    <?php
                    $projects = mysqli_query($conn, "SELECT * FROM $cleardb_db.projects ORDER BY date ASC");

                    $j = 1;
                    while ($projectsRow = mysqli_fetch_array($projects)) {

                        $dueDate =  strtotime($projectsRow['date']);
                        $today = strtotime((new DateTime())->format('Y-m-d'));
                        $secs = $dueDate - $today;
                        $daysLeft = 1 + $secs / 86400;
                    ?>

                        <div class="project-box-wrapper">

                            <div class="project-box <?php
                                                    if ($daysLeft > 14) {
                                                        echo " future-status-box";
                                                    } else if ($daysLeft <= 14 && $daysLeft > 7) {
                                                        echo " soon-status-box";
                                                    } else if ($daysLeft < 0) {
                                                        echo " past-status-box";
                                                    } else {
                                                        echo " urgent-status-box";
                                                    }
                                                    ?>">

                                <div class="project-box-header">
                                    <span><?php echo $projectsRow['mmddyyyy']; ?></span>
                                    <div class="more-wrapper">
                                        <button class="project-btn-more">
                                            <a href="index.php?del_project=<?php echo $projectsRow['id'] ?>">
                                                <span class="close">&times;</span>
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
                        } else if ($daysLeft < 0) {
                            echo " past-status-color";
                        } else {
                            echo " urgent-status-color";
                        }
                    ?>
                  ">
                                        <?php
                                        if ($daysLeft < 0) {
                                            echo ltrim($daysLeft, '-0') . " Days Ago";
                                        } else if ($daysLeft == 1) {
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