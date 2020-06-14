<?php
  $json = '[
  		 {
  			"url":"Youtube.com",
  			"Name": "Youtube",
  			"reliability": "GREAT",
  			"mp4":[{"Title": "Concert Live", "Runtime": "25min"},{"Title": "Top Pranks", "Runtime": "18min"},
               {"Title": "This is Awasome", "Runtime": "20min"},{"Title": "Funny Moment", "Runtime": "20min"}],
  			"flv":[{"Title": "Big Bang Theory", "Runtime": "45min"},{"Title": "Modern family ep4", "Runtime": "30min"}],
  			"avi":[{"Title": "FRIENDS", "Runtime": "44min"},{"Title": "Prison Break", "Runtime": "45min"},{"Title": "Breaking Bad", "Runtime": "30min"}],
  			"wmv":[{"Title": "GAME OF THRONES", "Runtime": "47min"},{"Title": "SILICON VALLEY", "Runtime": "51min"}]
      },
  		{
  			"url":"DiyVideos.com",
  			"Name": "DiyVideos",
  			"reliability": "GREAT",
  			"mp4":[{"Title": "Make a Easter Tree", "Runtime": "15min"},{"Title": "DIY Dogs Bed", "Runtime": "30min"},
               {"Title": "15 DIY gifts for father", "Runtime": "20min"}, {"Title": "Easy Thanksgiving Crafts for kids", "Runtime": "30min"}],
  			"avi":[{"Title": "DIY Ideas for Romantic Bedroom", "Runtime": "40min"},{"Title": "110 Christmas Decorating", "Runtime": "55min"},
  				     {"Title": "Good Friday Meals", "Runtime": "30min"}],
  			"flv":[{"Title": "Chamomile-Mascarpone", "Runtime": "33min"},{"Title": "Clover Whiskey Sour", "Runtime": "13min"},
  			       {"Title": "make a perfect boiled egg", "Runtime": "10min"}]
        ,
  			"wmv":[{"Title": "Perfect Cocktails", "Runtime": "9min"},{"Title": "Blackfriday Jam Cocktails", "Runtime": "30min"}]
  		}
  	]';


$name = $_GET['name'];
$value = $_GET['value'];
$array = json_decode($json, true);

# echo sites info
if ($value === "url"){
	foreach ($array as $index){
		if ($index["Name"] === $name) {
			$json_echo = json_encode($index);
			echo($json_echo);
		}
	}
} 
else{
	foreach ($array as $index){
		if ($index["Name"] === $name) {
			$info = $index[$value];
			$json_echo = json_encode($info);
			echo($json_echo);
		}
	}
}

?>