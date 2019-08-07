<?php
print_r($this->session->flashdata("message"));
echo "<br>";
print_r($this->session->flashdata("login"));
?>

<form method="get" accept-charset="utf-8">

    <input type="text" name="username" value="" placeholder="username" />

    <input type="text" name="id" value="" placeholder="id" />

    <input type="submit" name="submit">

</form>