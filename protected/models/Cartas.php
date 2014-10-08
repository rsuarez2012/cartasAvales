<?php

/**
 * This is the model class for table "cartas".
 *
 * The followings are the available columns in table 'cartas':
 * @property integer $id
 * @property string $codigo
 * @property string $fecha
 * @property string $senor
 * @property string $titular
 * @property string $cedula_titular
 * @property string $beneficiario
 * @property string $cedula_beneficiaro
 * @property string $personal
 * @property string $codigo_presupuestario
 * @property string $carta_a
 * @property string $monto_aprobado
 * @property string $presupuesto
 * @property string $monto_presupuesto
 * @property string $fecha_presupuesto
 * @property string $diagnostico
 */
class Cartas extends CActiveRecord
{
	//public $fecha_vigencia_range = array();
	/*function rules() {
	return array(
	//...
	array('.....,fecha_vigencia_range', 'safe', 'on'=>'search'),*/
	
	//public $fecha_final_range = array();
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cartas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cartas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, fecha, senor, titular, cedula_titular, beneficiario, cedula_beneficiaro, personal, codigo_presupuestario, carta_a, monto_aprobado, presupuesto, monto_presupuesto, fecha_presupuesto, diagnostico', 'required'),
			array('codigo, senor, titular, cedula_titular, beneficiario, cedula_beneficiaro, personal, codigo_presupuestario, carta_a, monto_aprobado, presupuesto, monto_presupuesto, fecha_presupuesto', 'length', 'max'=>50),
			array('diagnostico', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, codigo, fecha, senor, titular, cedula_titular, beneficiario, cedula_beneficiaro, personal, codigo_presupuestario, carta_a, monto_aprobado, presupuesto, monto_presupuesto, fecha_presupuesto, diagnostico', 'safe', 'on'=>'search'),
		
			/*array('codigo','required'),
    			array('codigo','codigo'),
    			array('codigo','unique'),*/   

		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'codigo' => 'Codigo',
			'fecha' => 'Fecha',
			'senor' => 'Senor',
			'titular' => 'Titular',
			'cedula_titular' => 'Cedula Titular',
			'beneficiario' => 'Beneficiario',
			'cedula_beneficiaro' => 'Cedula Beneficiaro',
			'personal' => 'Personal',
			'codigo_presupuestario' => 'Codigo Presupuestario',
			'carta_a' => 'Carta A',
			'monto_aprobado' => 'Monto Aprobado',
			'presupuesto' => 'Presupuesto',
			'monto_presupuesto' => 'Monto Presupuesto',
			'fecha_presupuesto' => 'Fecha Presupuesto',
			'diagnostico' => 'Diagnostico',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('senor',$this->senor,true);
		$criteria->compare('titular',$this->titular,true);
		$criteria->compare('cedula_titular',$this->cedula_titular,true);
		$criteria->compare('beneficiario',$this->beneficiario,true);
		$criteria->compare('cedula_beneficiaro',$this->cedula_beneficiaro,true);
		$criteria->compare('personal',$this->personal,true);
		$criteria->compare('codigo_presupuestario',$this->codigo_presupuestario,true);
		$criteria->compare('carta_a',$this->carta_a,true);
		$criteria->compare('monto_aprobado',$this->monto_aprobado,true);
		$criteria->compare('presupuesto',$this->presupuesto,true);
		$criteria->compare('monto_presupuesto',$this->monto_presupuesto,true);
		$criteria->compare('fecha_presupuesto',$this->fecha_presupuesto,true);
		$criteria->compare('diagnostico',$this->diagnostico,true);
		$_SESSION['fecha'] = new CActiveDataProvider($this, array(
                        'criteria'=>$criteria,
                        //'sort'=>$sort,
                        'pagination'=>false,
                ));
		/*$from = $to = '';
		if (count($this->fecha_vigencia_range)>=1) {
		if (isset($this->fecha_vigencia_range['from'])) {
		$from = $this->fecha_vigencia_range['from'];
		}
		if (isset($this->fecha_vigencia_range['to'])) {
		$to= $this->fecha_vigencia_range['to'];
		}
		 
		}
		if ($from!='' || $to !='') {
		if ($from!='' && $to!='') {
		$from = date("d-m-Y", strtotime($from));
		$to = date("d-m-Y", strtotime($to));
		$criteria->compare('fecha_vigencia',">= $from",false);
		$criteria->compare('fecha_vigencia',"<= $to",false);
		}
		else {
		if ($from!='') $creation_time = $from;
		if ($to != '') $creation_time = $to;
		$creation_time = date("d-m-Y", strtotime($creation_time));
		$criteria->compare('fecha_vigencia', "$creation_time" ,false);
		}
		}*/

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
