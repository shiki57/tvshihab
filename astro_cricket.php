
<head>
<meta content="never" name="referrer">    
<title>MHDTVPLAY.NET | Watch Your Favourite Indian TV Channels Anytime Anywher</title>
<meta name="robots" content="noindex" />
<link rel="stylesheet" type="text/css" href="/clap.css">
<script src="//cdn.jsdelivr.net/npm/@clappr/player@0.4.0/dist/clappr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/mux.js@5.6.7/dist/mux.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/shaka-player@2.5.10/dist/shaka-player.compiled.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.external.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/cdnbye-shaka@latest"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool@latest'></script>
</head>

  <div id="player"></div>
<script>
  var player = new Clappr.Player({
          source: 'https://linearjitp02-playback.astro.com.my/dash-wv/linear/2504/default.mpd',
          mimeType: 'application/dash+xml',
          height: '100%',
          width: '100%',
          autoPlay: true,
          plugins: [LevelSelector, DashShakaPlayback, Clappr.MediaControl],
          events: {onReady: function() {var plugin = this.getPlugin('click_to_pause'); plugin && plugin.disable();},},
          chromecast: {
              appId: '9DFB77C0',
              contentType: 'video/mp4',
          },
          shakaConfiguration: {
              drm: {
              clearKeys: {
     '03c2e0af2f8159f9f0ce9b5dbc865f10':'cd84ed136b0cc71f8ab8cd4d4f6a2e4c'
                  }
              },
          },
          shakaOnBeforeLoad: function (shaka_player) {},
          parentId: '#player'
      });
  </script>
