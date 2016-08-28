<?php 
//pr($activities);
if($activities['Event']['activity_level'] == '1' )
	$activity_with = $activities['Lead']['lead_fname'].' '.$activities['Lead']['lead_lname'];
else if($activities['Event']['activity_level'] == '2')	
	$activity_with = $activities['Builder']['builder_name'];
else if($activities['Event']['activity_level'] == '3')	
	$activity_with = $activities['Project']['project_name'];
	
	 echo $this->Form->hidden('Reimbursement.reimbursement_with2',array('value' => $activity_with));	
	 echo $this->Form->hidden('Reimbursement.reimbursement_level2',array('value' => $activities['Event']['activity_level']));
	 echo $this->Form->hidden('Reimbursement.reimbursement_type_12',array('value' => $activities['Event']['activity_type']));	
	 echo $this->Form->hidden('Reimbursement.expense_date',array('value' => $activities['Event']['end_date']));
?>
<div class="col-sm-6">
    	<div class="form-group">
                <label>Expense level</label>
                <span class="colon exGap">:</span>
                <div class="col-sm-10 topPad"><?php
                    echo $activities['ActivityLevel']['value'];
                    ?>
            
                </div>
            
            </div>
            <div class="form-group ">
                <label>Expense Details</label>
                <span class="colon exGap">:</span>
                <div class="col-sm-10 topPad"><?php
                    echo $activities['Details']['value'];
                    ?>
            
                </div>
            
            </div>
        <div class="form-group ">
                <label>Expense type</label>
                <span class="colon exGap">:</span>
                <div class="col-sm-10 topPad"><?php
                    echo $activities['ActivityType']['value'];
                    ?>
            
                </div>
            
            </div> 
            <div class="form-group ">
                <label>Distance (KM)</label>
                <span class="colon exGap">:</span>
                <div class="col-sm-10 topPad">
                <?php
                echo $this->Form->input('Reimbursement.reimbursement_factor_1',array('label' => false,
																	'div' => false,
																	'class' => 'form-control','onchange' => 'totalCalculate()'));
                ?>
                </div>
                
                </div> 
               
    </div>
 <div class="col-sm-6">
    	<div class="form-group ">
                <label>Expense with</label>
                <span class="colon exGap">:</span>
                <div class="col-sm-10 topPad"><?php
                    echo $activity_with;
                    ?>
            
                </div>
            
            </div>
           <div class="form-group ">
                <label>Project Site</label>
                <span class="colon exGap">:</span>
                <div class="col-sm-10 topPad"><?php
                    echo $activities['ActivitySite']['project_name'];
                    ?>
            
                </div>
            
            </div>  
        <div class="form-group ">
                <label>Expense For</label>
                <span class="colon exGap">:</span>
                <div class="col-sm-10"><?php
                    echo $this->Form->input('Reimbursement.reimbursement_type_22', array('options' =>$reimbursement_type2,'label' => false,
																	'div' => false,
																	'class' => 'form-control',  'empty' => '--Select--','onchange' => 'totalCalculate()'));
                    ?>
            
                </div>
            
            </div>   
            <div class="form-group ">
                <label>Expense / KM</label>
                <span class="colon exGap">:</span>
                <div class="col-sm-10 topPad">
                <?php 
                echo $this->Form->input('Reimbursement.reimbursement_factor_2',array('label' => false,
																	'div' => false,
																	'class' => 'form-control','onchange' => 'totalCalculate()'));
                ?>
                </div>
                </div>
             
    </div>   