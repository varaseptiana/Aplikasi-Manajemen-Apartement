<?php

/**
 * This is the model class for table "jenis_identitas".
 *
 * The followings are the available columns in table 'jenis_identitas':
 * @property integer $jenis_identitas_id
 * @property string $nama_jenis_identitas
 */
class JenisIdentitas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JenisIdentitas the static model class
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
		return 'jenis_identitas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenis_identitas_id', 'numerical', 'integerOnly'=>true),
			array('nama_jenis_identitas', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jenis_identitas_id, nama_jenis_identitas', 'safe', 'on'=>'search'),
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
			'jenis_identitas_id' => 'Jenis Identitas',
			'nama_jenis_identitas' => 'Nama Jenis Identitas',
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

		$criteria->compare('jenis_identitas_id',$this->jenis_identitas_id);
		$criteria->compare('nama_jenis_identitas',$this->nama_jenis_identitas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}