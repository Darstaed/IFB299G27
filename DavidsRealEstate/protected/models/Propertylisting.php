<?php

/**
 * This is the model class for table "{{propertylisting}}".
 *
 * The followings are the available columns in table '{{propertylisting}}':
 * @property integer $propertyID
 * @property string $streetName
 * @property integer $streetNumber
  * @property integer $streetType
 * @property integer $postcode
 * @property string $state
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
 * @property integer $propertyManagerID
 * @property integer $tenantID
 * @property integer $numViews
 * @property string $inspectionTime1
 * @property string $inspectionTime2
 * @property string $suburb
 * @property string $propertyType
 * @property string $furnished
 *
 * The followings are the available model relations:
 * @property User[] $users
 * @property User $propertyManager
 * @property User $tenant
 * @property Gallery $image
 * @property User $author
 */
class Propertylisting extends CActiveRecord
{
	const STATUS_DRAFT=1;
    const STATUS_PUBLISHED=2;
    const STATUS_ARCHIVED=3;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{propertylisting}}';
	}
	


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('streetName, streetNumber, furnished, streetType, postcode, suburb, state, rent, rentfreq, status, propertyType, propertyManagerID', 'required'),
			array('streetNumber, postcode, numBathroom, numBedroom, numCarPorts, status, authorID, propertyManagerID, tenantID, numViews', 'numerical', 'integerOnly'=>true),
			array('streetName, streetType, state, imageID, suburb, furnished, inspectionTime1, inspectionTime2, propertyType', 'length', 'max'=>255),
			array('rent', 'length', 'max'=>4),
			array('rentfreq', 'length', 'max'=>15),
			array('createTime, updateTime', 'safe'),
			
			array('status', 'in', 'range'=>array(1,2,3)),
			array('imageID', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),	
			
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('propertyID, suburb, furnished, propertyType, inspectionTime1, inspectionTime2, streetName, streetType, streetNumber, postcode, state, rent, rentfreq, numBathroom, numBedroom, numCarPorts, createTime, updateTime, authorID, imageID, propertyManagerID, tenantID, numViews', 'safe', 'on'=>'search'),
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
			'propertyManager' => array(self::BELONGS_TO, 'User', 'propertyManagerID'),
			'tenant' => array(self::BELONGS_TO, 'User', 'tenantID'),
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
			'streetName' => 'Street Name',
			'streetNumber' => 'Street Number',
			'streetType' => 'Street Type',
			'postcode' => 'Postcode',
			'state' => 'State',
			'rent' => 'Rent',
			'rentfreq' => 'Rent frequency',
			'numBathroom' => 'Bathrooms',
			'numBedroom' => 'Bedrooms',
			'numCarPorts' => 'Car Ports',
			'createTime' => 'Create Time',
			'updateTime' => 'Update Time',
			'status' => 'Status',
			'authorID' => 'Author',
			'imageID' => 'Image',
			'propertyManagerID' => 'Property Manager',
			'tenantID' => 'Tenant',
			'numViews' => 'Num Views',
			'inspectionTime1' => 'First Inspection Time',
			'inspectionTime2' => 'Second Inspection Time',
			'suburb' => 'Suburb',
			'propertyType' => 'Property Type',
			'furnished' => 'Furnished',
			
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
		$criteria->compare('streetName',$this->streetName,true);
		$criteria->compare('streetType',$this->streetType,true);
		$criteria->compare('streetNumber',$this->streetNumber);
		$criteria->compare('postcode',$this->postcode);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('rent <',$this->rent,true);
		$criteria->compare('rentfreq',$this->rentfreq,true);
		$criteria->compare('numBathroom >',$this->numBathroom);
		$criteria->compare('numBedroom >',$this->numBedroom);
		$criteria->compare('numCarPorts >',$this->numCarPorts);
		$criteria->compare('createTime',$this->createTime,true);
		$criteria->compare('updateTime',$this->updateTime,true);
		$criteria->compare('authorID',$this->authorID);
	    $criteria->compare('propertyManagerID',$this->propertyManagerID,true);
		$criteria->compare('tenantID',$this->tenantID);
		$criteria->compare('numViews',$this->numViews);
		$criteria->compare('inspectionTime1',$this->inspectionTime1);
		$criteria->compare('inspectionTime2',$this->inspectionTime2);
		$criteria->compare('suburb',$this->suburb);
		$criteria->compare('propertyType',$this->propertyType);
		$criteria->compare('furnished',$this->furnished);

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
