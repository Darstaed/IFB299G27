<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $firstname
 * @property string $surname
 * @property integer $phoneNumber
 * @property integer $propertyOwned
 * @property string $roles
 *
 * The followings are the available model relations:
 * @property Propertylisting $propertyOwned0
 * @property Propertylisting[] $propertylistings
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'required'),
			array('phoneNumber, propertyOwned', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>16),
			array('password', 'length', 'max'=>32),
			array('email', 'length', 'max'=>255),
			array('firstname, surname', 'length', 'max'=>45),
			array('roles', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, firstname, surname, phoneNumber, propertyOwned, roles', 'safe', 'on'=>'search'),
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
			'propertyOwned0' => array(self::BELONGS_TO, 'Propertylisting', 'propertyOwned'),
			'propertylistings' => array(self::HAS_MANY, 'Propertylisting', 'authorID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'firstname' => 'Firstname',
			'surname' => 'Surname',
			'phoneNumber' => 'Phone Number',
			'propertyOwned' => 'Property Owned',
			'roles' => 'Roles',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('phoneNumber',$this->phoneNumber);
		$criteria->compare('propertyOwned',$this->propertyOwned);
		$criteria->compare('roles',$this->roles,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	 public function validatePassword($password)
    {
        return CPasswordHelper::verifyPassword($password,$this->password);
    }
 
    public function hashPassword($password)
    {
        return CPasswordHelper::hashPassword($password);
    }
	
	protected function generateSalt()
	{
    return uniqid('',true);
	}
	
	public $plain_password;
	
	public function beforeSave()
    {
                if (parent::beforeSave())
				{
					if($this->isNewRecord)
					{
					$this->plain_password = $this->password;
					$this->password = $this->hashPassword($this->password);
					return true;
					}else
					{
						//$this->plain_password = $this->password;
					}
				}else
				{
					return false;
				}
    }

}
