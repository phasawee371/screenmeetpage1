<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script src="https://cobrowse.screenmeet.com/videoAssist.js"></script>
    <link rel="stylesheet" href="https://cobrowse.screenmeet.com/videoAssist.css" type="text/css" />
  </head>
  <body>
    <div id="screenMeetLiveContainer">
      <div id="screenMeetLiveContainerHeader"></div>
      <iframe id="screenMeetLivePortal" allow="camera *;microphone *"></iframe>
    </div>
    <iframe id="screenMeetCobrowseContainer" src=""></iframe>
    <iframe
      id="cbSessionCarrier"
      width="1"
      height="1"
      style="display: none"
      referrerpolicy="origin"
      src="https://edge.screenmeet.com/v3/cobrowse/multidomain"
    ></iframe>
    <div id="screenMeetClickMask"></div>
  </body>
</html>
