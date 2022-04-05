<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="../../dist-dev/mindar-face.js"></script>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="../../dist-dev/mindar-face-aframe.js"></script>
   
    <style>
      body {
        margin: 0;
      }
      .example-container {
        overflow: hidden;
        position: absolute;
        width: 100%;
        height: 100%;
      }
    </style>
  </head>

  <body>
    <div class="example-container">
      <a-scene mindar-face embedded color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        <a-assets>
          <a-asset-item id="glassesModel" src="./assets/octo.glb"></a-asset-item>
        </a-assets>
        <a-camera active="false" position="0 0 0"></a-camera>
        <a-entity mindar-face-target="anchorIndex: 1">
	  <a-sphere color="green" radius="0.1"></a-sphere>
        </a-entity>
      </a-scene>
    </div>
  </body>
</html>