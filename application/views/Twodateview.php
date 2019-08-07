<?
echo "data from database ";


foreach($records as $rec){
echo $rec->bal_id."   ".$rec->user_name."   ".$rec->Balance."   ".$rec->date;
}
?>