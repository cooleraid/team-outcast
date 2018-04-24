<?php


$upload = file_get_contents("quick.flac"); // need translate file
$upload = base64_encode($upload);
///echo $upload."<BR/>"."<BR/>"."<BR/>";


$data = array(
    "config" => array(
        "encoding" => "FLAC",
        "sampleRate" => 16000
    ),
   "audio" => array(
        "content" => $upload //base64_encode(file_get_contents('test1.wav')) //base64_encode($filedata)
    )
);

// 不用json_encode
$data1 = '{
  "config": {
    "sampleRate": 16000,
    "encoding": "FLAC"
  },
  "audio": {
    "content": "'.$upload.'"
  }
}';

echo $data1."<BR/>"."<BR/>"."<BR/>";


$url_send ="https://speech.googleapis.com/v1beta1/speech:syncrecognize?key=AIzaSyD6AgyqkMFG2sM7JbZtnjbZPYC1Vwt8TEo"; // Google API key

$data2 = json_encode($data);

$str_data = $data2;//

echo "<BR/>------".$str_data."<BR/>"."<BR/>"."<BR/>"."<BR/>";

function sendPostData($url, $post){
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
  $result = curl_exec($ch);
  curl_close($ch);  // Seems like good practice
  return $result;
}


echo " " . sendPostData($url_send, $str_data);

?>
