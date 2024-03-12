
window.onload = function() {
  var zoom = window.devicePixelRatio;
  var screenWidth = window.screen.width;
  var screenHeight = window.screen.height;  
  var req = new XMLHttpRequest();
  var params = 's='+window.location.href+'&i=d&m=n&z='+zoom+"&l="+screenWidth+"&a="+screenHeight;

  req.open('POST', '//www.strongyloides.com.br/pv.php', true);
  req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');  
  req.send(params);
};
