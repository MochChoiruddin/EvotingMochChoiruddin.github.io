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
				url = 'peraturan-admin-crud.php?aksi=add';
			}

			function editUser() {
				var row = $('#dg').datagrid('getSelected');
				if (row) {
					$('#dlg').dialog('open').dialog('setTitle', 'Ubah Data');
					$('#fm').form('load', row);
					url = 'peraturan-admin-crud.php?aksi=edit&id_siswa=' + row.id_per;
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
		<h2>DAFTAR PERATURAN </h2>
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
					<th field="judul" width="50">Judul</th>
					<th field="isi" width="50">Isi  </th>
					 
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
			<div class="ftitle">
				Info Data</div>
			<form id="fm" method="post" novalidate>
			  <div class="fitem">
					<label>Id :</label>
				    <input name="id_per" class="easyui-validatebox" required="true" disabled="disabled" >
			  </div>
				<div class="fitem">
					<label>Judul :</label>
					<input name="judul" class="easyui-validatebox" required="false">
				</div>
				 
			  <div class="fitem">
					<label>Isi:</label>
				    <textarea name="isi" cols="25" rows="5"></textarea>
			  </div>
				 
			</form>
		</div>
		<div id="dlg-buttons">
			<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveUser()">Save</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">Cancel</a>
		</div>
	</body>
</html>