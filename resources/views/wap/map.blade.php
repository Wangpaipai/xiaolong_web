<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>地理位置</title>
</head>
<body>

<style type="text/css">
  body,
  html,
  #container {
    overflow: hidden;
    width: 100%;
    height: 100%;
    margin: 0;
    font-family: "微软雅黑";
  }
  ul li {
    list-style: none;
  }
  .btn-wrap {
    z-index: 999;
    position: fixed;
    bottom: 3.5rem;
    margin-left: 3rem;
    padding: 1rem 1rem;
    border-radius: .25rem;
    background-color: #fff;
    box-shadow: 0 2px 6px 0 rgba(27, 142, 236, 0.5);
  }
  .btn {
    width: 100px;
    height: 30px;
    float: left;
    background-color: #fff;
    color: rgba(27, 142, 236, 1);
    font-size: 14px;
    border:1px solid rgba(27, 142, 236, 1);
    border-radius: 5px;
    margin: 0 5px;
    text-align: center;
    line-height: 30px;
  }
  .btn:hover {
    background-color: rgba(27, 142, 236, 0.8);
    color: #fff;
  }
</style>
<div id="container"></div>

<script type="text/javascript" src="https://api.map.baidu.com/getscript?type=webgl&v=1.0&ak=sGI30xtuKmsIayzlyZnG3jNOpLQh1cKt&services=&t=20220328142320"></script>
<script type="text/javascript">
var map = new BMapGL.Map('container');
var point = new BMapGL.Point(103.853258,30.582772);

var marker = new BMapGL.Marker(point);
map.addOverlay(marker);
map.centerAndZoom(point, 18);
var opts = {
  width: 200,
  height: 100,
  title: '68伞业'
};
var infoWindow = new BMapGL.InfoWindow('地址：成都市双流区彭镇永和村3组16号', opts);
map.openInfoWindow(infoWindow, point);
map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
var scaleCtrl = new BMapGL.ScaleControl();  // 添加比例尺控件
map.addControl(scaleCtrl);
var zoomCtrl = new BMapGL.ZoomControl();  // 添加缩放控件
map.addControl(zoomCtrl);
function getInfoContent() {
  alert(infoWindow.getContent());
}
</script>
<script>
</script>
</body>
</html>
