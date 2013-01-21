<?php

/**
 * This is the model class for table "jenis_kondisi".
 *
 * The followings are the available columns in table 'jenis_kondisi':
 * @property integer $kondisi_id
 * @property string $nama_kondisi
 */
class JenisKondisi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JenisKondisi the static model class
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
		return 'jenis_kondisi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kondisi_id', 'numerical', 'integerOnly'=>true),
			array('nama_kondisi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kondisi_id, nama_kondisi', 'safe', 'on'=>'search'),
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
			'kondisi_id' => 'Kondisi',
			'nama_kondisi' => 'Nama Kondisi',
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

		$criteria->compare('kondisi_id',$this->kondisi_id);
		$criteria->compare('nama_kondisi',$this->nama_kondisi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}