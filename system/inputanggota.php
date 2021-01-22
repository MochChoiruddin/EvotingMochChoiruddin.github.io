<!DOCTYPE html>
<html>
	<head>

		<title></title>
		<link rel="stylesheet" type="text/css" href="../../e-pilketos/assets/css/easyui.css">
		<link rel="stylesheet" type="text/css" 
		href="http://www.jeasyui.com/easyui/themes/icon.css">
		<style type="text/css">
			#fm {
				margin: 0;
				padding: 10px 30px;
			}
			.ftitle {
				font-size: 14px;
				font-weight: bold;
				color: #666;
				padding: 5px 0;
				margin-bottom: 10px;
				border-bottom: 1px solid #ccc;
			}
			.fitem {
				margin-bottom: 5px;
			}
			.fitem label {
				display: inline-block;
				width: 80px;
			}
		</style>
		<div id="dlg" class="easyui-dialog" style="width:400px;height:350px;padding:10px 20px"
		closed="true" buttons="#dlg-buttons">
			<div class="ftitle">INPUT DATA SISWA </div>
			<form id="fm" method="post" novalidate>
			  <div class="fitem">
					<label>NIS :</label>
				    <input name="matric_no" id="matric_no" required="true" >
			  </div>
				<div class="fitem">
					<label>NAMA :</label>
				    <input name="password" class="easyui-validatebox" id="password" required="false">
				</div>
				 
			  <div class="fitem">
					<label>KELAS:</label>
					<label>
					<input name="kelas" type="text" id="kelas">
					</label>
			  </div>
				 
			</form>
		</div>
		<div id="dlg-buttons">
			<a href="add_voters_process.php" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveUser()">Save</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">Cancel</a>
		</div>
	</body>
</html>