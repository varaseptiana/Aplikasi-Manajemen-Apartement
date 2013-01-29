<?php

/**
 * This is the model class for table "karyawan".
 *
 * The followings are the available columns in table 'karyawan':
 * @property integer $karyawan_id
 * @property string $nama_depan
 * @property string $nama_belakang
 * @property integer $kelamin
 * @property integer $nomor_identitas
 * @property integer $jenis_identitas_id
 * @property string $alamat
 */
class Karyawan extends CActiveRecord
{
	public $nama_jenis_identitas;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Karyawan the static model class
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
		return 'karyawan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('karyawan_id, kelamin, nomor_identitas, jenis_identitas_id', 'numerical', 'integerOnly'=>true),
			array('nama_depan, nama_belakang, alamat', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('karyawan_id, nama_depan, nama_belakang, kelamin, nomor_identitas, jenis_identitas_id, alamat, nama_jenis_identitas', 'safe', 'on'=>'search'),
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
		'nama_jenis_identitass' => array(self::BELONGS_TO, 'jenisIdentitas', 'jenis_identitas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'karyawan_id' => 'Karyawan',
			'nama_depan' => 'Nama Depan',
			'nama_belakang' => 'Nama Belakang',
			'kelamin' => 'Kelamin',
			'nomor_identitas' => 'Nomor Identitas',
			'jenis_identitas_id' => 'Jenis Identitas',
			'alamat' => 'Alamat',
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
		
		$criteria->with=array('nama_jenis_identitass');
		$criteria->compare('karyawan_id',$this->karyawan_id);
		$criteria->compare('jenis_identitas_id',$this->jenis_identitas_id);
		$criteria->compare('nama_jenis_identitass.nama_jenis_identitas',$this->nama_jenis_identitas,true);
		$criteria->compare('nomor_identitas',$this->nomor_identitas);
		$criteria->compare('nama_depan',$this->nama_depan,true);
		$criteria->compare('nama_belakang',$this->nama_belakang,true);
		$criteria->compare('kelamin',$this->kelamin);		
		$criteria->compare('alamat',$this->alamat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			
			'sort'=>array(
				'attributes'=>array(
					'*',
					'nama_jenis_identitas'=>array(
						'asc'=>'"nama_jenis_identitass".nama_jenis_identitas',
						'desc'=>'"nama_jenis_identitass".nama_jenis_identitas desc',
					),				
				)	
			)
			
		));
	}
}