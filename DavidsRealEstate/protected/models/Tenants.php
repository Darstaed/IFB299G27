<?php

/**
 * This is the model class for table "{{tenants}}".
 *
 * The followings are the available columns in table '{{tenants}}':
 * @property integer $tenantID
 * @property string $firstname
 * @property string $surname
 * @property string $email
 * @property integer $phoneNumber
 * @property integer $propertyID
 *
 * The followings are the available model relations:
 * @property Propertylisting $property
 * @property Propertylisting[] $propertylistings
 */
class Tenants extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tenants}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('phoneNumber, propertyID', 'numerical', 'integerOnly'=>true),
			array('firstname, surname', 'length', 'max'=>45),
			array('email', 'email'),
			array('email', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tenantID, firstname, surname, email, phoneNumber, propertyID', 'safe', 'on'=>'search'),
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
			'property' => array(self::BELONGS_TO, 'Propertylisting', 'propertyID'),
			'propertylistings' => array(self::HAS_MANY, 'Propertylisting', 'tenantID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tenantID' => 'Tenant',
			'firstname' => 'Firstname',
			'surname' => 'Surname',
			'email' => 'Email',
			'phoneNumber' => 'Phone Number',
			'propertyID' => 'PropertyID',
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

		$criteria->compare('tenantID',$this->tenantID);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phoneNumber',$this->phoneNumber);
		$criteria->compare('propertyID',$this->propertyID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tenants the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
