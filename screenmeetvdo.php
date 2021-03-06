<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script src="https://cobrowse.screenmeet.com/videoAssist.js"></script>
    <style>
#screenMeetLiveContainer {
  box-sizing: border-box;
  position: absolute;
  background-color: black;
  z-index: 100;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0px 0px 40px -5px rgba(0,0,0,0.6);
  transition-property: width, height, top, left, transform;
  transition-duration: .5s;
  width: 350px;
  height: 420px;
}

#screenMeetLiveContainer.cb-videoclosed {
  height: 60px;
  width: 90px;
}

.cameraIconFlexbox {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  width: 90px;
  height: 60px;
}

@media only screen and (max-width: 1000px) {
  #screenMeetLiveContainer.cb-videomaximized {
    transform: scale(.65, .65);
    transform-origin: 0% 0%;
  }
}

@media only screen and (max-width: 1000px) {
  .start-position.cb-videomaximized {
    left: 10px;
    top: calc(100% - 285px);
  }
}

.start-position {
  left: 10px;
  bottom: 10px;
}

.cb-videominimized {
  height: 100px;
  width: 100px;
}



#screenMeetLiveContainerHeader {
  box-sizing: border-box;
  background-color: #334759;
  cursor: move;
  width: 100%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding: 8px;
}

#screenMeetLivePortal {
  box-sizing: border-box;
  width: 100%;
  margin: 0px;
  background-color: black;
  position: absolute;
  border: 0px;
  height: 380px;
}

.cb-videominimized #screenMeetLivePortal,  #screenMeetLiveContainer.cb-videominimized {
  height: 100px;
  width: 100px;
}

#screenMeetCobrowseContainer {
  margin: 0px;
  width: 100%;
  height: 100%;
  position: absolute;
  border: 0px;
}

#screenMeetClickMask {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 50;
  box-sizing: border-box;
  pointer-events: none;
}

.cb-video__close {
  width: 24px;
  height: 24px;
  margin-left: 5px;
  background-image: url('https://cobrowse.screenmeet.com/icons/close_icon.svg');
  background-repeat: no-repeat;
  background-size: cover;
  cursor: pointer;
}

.cb-video__minimize {
  width: 24px;
  height: 24px;
  background-image: url('https://cobrowse.screenmeet.com/icons/min_icon.svg');
  background-repeat: no-repeat;
  background-size: cover;
  cursor: pointer;
}


.cb-video__open {
  height: 30px;
  width: 45px;
  margin-right: 20px;
  background-image: url('https://cobrowse.screenmeet.com/icons/camera.svg');
  background-repeat: no-repeat;
  background-size: cover;
  cursor: pointer;
}

.cb-videooverlay {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  opacity: 0;
  z-index: 400;
  cursor: pointer;
}

.cb-videomaximized .cb-videooverlay {
  pointer-events: none;
  margin-top: 48px;
}

.cb-videominimized .cb-videooverlay {
  pointer-events: auto;
}



.header-title {
  margin-right: auto;
  margin-left: 5px;
  font-family: sans-serif;
  color: white;
}
    
    
    
    </style>
    <!--<link rel="stylesheet" href="https://cobrowse.screenmeet.com/videoAssist.css" type="text/css" />-->
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
