<?php extract($_POST);
if (isset($add)) {
    if ($details == "" || $sub == "" || $user == "") {
        $err = "<font color='red'>You must fill in all of the fields</font>";
    } else {
        foreach ($user as $v) {
            mysqli_query($conn, "insert into notice values('','$v','$sub','$details',now())");
        }
        $err = "<font color='green'>Notice added successfully</font>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h2>Add New Notice</h2>
<form method="post">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?php echo @$err;
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            Enter Subject
        </div>
        <div class="col-sm-5">
            <input class="form-control" name="sub" type="text">
        </div>
    </div>
    <div class="row" style="margin-top:10px">
        <div class="col-sm-2"></div>
        <div class="col-sm-8"></div>
        <div class="row">
            <div class="col-sm-4">
                Enter Details
            </div>
            <div class="col-sm-5">
                <textarea class="form-control" name="details"></textarea>
            </div>
        </div>
        <div class="row" style="margin-top:10px">
            <div class="col-sm-2"></div>
            <div class="col-sm-8"></div>
            <div class="row">
                <div class="col-sm-4">
                    Select User
                </div>
                <div class="col-sm-5">
                    <select class="form-control" multiple="multiple" name="user[]">
                        <?php $sql = mysqli_query($conn, "select name,email from user");
                        while ($r = mysqli_fetch_array($sql)) {
                            echo "<option value='" . $r['email'] . "'>" . $r['name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top:10px">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"></div>
                <div class="row" style="margin-top:10px">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <input class="btn btn-success" name="add" type="submit" value="Add New Notice"><input
                                class="btn btn-success" type="reset">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>