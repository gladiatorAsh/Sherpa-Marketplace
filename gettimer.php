 <?php
 
$server = "ec2-174-129-242-241.compute-1.amazonaws.com";
$postgres_user="acrxklsjedgwdc";
$postgres_pass="v6vtN4K4Pbgj7UIKfNIKmbT2PQ";
 $db="d4a07qknvais7o";
echo 'here';
$con = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");

if (!$con) {
echo "A connection error occurred.\n";
exit;
}
else
{
	echo 'connected';
$result = pg_query($con, "select * from todaysdeals");
while($line=pg_fetch_assoc($result))
{
	echo 'found data';
$time=strtotime($line['date']);
$currtime=strtotime("now");
$time=$time-$currtime;
	if($line['product_group']=="manu")
	   {
		 $rows=$manu_rows; 
	   }
	   if($line['product_group']=="ami")
	   {
		 $rows=$ami_rows; 
	   }
	   if($line['product_group']=="shruti")
	   {
		 $rows=$shruti_rows; 
	   }
	   if($line['product_group']=="aj")
	   {
		 $rows=$aj_rows; 
	   }
	   if($line['product_group']=="ash")
	   {
		 $rows=$ash_rows; 
	   }
	   if($line['product_group']=="hiral")
	   {
		 $rows=$hiral_rows; 
	   }
           
			printf('<div>%s</div>',$time);
         }


}

?>
