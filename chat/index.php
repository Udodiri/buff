<html>
 <head>
<style>
    .OT_root.OT_subscriber.OT_fit-mode-cover{  width: 100% !important;
    height: 100% !important;
    position: absolute !important;
    z-index: 10000 !important;}
    
    .OT_mirrored.OT_root.OT_publisher.OT_fit-mode-cover{     width: 150px !important;
    height: 150px !important;
    position: absolute !important;
    z-index: 10000000 !important;
    bottom: 0px !important;
    right: 0px !important;
    border: 4px solid #000 !important;
    border-radius: 12px !important;}
body{    position: relative;
    margin: 0 218px;
    box-shadow: 0 6px 4px #000;
    border: 7px solid #271515;}

    </style>
 </head>

    <body>  
<?php session_start(); //print_r($_SESSION['chat']);
if(isset($_SESSION['chat']) && count($_SESSION['chat'])>1)
{
    //print_r($_SESSION['chat']['MY_SESSION_ID']);

 ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
             
                <script src="https://swww.tokbox.com/webrtc/v2.2/js/TB.min.js"></script>
       
        <script  charset="utf-8">
         // var MY_SESSION_ID = '1_MX40NTY5NTMzMn5-MTQ3NTMxODYzMjIwN35Eamc0Z1Uxdm1jOVRiclMwUXNzMHBCYjZ-UH4';
         //    var MY_API_KEY = '45695332';
         //    var MY_TOKEN = 'T1==cGFydG5lcl9pZD00NTY5NTMzMiZzaWc9ODY4N2QyODdmODU4MzA2NzBiNjFmMGE2NzNmMGMwNTg1ZDFkNmQxOTpzZXNzaW9uX2lkPTFfTVg0ME5UWTVOVE16TW41LU1UUTNOVE14T0RZek1qSXdOMzVFYW1jMFoxVXhkbTFqT1ZSaWNsTXdVWE56TUhCQ1lqWi1VSDQmY3JlYXRlX3RpbWU9MTQ3NTMxODYyNyZyb2xlPXB1Ymxpc2hlciZub25jZT0xNDc1MzE4NjI3LjQ2MzkxNDg3MzgyMzgy';
          
            var MY_SESSION_ID = '<?php echo $_SESSION['chat']['MY_SESSION_ID']; ?>';
            var MY_API_KEY = '<?php echo $_SESSION['chat']['MY_API_KEY']; ?>';
            var MY_TOKEN = '<?php echo $_SESSION['chat']['MY_TOKEN']; ?>';
          
            // Create and connect to a session
            var session = TB.initSession(MY_SESSION_ID);
            session.connect(MY_API_KEY, MY_TOKEN);

            // Handler for the sessionConnected event
            function sessionConnectedHandler(event) {
                // Create a Publisher and publish it
                var publisher = TB.initPublisher(MY_API_KEY, 'myCam');
                session.publish(publisher);

                // Subscribe to streams in session before connection
                subscribeStreams(event.streams);
            }

            // Listen to the 'sessionConnected' event
            session.addEventListener('sessionConnected', sessionConnectedHandler);

            // Handler for the streamCreated event
            function streamCreatedHandler(event) {
                // Subscribe to streams in session after connection
                subscribeStreams(event.streams);
            }

            // Listen to the 'streamCreated' event
            session.addEventListener('streamCreated', streamCreatedHandler);

            // Subscribe to an array of streams
            function subscribeStreams(streams) {
    for (var i=0; i<streams.length; i++){
        if (session.connection.connectionId == streams[i].connection.connectionId) {
                continue;
        } else {
            var replacementElementId = createSubscriberElement(streams[i]);            
            session.subscribe(streams[i], replacementElementId);
        }
 }}
            

// Helper function to create a new element inside div#subscribers
            function createSubscriberElement(stream) {
                // each element id is based on its stream.streamId
                var id = 'sub-' + stream.streamId;
                $('<div id="' + id + '">').appendTo('#subscribers');
                // returns the id of the new element
                return id;
            }




         
        </script>
        <div id="mypublish"></div>
       <?php }else{
           echo '<h1>No Data Found</h1>';
       } ?>
    </body>
</html>


