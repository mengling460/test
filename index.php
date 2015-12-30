
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>基金收益计算器—by mengling</title>


	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script> 
	<script src="js.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- <script language="JavaScript"> 
		function re_fresh() { 
			   window.location.reload(); 
		} 

		setTimeout('re_fresh()',60000); //指定2秒刷新一次 

	</script>-->

<script type="text/javascript">
$(function  () { 
  
    $.ajax({ 
        //请求的地址  
       // url :　"weather.php", 
        url :　"conf.php", 
        //请求成功后执行的函数  
        success : function  (data) { 
 
            //用eval()解析返回来的数据，将字符串转成JSON格式  
               //alert(data);
            var oD = eval('('+data+')'); 
        
            //用jquery-1.8.2获取元素  
            var $place = $(".place"), 
                $temp = $(".temp"), 
                $wind = $(".wind"), 
                $now = $(".now"), 
                $windPower = $(".windPower"); 
             
            //将返回来的数据放到相应的位置  
            $place.html(oD["name"]); 
            $temp.html(oD["jzrq"]); 
            $wind.html(oD["dwjz"]); 
            $now.html(oD["gztime"]); 
            $windPower.html(oD["gsz"]); 
 
        } 
    }); 
     
});


setInterval("ajaxRequest()",3000); 
	
</script> 
  </head>
  <body onLoad="pageInit();">
<div class="container">
	<div class="all"> 
    名字：<span class="place">名字</span>, 
    截止日期：<span class="temp">名字</span>， 
    截止净值：<span class="wind">截止净值值</span>，
    更新时间：<span class="now">更新时间</span>， 
    现净值：<span class="windPower">现净值</span> 
</div> 
		
</div>    
    
	   
	
	
	
	
	
      <!-- jQuery文件。务必在bootstrap.min.js 之前引入 
	<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>-->
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
