<?php

/**
 * This is the model class for table "jenis_hubungan_penghuni".
 *
 * The followings are the available columns in table 'jenis_hubungan_penghuni':
 * @property integer $jenis_hubungan_id
 * @property string $nama_jenis_hubungan
 */
class JenisHubunganPenghuni extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JenisHubunganPenghuni the static model class
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
		return 'jenis_hubungan_penghuni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenis_hubungan_id', 'numerical', 'integerOnly'=>true),
			array('nama_jenis_hubungan', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jenis_hubungan_id, nama_jenis_hubungan', 'safe', 'on'=>'search'),
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
			'jenis_hubungan_id' => 'Jenis Hubungan',
			'nama_jenis_hubungan' => 'Nama Jenis Hubungan',
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

		$criteria->compare('jenis_hubungan_id',$this->jenis_hubungan_id);
		$criteria->compare('nama_jenis_hubungan',$this->nama_jenis_hubungan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}