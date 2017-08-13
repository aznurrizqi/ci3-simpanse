<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Simpanse.id</title>

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=AIzaSyCAoovG6d7Kj8ayIPdO0NOlqestjqrys-w" type="text/javascript"></script>



    <script type="text/javascript">
    //<![CDATA[

    var icon1 = new GIcon(); 
    icon1.image = 'image/1.png';
    icon1.shadow = 'image/1.png';
    icon1.iconSize = new GSize(20, 30);
    icon1.shadowSize = new GSize(34, 30);
    icon1.iconAnchor = new GPoint(14, 30);
    icon1.infoWindowAnchor = new GPoint(5, 1);

    var icon2 = new GIcon(); 
    icon2.image = 'image/2.png';
    icon2.shadow = 'image/2.png';
    icon2.iconSize = new GSize(20, 30);
    icon2.shadowSize = new GSize(34, 30);
    icon2.iconAnchor = new GPoint(14, 30);
    icon2.infoWindowAnchor = new GPoint(5, 1);

    var icon3 = new GIcon(); 
    icon3.image = 'image/3.png';
    icon3.shadow = 'image/3.png';
    icon3.iconSize = new GSize(20, 30);
    icon3.shadowSize = new GSize(34, 30);
    icon3.iconAnchor = new GPoint(14, 30);
    icon3.infoWindowAnchor = new GPoint(5, 1);

   var icon4 = new GIcon(); 
    icon4.image = 'image/4.png';
    icon4.shadow = 'image/4.png';
    icon4.iconSize = new GSize(20, 30);
    icon4.shadowSize = new GSize(34, 30);
    icon4.iconAnchor = new GPoint(14, 30);
    icon4.infoWindowAnchor = new GPoint(5, 1);

   var icon5 = new GIcon(); 
    icon5.image = 'image/5.png';
    icon5.shadow = 'image/5.png';
    icon5.iconSize = new GSize(20, 30);
    icon5.shadowSize = new GSize(34, 30);
    icon5.iconAnchor = new GPoint(14, 30);
    icon5.infoWindowAnchor = new GPoint(5, 1);

    var customIcons = [];
    //customIcons["Mangifera"] = icon1;
    customIcons["Tectona"] = icon1;
  	customIcons["Artocarpus"] = icon2;
    customIcons["Hibiscus"] = icon3;
    customIcons["Erythrina"] = icon4;
    customIcons["Mangifera"] = icon5;


    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(-7.555255, 110.843483), 18); 

        GDownloadUrl("surakarta.php", function(data) {
          var xml = GXml.parse(data);
          var pohon = xml.documentElement.getElementsByTagName("pohon");
          for (var i = 0; i < pohon.length; i++) {
            var nmpohonum = pohon[i].getAttribute("nmpohonum");
            var nmpohonil = pohon[i].getAttribute("nmpohonil");
            var nmpohonlok = pohon[i].getAttribute("nmpohonlok");
            var foto = pohon[i].getAttribute("foto");
            var tinggi = pohon[i].getAttribute("tinggi");
            var diameter = pohon[i].getAttribute("diameter");
            var point = new GLatLng(parseFloat(pohon[i].getAttribute("lattitude")),
                                    parseFloat(pohon[i].getAttribute("longitude")));
            var wilayah = pohon[i].getAttribute("wilayah");
            var kelangkaan = pohon[i].getAttribute("kelangkaan");
            var genus = pohon[i].getAttribute("genus");
            //var pohon = createMarker(point, nmpohonum, wilayah, genus);
            map.addOverlay(createMarker(point, nmpohonum, nmpohonil, nmpohonlok, tinggi, diameter, genus));
         }
        });
      }
    }


    //]]>
    function createMarker(point, nmpohonum, nmpohonil, nmpohonlok, tinggi, diameter, genus) {
      var pohon = new GMarker(point, customIcons[genus]);
      var html = "<a>Nama Pohon : </a><b>" + nmpohonum + "</b> <br/>" + 
                  "<a>Tinggi : </a><b>" + tinggi + "</b><a> m</a><br/>" + 
                  "<a>Diameter : </a><b>" + diameter + "</b><a> cm</a><br/>" + 
                  "<a>Genus : </a><b>" + genus + "</b>";
      GEvent.addListener(pohon, 'click', function() {
        pohon.openInfoWindowHtml(html);
      });
      return pohon;
    }
    //]]>
  </script>

  </head>

  <body onload="load()" onunload="GUnload()">
    <div id="map" style="width: 750px; height: 500px"></div>
  </body>
</html>
