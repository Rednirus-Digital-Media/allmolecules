<?php

include(getcwd()."/vendor/autoload.php");

error_reporting(0);
//print_r(get_declared_classes());
//use xyz;
/*use Google;
use Google_Service_Indexing;
use Google_Service_Indexing_UrlNotification;*/


	 
if($_POST['action']=="URL_UPDATED" || $_POST['action']=="URL_DELETED")
{
	 $all_urls = preg_split("/\r\n|\n|\r/", trim($_POST['urls']));
       foreach($all_urls as $url){
        $urls[$url] = $_POST['action'];
}

try {
  $googleClient = new Google\Client();

  // Add here location to the JSON key file that you created and downloaded earlier.
  $googleClient->setAuthConfig( 'pharmapcdbazaar-46c1d8787967.json' );
  $googleClient->setScopes( Google_Service_Indexing::INDEXING );
  $googleClient->setUseBatch( true );
  
  $service = new Google_Service_Indexing( $googleClient );
  $batch = $service->createBatch();

  $postBody = new Google_Service_Indexing_UrlNotification();

 
  foreach($urls as $url => $type)
  {
    $postBody->setUrl( $url );
    $postBody->setType( $type );
    $batch->add( $service->urlNotifications->publish( $postBody ) );
  }

  $results = $batch->execute();
 
  echo "<table class='table table-bordered'>
  <thead>
   <th>Sr no.</th>
  <th>Date</th>
  <th>Status</th>
  <th>URL</th>
  </thead>
  <tbody>
  
  ";
  //var_dump($results);
   foreach($results as $result)
  {

    echo '<tr><td>'.$result->urlNotificationMetadata->latestUpdate["notifyTime"] . "</td>";
    echo '<td>'.$result->urlNotificationMetadata->latestUpdate["type"] . "</td>";
    echo '<td>'.$result->urlNotificationMetadata->latestUpdate["url"] . "</td></tr>";
  }
  echo "<tbody></table>";
 
} 
catch (\Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
}
else{
	
	 $url=str_replace(array("\n", "\r"),'::'.trim($_POST['action']).',', trim($_POST['urls']));

  $convert_to_array = explode(',', $url);
  $convert_to_array=array_values(array_unique(array_filter($convert_to_array,'trim')));
//print_r($convert_to_array);
for($i=0; $i < count($convert_to_array ); $i++){
    $key_value = explode('::', $convert_to_array [$i]);
     $urls[$key_value [0]] = $key_value [0];
}


	try {
  $googleClient = new Google\Client();
  
  
  $googleClient->setAuthConfig( 'pharmapcdbazaar-46c1d8787967.json' );
  $googleClient->setScopes( Google_Service_Indexing::INDEXING );
  $googleClient->setUseBatch( true );
  
  $service = new Google_Service_Indexing( $googleClient );
  $batch = $service->createBatch();

 
  foreach($urls as $url) {
    $urlArray = ['url' => $url];
    $batch->add( $service->urlNotifications->getMetadata( $urlArray ) );
  }
    
  $results = $batch->execute();
  /*
  You can access the return values with example below.
  */
  echo "<table class='table table-bordered'>
  <thead>
  <th>Date</th>
  <th>Status</th>
  <th>URL</th>
  </thead>
  <tbody>
  
  ";
  foreach($results as $result) {

    echo '<tr><td>'.$result->latestUpdate->notifyTime . "</td>";
    echo '<td>'.$result->latestUpdate->type . "</td>";
    echo '<td>'.$result->latestUpdate->url . "</td></tr>";
  }
  echo "<tbody></table>";
} 
catch (\Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
}
?>