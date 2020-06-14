To test the Q3:
you can go to http://www3.cs.umanitoba.ca/~heq3456/A4Q3/A4Q3.html

---------------------------------------------------------------------
Description:
This simple web app are consites by 4 files, which allows the browser-based 
client to display a set of avaliable video servers from which user chooses one.

The html file is responsble for page display.

The js file provide the functionaly allow browser and server to communicate, 
and update the page as well. the communication is via AJAX call, each request
send to server will receive a related Json obj data, the js file then will use
the reveived data update the browser on the corresponding page in response to user selections.

The php file is the server, which store and provide data to client/browser.

The css file is response for the html styling.
