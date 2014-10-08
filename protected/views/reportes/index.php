<?php
/* @var $this CartasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cartases',
);

$this->menu=array(
	array('label'=>'Create Cartas', 'url'=>array('create')),
	array('label'=>'Manage Cartas', 'url'=>array('admin')),
	array('label'=>'Control Cartas', 'url'=>array('admin')),
);
?>

<h1>Controles de Cartas Avales</h1>
<script type="text/javascript">
	/*function buscarEntradas() {
			var inicio = $('#inicio').datebox('getValue');
			var fin = $('#fin').datebox('getValue');
                        if((inicio.length == 0) || (fin.length == 0)){
                            alert("Debe seleccionar el rango de fecha!!");
                            return;
                        }
			url = 'verEntradas/'+inicio+'/'+fin;
  			$(location).attr('href',url);	
	}*/
</script>
<script type="text/javascript">
	function buscarSalidas() {
			var inicio = $('#inicio').datebox('getValue');
			var fin = $('#fin').datebox('getValue');
                        if((inicio.length == 0) || (fin.length == 0)){
                            alert("Debe seleccionar el rango de fecha!!");
                            return;
                        }
			url = 'verSalidas/'+inicio+'/'+fin;
  			$(location).attr('href',url);	
	}
</script>
<script type="text/javascript">
	function entradasFechas() {
			var ini = $('#ini').datebox('getValue');
			var end = $('#end').datebox('getValue');
                        if((ini.length == 0) || (end.length == 0)){
                            alert("Debe seleccionar el rango de fecha!!");
                            return;
                        }
			url = 'entradasFechas/'+ini+'/'+end;
  			$(location).attr('href',url);	
	}
</script>
<h1>Listado de Reportes</h1>
<div id="horarios">	
	<table id="general">
		<tr>
			<th>Nombre del Reporte</th>
			<th>Parámetros</th>
			<th>Ejecutar</th>									
		</tr>
		<tr>		
			<td>Salidas del día</td>
			<td align="center">-</td>		
			<td><a href="salidasHoy/"><?php #echo $this->Html->image('buscar.png', array('alt' => 'Aulas', 'width' => '25', 'align' => 'absmiddle'));?></a></td>
	
		</tr>
		<tr>			
			<td>Salidas de Almacen:</td>
			<td>			
			Desde: <input id="inicio" name="inicio" type="text" class="easyui-datebox" required="required">-
			Hasta: <input id="fin" name="fin" type="text" class="easyui-datebox" required="required">	            	
			</td>
			<td>
			<a href="#" onClick="buscarSalidas();"><?php echo CHtml::button('Button Text', array('submit' => array('controller/action'))); #echo $this->Html->image('buscar.png', array('alt' => 'Aulas', 'width' => '25', 'align' => 'absmiddle'));?></a>
			</td>						
		</tr>
		<tr>		
			<td>Entradas</td>
			<td align="center">-</td>		
			<td><a href="verEntradas/"><?php #echo $this->Html->image('buscar.png', array('alt' => 'Aulas', 'width' => '25', 'align' => 'absmiddle'));?></a></td>
		</tr>	
		<tr>
			<td>Entradas por Fechas</td>
			<td>
			Desde: <input id="ini" name="ini" type="text" class="easyui-datebox" required="required">-Hasta: <input id="end" name="end" type="text" class="easyui-datebox" required="required">
			</td>
			<td>
			<a href="#" onClick="entradasFechas();"><?php #echo $this->Html->image('buscar.png', array('alt' => 'Aulas', 'width' => '25', 'align' => 'absmiddle'));?></a>
			</td>
		</tr>
	</table>	
</div>
<script type="text/javascript">
	$.fn.datebox.defaults.formatter = function(date){
		var y = date.getFullYear();
		var m = date.getMonth()+1;
		var d = date.getDate();
	return y+'-'+m+'-'+d;
	}
	$('#inicio').datebox({  required:true  });
	$('#fin').datebox({  required:true  });    
</script>
<script type="text/javascript">
	$.fn.datebox.defaults.formatter = function(date){
		var y = date.getFullYear();
		var m = date.getMonth()+1;
		var d = date.getDate();
	return y+'-'+m+'-'+d;
	}
	$('#ini').datebox({  required:true  });
	$('#end').datebox({  required:true  });
</script>

