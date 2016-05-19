<?php

/**
 * This is the model class for table "coupons_used".
 *
 * The followings are the available columns in table 'coupons_used':
 * @property integer $id
 * @property string $product_id
 * @property string $user_id
 * @property integer $cash_limit
 * @property string $code
 * @property string $starting_date
 * @property string $expiry_date
 * @property integer $discount
 * @property string $discount_type
 * @property integer $unique
 * @property integer $status
 * @property string $DOC
 * @property string $DOU
 * @property double $session_id
 */
class CouponsUsed extends CActiveRecord {

        /**
         * @return string the associated database table name
         */
        public function tableName() {
                return 'coupons_used';
        }

        /**
         * @return array validation rules for model attributes.
         */
        public function rules() {
                // NOTE: you should only define rules for those attributes that
                // will receive user inputs.
                return array(
//			array('id, product_id, user_id, cash_limit, code, starting_date, expiry_date, discount, discount_type, unique, status, DOC, DOU, session_id', 'required'),
//			array('id, cash_limit, discount, unique, status', 'numerical', 'integerOnly'=>true),
//			array('session_id', 'numerical'),
//			array('product_id, user_id', 'length', 'max'=>20),
//			array('code, discount_type', 'length', 'max'=>50),
                    array('cash_limit, discount,  unique,status', 'numerical', 'integerOnly' => true),
                    array('code, discount_type', 'length', 'max' => 50),
                    array('code', 'unique'),
                    // The following rule is used by search().
                    // @todo Please remove those attributes that should not be searched.
                    array('id, product_id, user_id, cash_limit, code, starting_date, expiry_date, discount, discount_type, unique, status, DOC, DOU, session_id', 'safe', 'on' => 'search'),
                );
        }

        /**
         * @return array relational rules.
         */
        public function relations() {
                // NOTE: you may need to adjust the relation name and the related
                // class name for the relations automatically generated below.
                return array(
                );
        }

        /**
         * @return array customized attribute labels (name=>label)
         */
        public function attributeLabels() {
                return array(
                    'id' => 'ID',
                    'product_id' => 'Product',
                    'user_id' => 'User',
                    'cash_limit' => 'Cash Limit',
                    'code' => 'Code',
                    'starting_date' => 'Starting Date',
                    'expiry_date' => 'Expiry Date',
                    'discount' => 'Discount',
                    'discount_type' => 'Discount Type',
                    'unique' => 'Unique',
                    'status' => 'Status',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                    'session_id' => 'Session',
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
        public function search() {
                // @todo Please modify the following code to remove attributes that should not be searched.

                $criteria = new CDbCriteria;

                $criteria->compare('id', $this->id);
                $criteria->compare('product_id', $this->product_id, true);
                $criteria->compare('user_id', $this->user_id, true);
                $criteria->compare('cash_limit', $this->cash_limit);
                $criteria->compare('code', $this->code, true);
                $criteria->compare('starting_date', $this->starting_date, true);
                $criteria->compare('expiry_date', $this->expiry_date, true);
                $criteria->compare('discount', $this->discount);
                $criteria->compare('discount_type', $this->discount_type, true);
                $criteria->compare('unique', $this->unique);
                $criteria->compare('status', $this->status);
                $criteria->compare('DOC', $this->DOC, true);
                $criteria->compare('DOU', $this->DOU, true);
                $criteria->compare('session_id', $this->session_id);

                return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
        }

        /**
         * Returns the static model of the specified AR class.
         * Please note that you should have this exact method in all your CActiveRecord descendants!
         * @param string $className active record class name.
         * @return CouponsUsed the static model class
         */
        public static function model($className = __CLASS__) {
                return parent::model($className);
        }

}
