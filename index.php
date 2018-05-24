<?php include ('data.php');?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="renderer" content="webkit">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title><?php echo $aik['title'];?></title>
<?php include ('nav.php');?>
	<div class="container-fluid video-box">
		<div class="container ">
			
			<div class="tit-name">
				<span>正在播放:</span>
				<h1 id="video-title">感谢您使用菲戈视频解析服务,正在播放音乐MV视频！</h1>
			</div>
			
			<div class="embed-responsive embed-responsive-16by9">
				<iframe id="palybox" class="embed-responsive-item" src="<?php echo $aik['jiekou1'];?><?php echo $aik['maurl'];?>"></iframe>
			</div>
			<div class="row mTB20">
				<div class="input-group" style="width: 100%;">
					<span class="input-group-addon input-lg" style="width: 80px;">切换线路</span>
					<select id="jk" class="form-control input-lg">
						<option value="<?php echo $aik['jiekou1'];?>" selected><?php echo $aik['jiekou1name'];?></option>
						<option value="<?php echo $aik['jiekou2'];?>"><?php echo $aik['jiekou2name'];?></option>
						<option value="<?php echo $aik['jiekou3'];?>"><?php echo $aik['jiekou3name'];?></option>
						<option value="<?php echo $aik['jiekou4'];?>"><?php echo $aik['jiekou4name'];?></option>
						<option value="<?php echo $aik['jiekou5'];?>"><?php echo $aik['jiekou5name'];?></option>
						<option value="<?php echo $aik['jiekou6'];?>"><?php echo $aik['jiekou6name'];?></option>
						<option value="<?php echo $aik['jiekou7'];?>"><?php echo $aik['jiekou7name'];?></option>
						<option value="<?php echo $aik['jiekou8'];?>"><?php echo $aik['jiekou8name'];?></option>
						<option value="<?php echo $aik['jiekou9'];?>"><?php echo $aik['jiekou9name'];?></option>
						<option value="<?php echo $aik['jiekou10'];?>"><?php echo $aik['jiekou10name'];?></option>              	
					</select>
				</div><br>
				<div class="input-group" style="width: 100%;">
					<span class="input-group-addon input-lg" style="width: 80px;">播放地址</span>
					<input type="text" id="url" class="form-control input-lg" placeholder="请粘贴视频网址在此 → 记得地址开头要有：http://或者https://">
				</div><br>
				<div>
					<button type="submit" onclick="play()" class="btn btn-primary btn-lg btn-block">点我 立即解析播放</button>
				</div>		
			</div>					
			
			<!-- 公告 -->
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">公告</h3>
			  </div>
			  <div class="panel-body">
				<?php echo $aik['gonggao'];?>
			  </div>
			</div>	
		</div>
	</div>
<?php include ('footer.php');?>