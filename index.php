<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
      body{
        margin: 0;
      }
      .cmap{
        margin: 10px;
        padding: 0px;
      }
      .udiv {
        margin: 0;
        padding: 0;
        display:flex; 
        align-content:flex-start; 
        flex-direction:column; 
        flex-wrap:wrap; 
        overflow:auto;
        float: left;
      }
      body {
        margin: 0;
      }
      .container {
        float: left;
        width: 670px;
        height: 652px;
      }
      .container2 {
        float: left;
        margin: 15px;
        padding: 0;
        display:flex; 
        align-content:flex-start; 
        flex-direction:column; 
        flex-wrap:wrap; 
        overflow:auto;
      }
      iframe { 
      -moz-transform: scale(0.85, 0.85);  
      -webkit-transform: scale(0.85, 0.85); 
      -o-transform: scale(0.85, 0.85); 
      -ms-transform: scale(0.85, 0.85); 
      transform: scale(0.85, 0.85); 
      -moz-transform-origin: top left; 
      -webkit-transform-origin: top left; 
      -o-transform-origin: top left; 
      -ms-transform-origin: top left; 
      transform-origin: top left; 
      float: left;
    }
    .nav-container{
      display: flex;
      flex-direction: row;
      width: 100%;
      margin: 0;
      padding: 0;
      background-color: darkslategray;
      list-style-type: none;
    }
    .nav-item{
      padding: 15px;
      cursor: pointer;
    }
    .nav-item a{
      text-align: center;
      text-decoration: none;
      color: white;
    }
    .nav-item:hover{
      background-color: green;
    }
    table{
      border : 1px solid black;
      border-collapse : collapse;
    }
    th, td{
      width : 80px;
      text-align : center;
      border : 1px solid black;
    }
    .area {
      position: absolute;
      background: #fff;
      border: 1px solid #888;
      border-radius: 3px;
      font-size: 12px;
      top: -5px;
      left: 15px;
      padding:2px;
    }
    </style>
    <title>COVID-19</title>
   
</head>
<body>

    <ul id="nav-ul"class="nav-container">
      <li class="nav-item"><a style="text_align:left">코로나 맵</a></li>
      <li class="nav-item"><a style="text_align:right">기준</a></li>
    </ul>
  </nav>
<!-- 지도를 표시할 div 입니다 -->
<div id="udiv" class="udiv">
  <ul class="cmap">
      <div id="map" class="container"></div>
  </ul>
  <ul class="cmap">
      <iframe longdesc="covid simulation" width="1024" height="668" frameborder="0" scrolling="no" name="NeBoard" onLoad="ResizeFrame('NeBoard');" id="img" src="https://unity-technologies.github.io/unitysimulation-coronavirus-example-player/"></iframe>
  </ul>
  <ul>
    <div class="flourish-embed flourish-bar-chart-race" data-src="visualisation/2675613" data-url="https://flo.uri.sh/visualisation/2675613/embed"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
  </ul>
</div>
<div class="container2">
  <div>
  <?php
    ini_set("allow_url_fopen",1);
    include "simple_html_dom.php";
    $data = file_get_html("http://ncov.mohw.go.kr/bdBoardList_Real.do?brdId=1&brdGubun=13&ncvContSeq=&contSeq=&board_id=&gubun=");
    ?><table><?php
    foreach($data->find("table") as $ul){
        foreach($ul->find("tr") as $li){ ?>
            <tr>
            <?php
            foreach($li->find("td,th") as $al){
                echo $al;
            }
            ?>
            </tr>
            <?php
        }
        
    }?>
    </table>
  </div>
  
