<div class="clearfix"></div>

<div class="container login">
    <div class="row">


        <div class="col-md-12 pickle-space">
            <div class="row">
                <h1>Register</h1>
                <div class="col-md-6 col-md-offset-3 forward">
                    <div class="row">

                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'dimension-class-form',
                            'htmlOptions' => array('class' => 'form-inline'),
                            // Please note: When you enable ajax validation, make sure the corresponding
                            // controller action is handling ajax validation correctly.
                            // There is a call to performAjaxValidation() commented in generated controller code.
                            // See class documentation of CActiveForm for details on this.
                            'enableAjaxValidation' => false,
                        ));
                        ?>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'first_name', array('class' => '')); ?>
                            <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'First Name', 'class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'first_name'); ?>

                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'last_name', array('class' => '')); ?>
                            <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Last Name', 'class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'last_name'); ?>

                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'Date of Birth', array('class' => '')); ?>
                            <?php
                            $from = date('Y') - 80;
                            $to = date('Y') + 20;
                            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'model' => $model,
                                'attribute' => 'dob',
                                'value' => 'dob',
                                'options' => array(
                                    'dateFormat' => 'dd-mm-yy',
                                    'changeYear' => true, // can change year
                                    'changeMonth' => true, // can change month
                                    'yearRange' => $from . ':' . $to, // range of year
                                    'showButtonPanel' => true, // show button panel
                                ),
                                'htmlOptions' => array(
                                    'size' => '10', // textField size
                                    'maxlength' => '10', // textField maxlength
                                    'class' => 'form-contact-2',
                                    'placeholder' => 'Date Of Birth',
                                ),
                            ));
                            ?>
                            <?php echo $form->error($model, 'Date of Birth'); ?>

                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'gender', array('class' => '')); ?>
                            <?php echo $form->dropDownList($model, 'gender', array('male' => "male", 'female' => "fe-male"), array('class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'gender'); ?>

                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'email', array('class' => '')); ?>
                            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Email Address', 'class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'email'); ?>

                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'phone_no_1', array('class' => '')); ?>
                            <?php echo $form->textField($model, 'phone_no_1', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Phone Number 1', 'class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'phone_no_1'); ?>

                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'phone_no_2', array('class' => '')); ?>
                            <?php echo $form->textField($model, 'phone_no_2', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Phone Number 2', 'class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'phone_no_2'); ?>

                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'fax', array('class' => '')); ?>
                            <?php echo $form->textField($model, 'fax', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Fax', 'class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'fax'); ?>

                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'password', array('class' => '')); ?>
                            <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Password', 'class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'password'); ?>

                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'confirm', array('class' => '')); ?>
                            <?php echo $form->passwordField($model, 'confirm', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Confirm Password', 'class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'confirm'); ?>

                        </div>

                        <div class="form-group">

                            <?php echo $form->labelEx($model, 'newsletter', array('class' => '')); ?>
                            <?php echo $form->dropDownList($model, 'newsletter', array('1' => "Yes", '0' => "No"), array('class' => 'form-contact-2')); ?>
                            <?php echo $form->error($model, 'newsletter'); ?>



                        </div>




                        <div class="box-footer">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success pos')); ?>
                        </div>

                        <?php $this->endWidget(); ?>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

