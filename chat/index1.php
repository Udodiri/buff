<!DOCTYPE HTML>
<html>
  <body>
    <script src="https://static.opentok.com/v2/js/opentok.js" charset="utf-8"></script>
    <script charset="utf-8">
      var apiKey = '45640662';
      var sessionId = '2_MX40NTY0MDY2Mn5-MTQ3MTcwMDc5MjM1Nn5PcW1KNVVKS1VXVjFiZzBXZXphSUtaZW1-UH4'; 
      var token = 'T1==cGFydG5lcl9pZD00NTY0MDY2MiZzaWc9MTU3NGQ1NzRjYzBhZjU5ODQ0MzAyOWVkNTJhN2ZmYzIzNTJkZWE1MTpzZXNzaW9uX2lkPTJfTVg0ME5UWTBNRFkyTW41LU1UUTNNVGN3TURjNU1qTTFObjVQY1cxS05WVktTMVZYVmpGaVp6QlhaWHBoU1V0YVpXMS1VSDQmY3JlYXRlX3RpbWU9MTQ3MTcwMDgxMyZub25jZT0wLjk1Nzg1MDAzMjAyMDM2MDImcm9sZT1wdWJsaXNoZXImZXhwaXJlX3RpbWU9MTQ3MTcwNDQwNSZjb25uZWN0aW9uX2RhdGE9VGVzdGluZw==';
      var session = OT.initSession(apiKey, sessionId).on('streamCreated', function(event) {
          session.subscribe(event.stream);
        })
        .connect(token, function(error) {
          var publisher = OT.initPublisher(); 
          session.publish(publisher);
        });
    </script>
  </body>
</html>