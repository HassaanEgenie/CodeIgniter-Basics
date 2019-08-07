<?
echo"records from database";
foreach($records as $rec){

    echo $rec->id." ".$rec->Name." ".$rec->Email. " ".$rec->bal_id." ".$rec->user_name." ".$rec->Balance;
}
?>
