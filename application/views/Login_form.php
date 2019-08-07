<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>

<body>

    <div class="container">
        <h2>Login Form</h2>

        <form method="post" action="" id="input_form">

            <div class="form-group">
                <label for="FirstName">FirstName:</label>
                <input type="FirstName" class="form-control" id="FirstName" placeholder="Enter FirstName"
                    name="FirstName">
                <?php echo form_error('FirstName'); ?>
            </div>
            <div class="form-group">
                <label for="LastName">LastName:</label>
                <input type="LastName" class="form-control" id="LastName" placeholder="Enter LastName" name="LastName">
                <?php echo form_error('LastName'); ?>
            </div>
            <div class="form-group">
                <label for="CompanyName">CompanyName:</label>
                <input type="CompanyName" class="form-control" id="CompanyName" placeholder="Enter CompanyName"
                    name="CompanyName">
                <?php echo form_error('CompanyName'); ?>
            </div>
            <div class="form-group">
                <label for="PhoneNumber">PhoneNumber:</label>
                <input type="PhoneNumber" class="form-control" id="PhoneNumber" placeholder="Enter PhoneNumber"
                    name="PhoneNumber">
                <?php echo form_error('PhoneNumber'); ?>
            </div>
            <div class="form-group">
                <label for="BusinessEmail">BusinessEmail:</label>
                <input type="Email" class="form-control" id="Email" placeholder="Enter BusinessEmail" name="Email">
                <?php echo form_error('Email'); ?>
            </div>
            <input type="submit" class="btn btn-default" value="submit" onclick="return validate_form()">
            <h3 id="success"></h3>
        </form>
    </div>