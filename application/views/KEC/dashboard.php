
<html>
<?php include ('header.php'); ?>
<body>
<div class="container">
<?php 
if($this->session->userdata('email'))
{?>

<a style="float:right;margin:1%;"href="<?= base_url('admin/logout');?> " class="btn btn-danger">Logout</a>

<?php
}
?>
</div>
<div class="container">

<?php include('tabbbb.php'); ?>
</div>

</body>

</html>
