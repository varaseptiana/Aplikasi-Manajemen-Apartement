<?php

/**
 * This is the model class for table "penghuni".
 *
 * The followings are the available columns in table 'penghuni':
 * @property integer $penghuni_id
 * @property integer $jenis_identitas_id
 * @property string $nama_depan
 * @property string $nama_belakang
 * @property string $tanggal_lahir
 * @property integer $kelamin
 * @property string $nomor_identitas
 */
class Penghuni extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Penghuni the static model class
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
		return 'penghuni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('penghuni_id, jenis_identitas_id, kelamin', 'numerical', 'integerOnly'=>true),
			array('nama_depan, nama_belakang, nomor_identitas', 'length', 'max'=>255),
			array('tanggal_lahir', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('penghuni_id, jenis_identitas_id, nama_depan, nama_belakang, tanggal_lahir, kelamin, nomor_identitas', 'safe', 'on'=>'search'),
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
			'penghuni_id' => 'Penghuni',
			'jenis_identitas_id' => 'Jenis Identitas',
			'nama_depan' => 'Nama Depan',
			'nama_belakang' => 'Nama Belakang',
			'tanggal_lahir' => 'Tanggal Lahir',
			'kelamin' => 'Kelamin',
			'nomor_identitas' => 'Nomor Identitas',
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

		$criteria->compare('penghuni_id',$this->penghuni_id);
		$criteria->compare('jenis_identitas_id',$this->jenis_identitas_id);
		$criteria->compare('nama_depan',$this->nama_depan,true);
		$criteria->compare('nama_belakang',$this->nama_belakang,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('kelamin',$this->kelamin);
		$criteria->compare('nomor_identitas',$this->nomor_identitas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}