<?php

 echo $this->Html->css(array('/bootstrap/css/bootstrap.min','popup',
									
									'font-awesome/css/font-awesome.min',
									
									
									
									)
							);
echo $this->Html->script(array('jquery.min','lib/chained/jquery.chained.remote.min'));
		/* End */
?>
<input type="hidden" id="hidden_site_baseurl" value="<?php echo $this->request->base . ((!is_null($this->params['language'])) ? '/' . $this->params['language'] : ''); ?>"  />

<!----------------------------start add project block------------------------------>
<div class="content">
     <div class="pop-up-hdng"><?php if($user_type == 'Global') {?>
        <span class="heading_text">Add Client Action | <?php echo $actionitems['Lead']['lead_fname'].' '.$actionitems['Lead']['lead_lname']; ?> | Urgency:<?php echo $actionitems['Urgency']['value'];?> | Importance:<?php echo $actionitems['Importance']['value'];?></span>
		<?php }
		 if($user_type == 'Team') {?>
		 <span class="heading_text">Add Client Action | <?php echo $actionitems['Lead']['lead_fname'].' '.$actionitems['Lead']['lead_lname']; ?> | Waiting for Acceptance</span>
		<?php }if($user_type == 'Builder') {?>
		 <span class="heading_text">Add Builder Action | <?php echo $actionitems['ActionBuilder']['builder_name'] ?> | Waiting for Approval</span>
		<?php }?></div>


    <?php
    //echo $this->Form->create('Remark', array('enctype' => 'multipart/form-data'));
	echo $this->Form->create('ActionItem', array('method' => 'post','id' => 'parsley_reg','novalidate' => true,
													'inputDefaults' => array(
																	'label' => false,
																	'div' => false,
																	'class' => 'form-control',
																)
						));
   echo $this->Form->hidden('model_name',array('id' => 'model_name','value' =>'ActionItem'));
    echo $this->Form->hidden('action_item_level_id',array('value' => $actionitems['ActionItem']['action_item_level_id']));
    echo $this->Form->hidden('lead_id',array('value' => $actionitems['Lead']['id']));
    echo $this->Form->hidden('builder_id',array('value' => $actionitems['Lead']['builder_id1']));
    echo $this->Form->hidden('project_id',array('value' => $actionitems['Lead']['proj_id1']));
	 echo $this->Form->hidden('action_item_source',array('value' => $actionitems['ActionItem']['action_item_source']));
	 echo $this->Form->hidden('city_id',array('value' => $actionitems['Lead']['city_id']));
    ?>
    	<div class="col-sm-12 spacer">
        <div class="col-sm-6">
        
       
            <div class="form-group">
                <label class="bgr">Choose Action Type</label>
                <span class="colon">:</span>
                <div class="col-sm-10"><?php
                     echo $this->Form->input('type_id',  array('id' => 'type_id','options' => $type,'selected' => array('1','2'),'empty' => '--Select--'));
                    ?>

                </div>

            </div>
            <div id="ajax"></div>


            <div class="form-group" id="out_going_msg" style="display:none;">
                <label>Outgoing Message</label>
                <span class="colon">:</span>
                <div class="col-sm-10"><?php
                     echo strtoupper(substr($actionitems['City']['city_name'],0,3)).' | '.strtoupper(substr($actionitems['Urgency']['value'],0,3)).' | '.strtoupper(substr($actionitems['Importance']['value'],0,3)).' | '.strtoupper(substr($actionitems['Country']['value'],0,2)). ' | +91- '.$actionitems['Lead']['lead_primaryphonenumber'].' | '.strtoupper($actionitems['Lead']['lead_fname']).' '.strtoupper($actionitems['Lead']['lead_lname']).' | '.$actionitems['Lead']['lead_emailid'].' | '.strtoupper($actionitems['Suburb']['suburb_name']).' , '.strtoupper($actionitems['Area']['area_name']).' ,  '.strtoupper($actionitems['Builder']['builder_name']).' , '.strtoupper($actionitems['Project']['project_name']).' , '.strtoupper($actionitems['TypeProject']['value']).' , '.strtoupper($actionitems['Type']['value']);
                    ?>

                </div>

            </div>
            
        </div>
    	</div>
    
    	<div class="col-sm-12 spacer">
        <div class="col-sm-6">
	    <div class="form-group" id="div_line" style="display: none;">
               <label>Allocate To Channel</label>
                <span class="colon">:</span>
                <div class="col-sm-10">	<?php
                    echo $this->Form->input('allocated_channel_id',  array('id' => 'allocated_channel_id','options' => $channels,'empty' => '--Select--'));
                    ?></div>
            </div>
           
            <div class="form-group" id="secondary_manager_id"  style="display: none;">
               <label>Secondary Manager</label>
                <span class="colon">:</span>
                <div class="col-sm-10">	<?php
                    echo $this->Form->input('secondary_manager_id',  array('options' => $secondary_manager,'empty' => '--Select--'));
                    ?></div>
            </div>
          <div class="form-group" id="sec_mang" style="display: none;">
                <label>Secondary Manager</label>
                <span class="colon">:</span>
                <div class="col-sm-10">&nbsp;</div>
            </div>
            <div class="form-group" id="rejection" style="display: none;">
               <label class="bgr">Reason for Rejection</label>
                <span class="colon">:</span>
                <div class="col-sm-10">	<?php
                    echo $this->Form->input('lookup_rejection_id',  array('id' => 'rejections_id','options' => $rejections,'empty' => '--Select--'));?>
				</div>
            </div>
            <div class="form-group" id="return" style="display: none;">
               <label>Reason for Return</label>
                <span class="colon">:</span>
                <div class="col-sm-10">	<?php
                     echo $this->Form->input('lookup_return_id',  array('id' => 'return_id','options' => $returns,'empty' => '--Select--'));
				
				
				echo $this->Form->input('other_return',  array('div' =>array('id' => 'other_return', 'style' => 'display:none;margin-top: 10px;height:auto;'),'type'=>'textarea','style' => array('height:40px; width:363px;margin-left:-33px')));
                    ?></div>
            </div>
           </div>
           <div class="col-sm-12 spacer">
           	<div class="lf-space"><?php
				echo $this->Form->input('other_rejection',  array('div' =>array('id' => 'other', 'style' => 'display:none;'),'label' => false, 'type'=>'textarea','style' => array('')));
                    ?></div>
           </div>
	</div>
    
    <div class="row spacer">
    	<div class="col-sm-12"><div class="col-sm-12"><?php echo $this->Form->submit('Add Action', array('class' => 'success btn','div' => false, 'id' => 'udate_unit')); ?><?php
                echo $this->Form->button('Reset', array('type' => 'reset', 'class' => 'reset btn'));
               
                ?></div></div>
                 </div>
            
        

    <?php echo $this->Form->end();
    ?>
