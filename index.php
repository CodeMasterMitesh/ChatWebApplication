
<?php 
include_once("config/connection.php");
// debug($_SESSION);
if(!$_SESSION['user_id']){
    header("Location: login.php");
    exit();
}
include("partition/header.php"); 

?>

<div class="tyn-root">
    <?php include("partition/navBar.php"); ?>
    <?php include("main.php"); ?>
</div><!-- .tyn-root -->

<?php include("partition/callingScreen.php"); ?>
<?php include("partition/videoCallingScreen.php"); ?>
<?php include("partition/muteOptions.php"); ?>
<?php include("partition/newChat.php"); ?>
<?php include("partition/deleteChat.php"); ?>
<?php include("partition/footer.php"); ?>