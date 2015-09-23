<?php

/**
 * This is the model class for table "{{propertylisting}}".
 *
 * The followings are the available columns in table '{{propertylisting}}':
 * @property integer $propertyID
 * @property string $address
 * @property string $rent
 * @property string $rentfreq
 * @property integer $numBathroom
 * @property integer $numBedroom
 * @property integer $numCarPorts
 * @property string $createTime
 * @property string $updateTime
 * @property integer $status
 * @property integer $authorID
 * @property string $imageID
 * @property integer $tenantID
 *
 * The followings are the available model relations:
 * @property User[] $users
 * @property Gallery[] $galleries
 * @property Tenants[] $tenants
 * @property Tenants $tenant
 * @property Gallery $image
 * @property User $author
 */
class Propertylisting extends CActiveRecord
{
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{propertylisting}}';
	}
	
    const STATUS_DRAFT=1;
    const STATUS_PUBLISHED=2;
    const STATUS_ARCHIVED=3;
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address', 'unique'),
			array('address, rent, rentfreq, status', 'required'),
			array('status', 'in', 'range'=>array(1,2,3)),
			array('numBathroom, numBedroom, numCarPorts, authorID, rent, status, tenantID', 'numerical', 'integerOnly'=>true),
			array('address, imageID', 'length', 'max'=>255),
			array('rent', 'length', 'max'=>4),
			array('rentfreq', 'length', 'max'=>15),
			array('createTime, updateTime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('propertyID, address, rent, rentfreq, numBathroom, numBedroom, numCarPorts, createTime, updateTime, authorID, imageID, status', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'propertyOwned'),
			'galleries' => array(self::HAS_MANY, 'Gallery', 'propertyID'),
			'tenants' => array(self::HAS_MANY, 'Tenants', 'propertyID'),
			'tenant' => array(self::BELONGS_TO, 'Tenants', 'tenantID'),
			'image' => array(self::BELONGS_TO, 'Gallery', 'imageID'),
			'author' => array(self::BELONGS_TO, 'User', 'authorID'),
			
		);
	}	
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'propertyID' => 'PropertyID',
			'address' => 'Address',
			'rent' => 'Rent',
			'rentfreq' => 'Rent frequency',
			'numBathroom' => 'Number of Bathrooms',
			'numBedroom' => 'Number of Bedroom',
			'numCarPorts' => 'Number of Car Ports',
			'createTime' => 'Create Time',
			'updateTime' => 'Update Time',
			'status' => 'Status',
			'authorID' => 'Author',
			'imageID' => 'Image',
			'tenantID' => 'Tenant',
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

		$criteria->compare('propertyID',$this->propertyID);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('rent <',$this->rent,true);
		$criteria->compare('rentfreq',$this->rentfreq,true);
		$criteria->compare('numBathroom >',$this->numBathroom);
		$criteria->compare('numBedroom >',$this->numBedroom);
		$criteria->compare('numCarPorts >',$this->numCarPorts);
		$criteria->compare('createTime',$this->createTime,true);
		$criteria->compare('updateTime',$this->updateTime,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('authorID',$this->authorID);
		$criteria->compare('tenantID',$this->tenantID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Propertylisting the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getUrl()
    {
        return Yii::app()->createUrl('propertylisting/view', array(
            'id'=>$this->id,
            'title'=>$this->title,
        ));
    }
	
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->createTime=$this->updateTime= time();
				$this->authorID=Yii::app()->user->id;	
			}
			else
				$this->updateTime=time();
			return true;
		}
		else
			return false;
	}
	
	
}