</div>	

<script type="text/javascript">
    $(document).ready(function(){
         var FULL_BASE_URL = $('#hidden_site_baseurl').val();
        
                $('#allocated_channel_id').change(function(){
                 var channel_id = $(this).val();
                // alert(channel_id);
                 var model = $('#model_name').val();
                 var dataString = 'channel_id=' + channel_id + '&model=' + model;
                 
                
                  $.ajax({
                     type: "POST",
                     data: dataString,
                      url: FULL_BASE_URL + '/all_functions/get_prmember_by_channel_id',
                    
                   
                     success: function(return_data) {
                         //alert(return_data)
                       
                        $('#ajax').html(return_data);
                        $('#sec_mang').css('display','block');
						$('#out_going_msg').css('display','block');
                     }
                 });  
                 
             });
            
             $('#type_id').change(function(){
                    var type = $(this).val();
                    if (type == 9) {
                         $('#div_line').css('display','none');
						  $('#rejection').css('display','block');
                         $('#remarks').val('');
                         $('#pri_mang').css('display','none');
                         $('#sec_mang').css('display','none');
						 $('#out_going_msg').css('display','none');
						 $('#going_msg').css('display','none');
						  $('#secondary_manager_id').css('display','none');
                     
                    }
                    if (type == 4) {
                        $('#div_line').css('display','block');
						 $('#rejection').css('display','none');
						  $('#secondary_manager_id').css('display','none');
                      
                    }
					if(type == 8){
						 $('#return').css('display','block');
						  $('#secondary_manager_id').css('display','none');
					}
					if(type == 2){
						 $('#return').css('display','none');
						  $('#secondary_manager_id').css('display','none');
					}
					if(type == 3){
						 $('#secondary_manager_id').css('display','none');
						   $('#return').css('display','none');
					}
					if(type == 5){
						 $('#secondary_manager_id').css('display','block');
						 $('#return').css('display','none');
					
						 
					}
					
                  
                });
				
			$('#return_id').change(function(){
				var value =	$(this).val();
				if(value == 9){
					 $('#other_return').css('display','block');
				}
				else{
					$('#other_return').css('display','none');
				}
				
			});
				
			$('#rejections_id').change(function(){
				var value =	$(this).val();
				if(value == 10){
					 $('#other').css('display','block');
				}
				else{
					$('#other').css('display','none');
				}
				
			});	
               
        });


</script>		
<!----------------------------end add project block------------------------------>
