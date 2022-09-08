<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video AWS</title>
<style>
html, body{
    height:100%;
}
body{
    margin:0;
    padding:0;
}
#player{
    width:100%;
    height:100vh;
}
</style>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>

</head>

<body>
<div id="player"></div>
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
  <script>
    var player = new Clappr.Player(
    {
        // source:"https://dnnzuzbuznubl.cloudfront.net/testchannel/live.m3u8",
        source:"https://dnnzuzbuznubl.cloudfront.net/tristar/live.m3u8",
        parentId: "#player",
        plugins: [LevelSelector],
        levelSelectorConfig: {
          title: 'Quality',
          labels: {
              2: '720p', // 500kbps
              1: '480p', // 500kbps
              0: '360p', // 240kbps
          },
          labelCallback: function(playbackLevel, customLabel) {
              return customLabel;// + playbackLevel.level.height+'p'; // High 720p
          }
        },
        poster: "img/14feb_58.jpg",
        width: "100%",
        height: "100%",
        
    });
    
    //player.play();
</script>
</body>
</html>