</div>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f6e4b36ec6c88cd63ebbe33a1dda73f2"></script>
<script>
  var areas = [
    {
        name : '강원도',
        path : [
          new kakao.maps.LatLng(128.548809893700138, 38.301950820518755)

        ]
    }, {
        name : '마포구',
        path : [
            new kakao.maps.LatLng(37.584651324803644, 126.88883849288884),
            new kakao.maps.LatLng(37.57082994377989, 126.9098094620638),
            new kakao.maps.LatLng(37.56510367293256, 126.92601582346325),
            new kakao.maps.LatLng(37.5633319104926, 126.92828128083327),
            new kakao.maps.LatLng(37.55884751347576, 126.92659242918415),
            new kakao.maps.LatLng(37.55675317809392, 126.93190919632814),
            new kakao.maps.LatLng(37.555098093384, 126.93685861757348),
            new kakao.maps.LatLng(37.55654562007193, 126.9413708153468),
            new kakao.maps.LatLng(37.557241466445234, 126.95913438471307),
            new kakao.maps.LatLng(37.55908394430372, 126.96163689468189),
            new kakao.maps.LatLng(37.55820141918588, 126.96305432966605),
            new kakao.maps.LatLng(37.554784413504734, 126.9617251098019),
            new kakao.maps.LatLng(37.548791603525764, 126.96371984820232),
            new kakao.maps.LatLng(37.54546318600178, 126.95790512689311),
            new kakao.maps.LatLng(37.54231338779177, 126.95817394011969),
            new kakao.maps.LatLng(37.539468942052544, 126.955731506394),
            new kakao.maps.LatLng(37.536292068277106, 126.95128907260018),
            new kakao.maps.LatLng(37.53569162926515, 126.94627494388307),
            new kakao.maps.LatLng(37.53377712226906, 126.94458373402794),
            new kakao.maps.LatLng(37.54135238063506, 126.93031191951576),
            new kakao.maps.LatLng(37.539036674424615, 126.9271006565075),
            new kakao.maps.LatLng(37.54143034750605, 126.9224138272872),
            new kakao.maps.LatLng(37.54141748538761, 126.90483000187002),
            new kakao.maps.LatLng(37.548015078285694, 126.89890097452322),
            new kakao.maps.LatLng(37.56300401736817, 126.86623824787709),
            new kakao.maps.LatLng(37.57178997971358, 126.85363039091744),
            new kakao.maps.LatLng(37.57379738998644, 126.85362646212587),
            new kakao.maps.LatLng(37.57747251471329, 126.864939928088),
            new kakao.maps.LatLng(37.5781913017327, 126.87625939970273),
            new kakao.maps.LatLng(37.57977132158497, 126.87767870371688),
            new kakao.maps.LatLng(37.584440882833654, 126.87653889183002),
            new kakao.maps.LatLng(37.59079311146897, 126.88205386700724),
            new kakao.maps.LatLng(37.584651324803644, 126.88883849288884)
        ]
    }
];
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(36.189320, 128.003166), // 지도의 중심좌표
        level: 13 // 지도의 확대 레벨
        
    };
// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new kakao.maps.Map(mapContainer, mapOption),
    customOverlay = new kakao.maps.CustomOverlay({}),
    infowindow = new kakao.maps.InfoWindow({removable: true});

// 지도에 영역데이터를 폴리곤으로 표시합니다 
for (var i = 0, len = areas.length; i < len; i++) {
    displayArea(areas[i]);
}

// 다각형을 생상하고 이벤트를 등록하는 함수입니다
function displayArea(area) {

    // 다각형을 생성합니다 
    var polygon = new kakao.maps.Polygon({
        map: map, // 다각형을 표시할 지도 객체
        path: area.path,
        strokeWeight: 2,
        strokeColor: '#004c80',
        strokeOpacity: 0.8,
        fillColor: '#fff',
        fillOpacity: 0.7 
    });

    // 다각형에 mouseover 이벤트를 등록하고 이벤트가 발생하면 폴리곤의 채움색을 변경합니다 
    // 지역명을 표시하는 커스텀오버레이를 지도위에 표시합니다
    kakao.maps.event.addListener(polygon, 'mouseover', function(mouseEvent) {
        polygon.setOptions({fillColor: '#09f'});

        customOverlay.setContent('<div class="area">' + area.name + '</div>');
        
        customOverlay.setPosition(mouseEvent.latLng); 
        customOverlay.setMap(map);
    });

    // 다각형에 mousemove 이벤트를 등록하고 이벤트가 발생하면 커스텀 오버레이의 위치를 변경합니다 
    kakao.maps.event.addListener(polygon, 'mousemove', function(mouseEvent) {
        
        customOverlay.setPosition(mouseEvent.latLng); 
    });

    // 다각형에 mouseout 이벤트를 등록하고 이벤트가 발생하면 폴리곤의 채움색을 원래색으로 변경합니다
    // 커스텀 오버레이를 지도에서 제거합니다 
    kakao.maps.event.addListener(polygon, 'mouseout', function() {
        polygon.setOptions({fillColor: '#fff'});
        customOverlay.setMap(null);
    }); 

    // 다각형에 click 이벤트를 등록하고 이벤트가 발생하면 다각형의 이름과 면적을 인포윈도우에 표시합니다 
    kakao.maps.event.addListener(polygon, 'click', function(mouseEvent) {
        var content = '<div class="info">' + 
                    '   <div class="title">' + area.name + '</div>' +
                    '   <div class="size">총 면적 : 약 ' + Math.floor(polygon.getArea()) + ' m<sup>2</sup></area>' +
                    '</div>';

        infowindow.setContent(content); 
        infowindow.setPosition(mouseEvent.latLng); 
        infowindow.setMap(map);

    });
}
//map.setDraggable(false);
//map.setZoomable(false);
</script>
</body>
</html>
