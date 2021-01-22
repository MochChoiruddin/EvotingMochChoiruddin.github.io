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
		<script type="text/javascript" src="../../e-pilketos/assets/js/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="../../e-pilketos/assets/js/jquery.easyui.min.js"></script>
		<script type="text/javascript">
		
			var url;
			function newUser() {
				$('#dlg').dialog('open').dialog('setTitle', 'Tambah Data');
				$('#fm').form('clear');
				url = 'daftarpemilih-admin-crud.php?aksi=add';
			}

			function editUser() {
				var row = $('#dg').datagrid('getSelected');
				if (row) {
					$('#dlg').dialog('open').dialog('setTitle', 'Ubah Data');
					$('#fm').form('load', row);
					url = 'daftarpemilih-admin-crud.php?aksi=edit';
				}
				console.log(url);
			}

			function saveUser() {
				$('#fm').form('submit', {
					url : url,
					onSubmit : function() {
						return $(this).form('validate');
					},
					success : function(result) {
						var result = eval('(' + result + ')');
						if (result.success) {
							$('#dlg').dialog('close');
							// close the dialog
							$('#dg').datagrid('reload');
							// reload the user data
						} else {
							$.messager.show({
								title : 'Error',
								msg : result.msg
							});
						}
					}
				});
			}

			function removeUser() {
				var row = $('#dg').datagrid('getSelected');
				console.log(row);
				
				if (row) {
					$.messager.confirm('Confirm', 'Yakin Mau menghapus data ini?', function(r) {
						if (r) {
							$.post('peraturan-admin-crud.php?aksi=hapus', {
								id : row.id_per
							}, function(result) {
								if (result.success) {
									$('#dg').datagrid('reload');
									// reload the user data
								} else {
									$.messager.show({// show error message
										title : 'Error',
										msg : result.msg
									});
								}
							}, 'json');
						}
					});
				}
			}
		</script>
	</head>
	<body>
		<h2>DATA SISWA </h2>
		<div class="demo-info" style="margin-bottom:10px">
			<div class="demo-tip icon-tip">
				&nbsp;
			</div>
			<div>
				Klik toolbar untuk melakukan operasi pengeolahan data
			</div>
		</div>

		<table id="dg" title="Daftar" class="easyui-datagrid" style="width:770px;height:450px"
		url="peraturan-admin-crud.php?aksi=show"
		toolbar="#toolbar" pagination="true"
		rownumbers="true" fitColumns="true" singleSelect="true">
			<thead>
				<tr>
					<th field="matric_no" width="50">NIS</th>
					<th field="password" width="50">NAMA</th>
					<th field="kelas" width="50">KELAS</th>
				</tr>
			</thead>
		</table>
		<div id="toolbar">
			<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newUser()">Data Baru</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editUser()">Edit Data</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onClick="removeUser()">Hapus Data</a>
		</div>

		<div id="dlg" class="easyui-dialog" style="width:400px;height:350px;padding:10px 20px"
		closed="true" buttons="#dlg-buttons">
			<div class="ftitle">INPUT DATA SISWA </div>
			<form id="fm" method="post" novalidate>
			  <div class="fitem">
					<label>NIS :</label>
			        <input name="matric_no2" class="easyui-validatebox" id="matric_no2" required="true"/>
			  </div>
				<div class="fitem">
					<label>NAMA :</label>
				    <input name="password" class="easyui-validatebox" id="password" required/>
				</div>
				 
			  <div class="fitem">
					<label>KELAS:</label>
					<label>
					<input name="kelas" type="text" id="kelas" required/>
					</label>
			  </div>
				 
			</form>
		</div>
		<div id="dlg-buttons">
			<a href="daftarpemilih-admin-crud.php?aksi=add" class="easyui-linkbutton" iconCls="icon-ok" onClick="daftarpemilih-admin-crud.php?aksi=add">Save</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">Cancel</a>
		</div>
		<div id="dlg" class="easyui-dialog" style="width:400px;height:350px;padding:10px 20px"
		closed="true" buttons="#dlg-buttons">
			<div class="ftitle">EDIT DATA SISWA </div>
			<form id="fm" method="post" novalidate>
			  <div class="fitem">
					<label>NIS :</label>
				    <input name="matric_no" class="easyui-validatebox" id="matric_no" required/>
			  </div>
				<div class="fitem">
					<label>NAMA :</label>
				    <input name="password" class="easyui-validatebox" id="password" required/>
				</div>
				 
			  <div class="fitem">
					<label>KELAS:</label>
					<label>
					<input name="kelas" type="text" id="kelas" required/>
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