<?php
include_once("config/connection.php");
if(!$_SESSION['user_id']){
    header("Location: login.php");
    exit();
}
include("partition/header.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $friend_email = mysqli_real_escape_string($conn, $_POST['email']);
    $refno = uniqid() . bin2hex(random_bytes(4));
    $username = $_SESSION['username'];
    $sessionUser = $_SESSION['user_id'];

    // Check if the friend is registered
    $check_friend_sql = "SELECT id FROM users WHERE email = '$friend_email'";
    $check_friend_query = mysqli_query($conn, $check_friend_sql);

    if (mysqli_num_rows($check_friend_query) > 0) {
        // Friend is already registered
        $friend = mysqli_fetch_assoc($check_friend_query);
        $friend_id = $friend['id'];

        echo '<script>
            if (confirm("This user is already registered. Do you want to send a notification to become friends?")) {
                window.location.href = "send_notification.php?friend_id=' . $friend_id . '";
            } else {
                window.location.href = "index.php";
            }
        </script>';
    } else {
        // Friend is not registered, send an invitation email
        sentInvitation($sessionUser,$friend_email, $username,$refno);
        $sql = "INSERT INTO invitations (inviter_id, invitee_email) VALUES ('$sessionUser', '$friend_mail')";
        $query = mysqli_query($conn, $sql);
        echo '<script>
            alert("The user is not registered. An invitation link has been sent.");
            window.location.href = "index.php";
        </script>';
    }
   
}
?>
<div class="tyn-root">
<?php include("partition/navBar.php");?>
    <div class="tyn-content tyn-auth tyn-auth-centered">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 col-sm-9">
                    <div class="card border-0">
                        <div class="p-4">
                            <h3>Invite Friend</h3>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="email-address">Email Address</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="email-address" name="email" placeholder="youremail@example.com">
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <input class="btn btn-primary w-100" type="submit" value="Invite Friend">
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </form>
                        </div><!-- .p-4 -->
                    </div><!-- .card -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .tyn-content -->
</div><!-- .tyn-root -->
    <?php include("partition/footer.php"); ?>