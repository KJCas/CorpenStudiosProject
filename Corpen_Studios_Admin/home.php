<?php include_once './conn/conn.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corpen Studios Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        nav{
            top: 0;
            width: 100%;
            padding: 10px;
            position: fixed;
            display: flex;
            background-color: #141414;
            font-weight: bold;
        }
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url("../Corpen_Studios/images/Welcome 2-1.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
        }
        .content {
            backdrop-filter: blur(100px);
            color: rgb(255, 255, 255);
            padding: 40px;
            border: 2px solid;
            border-radius: 10px;
            margin-top: 100px;
        }
        .table {
            color: rgb(255, 255, 255) !important;
        }
        td button {
            font-size: 20px;
            width: 30px;
        }
    </style>
</head>

<body>
    <nav class="navbar-expand-lg navbar-dark">
        <a class="navbar-brand ml-5" href="home.php">Corpen Studios Admin</a>
        <img src="../Corpen_Studios/images/CS Logo.png" alt="CS logo" width="40px" height="40px">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Update Modal -->
    <div class="modal fade mt-5" id="updateUserModal" tabindex="-1" aria-labelledby="updateUser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateUserModal">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./endpoint/update-user.php" method="POST">
                        <div class="form-group row">
                            <div class="col-6">
                                <input type="text" name="tbl_user_id" id="updateUserID" hidden>
                                <label for="updateFirstName">First Name:</label>
                                <input type="text" class="form-control" id="updateFirstName" name="first_name">
                            </div>
                            <div class="col-6">
                                <label for="updateLastName">Last Name:</label>
                                <input type="text" class="form-control" id="updateLastName" name="last_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-5">
                                <label for="updateContactNumber">Contact Number:</label>
                                <input type="number" class="form-control" id="updateContactNumber" name="contact_number" maxlength="11">
                            </div>
                            <div class="col-7">
                                <label for="updateEmail">Email:</label>
                                <input type="text" class="form-control" id="updateEmail" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="updateUsername">Username:</label>
                            <input type="text" class="form-control" id="updateUsername" name="username">
                        </div>
                        <div class="form-group">
                            <label for="updatePassword">Password:</label>
                            <input type="text" class="form-control" id="updatePassword" name="password">
                        </div>
                        <button type="submit" class="btn btn-dark login-register form-control">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h4>List of users</h4>
        <hr>
        <table class="table table-hover table-collapse">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $stmt = $conn->prepare("SELECT * FROM `tbl_user`");
                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $userID = $row['tbl_user_id'];
                    $firstName = $row['first_name'];
                    $lastName = $row['last_name'];
                    $contactNumber = $row['contact_number'];
                    $email = $row['email'];
                    $username = $row['username'];
                    $password = $row['password'];
                ?>

                    <tr>
                        <td id="userID-<?= $userID ?>"><?php echo $userID ?></td>
                        <td id="firstName-<?= $userID ?>"><?php echo $firstName ?></td>
                        <td id="lastName-<?= $userID ?>"><?php echo $lastName ?></td>
                        <td id="contactNumber-<?= $userID ?>"><?php echo $contactNumber ?></td>
                        <td id="email-<?= $userID ?>"><?php echo $email ?></td>
                        <td id="username-<?= $userID ?>"><?php echo $username ?></td>
                        <td id="password-<?= $userID ?>"><?php echo $password ?></td>
                        <td>
                            <button id="editBtn" onclick="update_user(<?php echo $userID ?>)" title="Edit">&#9998;</button>
                            <button id="deleteBtn" onclick="delete_user(<?php echo $userID ?>)">&#128465;</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>

        // Update user
        function update_user(id) {
            $("#updateUserModal").modal("show");

            let updateUserID = $("#userID-" + id).text();
            let updateFirstName = $("#firstName-" + id).text();
            let updateLastName = $("#lastName-" + id).text();
            let updateContactNumber = $("#contactNumber-" + id).text();
            let updateEmail = $("#email-" + id).text();
            let updateUsername = $("#username-" + id).text();
            let updatePassword = $("#password-" + id).text();

            console.log(updateFirstName);
            console.log(updateLastName);

            $("#updateUserID").val(updateUserID);
            $("#updateFirstName").val(updateFirstName);
            $("#updateLastName").val(updateLastName);
            $("#updateContactNumber").val(updateContactNumber);
            $("#updateEmail").val(updateEmail);
            $("#updateUsername").val(updateUsername);
            $("#updatePassword").val(updatePassword);
        }

        // Delete user
        function delete_user(id) {
            if (confirm("Do you want to delete this user?")) {
                window.location = "./endpoint/delete-user.php?user=" + id;
            }
        }
    </script>
    
    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
