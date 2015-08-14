<?php

/**
 * This is the model class for table "TBASIGNACIONES".
 *
 * The followings are the available columns in table 'TBASIGNACIONES':
 * @property integer $ID_ASIGNACION
 * @property string $NOMRE_RECURSO
 * @property string $FECHA_INI
 * @property string $FECHA_FIN
 * @property string $HORAS
 * @property string $MONTO
 * @property string $PK_TARIFA
 * @property string $ESTATUS_RECURSO
 * @property string $ESTATUS_ASIGNACION
 * @property string $PK_CLIENTE
 * @property string $PK_CONTACTO
 * @property string $PK_PROYECTO
 */
class TBASIGNACIONES extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'TBASIGNACIONES';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOMRE_RECURSO, FECHA_INI, FECHA_FIN, HORAS, MONTO, PK_TARIFA, ESTATUS_RECURSO, ESTATUS_ASIGNACION, PK_CLIENTE, PK_CONTACTO, PK_PROYECTO', 'required'),
			array('NOMRE_RECURSO', 'length', 'max'=>100),
			array('FECHA_INI, FECHA_FIN, HORAS, MONTO, PK_TARIFA, ESTATUS_RECURSO, ESTATUS_ASIGNACION, PK_CLIENTE, PK_CONTACTO, PK_PROYECTO', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_ASIGNACION, NOMRE_RECURSO, FECHA_INI, FECHA_FIN, HORAS, MONTO, PK_TARIFA, ESTATUS_RECURSO, ESTATUS_ASIGNACION, PK_CLIENTE, PK_CONTACTO, PK_PROYECTO', 'safe', 'on'=>'search'),
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
			'ID_ASIGNACION' => 'Id Asignacion',
			'NOMRE_RECURSO' => 'Nombre Recurso',
			'FECHA_INI' => 'Fecha Inicio',
			'FECHA_FIN' => 'Fecha Fin',
			'HORAS' => 'Horas',
			'MONTO' => 'Monto',
			'PK_TARIFA' => 'Tarifa',
			'ESTATUS_RECURSO' => 'Estatus del Recurso',
			'ESTATUS_ASIGNACION' => 'Estatusde la Asignacion',
			'PK_CLIENTE' => 'Cliente',
			'PK_CONTACTO' => 'Contacto',
			'PK_PROYECTO' => 'Proyecto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_ASIGNACION',$this->ID_ASIGNACION);
		$criteria->compare('NOMRE_RECURSO',$this->NOMRE_RECURSO,true);
		$criteria->compare('FECHA_INI',$this->FECHA_INI,true);
		$criteria->compare('FECHA_FIN',$this->FECHA_FIN,true);
		$criteria->compare('HORAS',$this->HORAS,true);
		$criteria->compare('MONTO',$this->MONTO,true);
		$criteria->compare('PK_TARIFA',$this->PK_TARIFA,true);
		$criteria->compare('ESTATUS_RECURSO',$this->ESTATUS_RECURSO,true);
		$criteria->compare('ESTATUS_ASIGNACION',$this->ESTATUS_ASIGNACION,true);
		$criteria->compare('PK_CLIENTE',$this->PK_CLIENTE,true);
		$criteria->compare('PK_CONTACTO',$this->PK_CONTACTO,true);
		$criteria->compare('PK_PROYECTO',$this->PK_PROYECTO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TBASIGNACIONES the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
