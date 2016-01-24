<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="chat.js" ></script>
<style type="text/css">
body {
	font-family: Tahoma, Helvetica, sans-serif;
	margin: 1px;
	font-size: 12px;
}
#scroll {
	position: relative;
	width: 375px;
	height: 270px;
	overflow: auto;	
}
#chatBox{
	position: absolute;
    top: 30%;
    left: 40%;
    margin-top: -50px;
    margin-left: -50px;
    width: 100px;
    height: 100px;
	}
#content{
	border:1px solid #000;
	}	
</style>
</head>
<body>
<div id="chatBox">
<table id="content">
  <tr>
    <td><div id="scroll"> </div></td>
  </tr>
</table>
<div>
  <input type="text" id="userName" maxlength="10" size="10" onblur="checkUsername();" readonly="readonly" />
  <input type="text" id="messageBox" maxlength="2000" size="50" onkeydown="handleKey(event)"/>
  <input type="button" value="Send" onclick="sendMessage();" />
</div>
</div>
<script type="text/javascript">
window.onload = function()
      {
          init();
      };
</script>
</body>
</html>
