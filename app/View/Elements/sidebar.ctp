<?php
$url = $this->here;
$arr = explode("/", $url);
$cur_page = end($arr); // live
?>
<nav id="sidebar">
    <ul id="icon_nav_v" class="side_ico_nav">
        <li class="nav-toggle"><button class="btn  btn-nav-toggle"><i class="fa toggle-left fa-angle-double-left" style="color:#eee;"></i> </button></li>
        <li <?php if ($cur_page == 'dashboard') { ?> class="active"<?php } ?>>
            <?php
            echo $this->Html->link('<i class="icon-home"></i>', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false, 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Dashboard'));
            ?>

        </li>
        <?php if ($this->Session->read('role_id') == '3' || $this->Session->read('role_id') == '14') { ?>
            <li <?php if ($cur_page == 'my-builders') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Builders</span>', '/my-builders', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Builders', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-builder-contacts') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Network</span>', '/my-builder-contacts', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Network', 'escape' => false));
                ?>          

            </li>
         
            <li <?php if ($cur_page == 'my-projects') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Projects</span>', '/my-projects', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Projects', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-clients') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Clients</span>', '/my-clients', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Clients', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-cities') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Cities</span>', '/my-cities', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Cities', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-suburbs') { ?> class="active"<?php } ?>> 
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Suburbs</span>', '/my-suburbs', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Suburbs', 'escape' => false));
                ?>            

            </li>
            <li <?php if ($cur_page == 'my-areas') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Areas</span>', '/my-areas', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Areas', 'escape' => false));
                ?>           

            </li>
        <?php
        } else if ($this->Session->read('role_id') == '15') {
            ?>
            <li <?php if ($cur_page == 'my-builders') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Builders</span>', '/my-builders', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Builders', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-builder-contacts') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Network</span>', '/my-builder-contacts', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Network', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-projects') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Projects</span>', '/my-projects', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Projects', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-clients') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Clients</span>', '/my-clients', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Clients', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-payments') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Payments</span>', '/my-payments', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Payments', 'escape' => false));
                ?>           
            </li>


        <?php } else if ($this->Session->read('role_id') == '7') {
            ?>
            <li <?php if ($cur_page == 'my-builders') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Builders</span>', '/my-builders', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Builders', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-builder-contacts') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Network</span>', '/my-builder-contacts', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Network', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-projects') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Projects</span>', '/my-projects', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Projects', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-clients') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Clients</span>', '/my-clients', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Clients', 'escape' => false));
                ?>          

            </li>

            <li <?php if ($cur_page == 'my-finance') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Finance</span>', '/my-finance', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Finance', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-data') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Data</span>', '/my-data', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Data', 'escape' => false));
                ?>           

            </li>

        <?php }
        else if ($this->Session->read('role_id') == '6') { // general admin realeaste
            ?>
            <li <?php if ($cur_page == 'my-builders') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Builders</span>', '/my-builders', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Builders', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-builder-contacts') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Network</span>', '/my-builder-contacts', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Network', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-projects') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Projects</span>', '/my-projects', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Projects', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-cities') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Cities</span>', '/my-cities', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Cities', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-data') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Data</span>', '/my-data', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Data', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'my-suburbs') { ?> class="active"<?php } ?>> 
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Suburbs</span>', '/my-suburbs', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Suburbs', 'escape' => false));
                ?>            
            </li>

            <li <?php if ($cur_page == 'my-areas') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Areas</span>', '/my-areas', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Areas', 'escape' => false));
                ?>           
            </li>

        <?php }
          else if ($this->Session->read('industry') == '2') {// general admin for travel,Technology Manager (T)
              
              if ($this->Session->read('role_id') == '45') { // Technology Associate
            ?>
            <li <?php if ($cur_page == 'my-agents') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Download Section</span>', '/download_tables/download_ota', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Download Section', 'escape' => false));
                ?>          

            </li>
              <?php }
 elseif ($this->Session->read('role_id') == '64') {
     ?>
            <li <?php if ($cur_page == 'reports') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Reports</span>', '/admin/reports', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Reports', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'administration') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Administration</span>', '/admin/administration', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Administration', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'data') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Admin</span>', '/admin/data', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Data', 'escape' => false));
                ?>           
            </li>
            <?php
 }
  elseif ($this->Session->read('role_id') == '65') {
     ?>
            <li <?php if ($cur_page == 'my-hotels') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Hotels</span>', '/my-hotels', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Hotels', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'mappinges') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Mappings</span>', '/mappinges', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Mappinges', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'mappinges') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Fetch New Hotels</span>', '#', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Fetch New Hotels', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'travel_action_items') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Action</span>', '/travel_action_items', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Action', 'escape' => false));
                ?>           
            </li>
            <?php
 }
                  else{
              ?>
            <li <?php if ($cur_page == 'my-agents') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Agent</span>', '/my-agents', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Agents', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-corporates') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Corporates</span>', '#', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Corporates', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-retail-clients') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Retail Clients</span>', '#', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Retail Clients', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-distributors') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Distributors</span>', '#', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Distributors', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-suppliers') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Suppliers</span>', '#', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Suppliers', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'travel_booking_services') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Bookings</span>', '/travel_booking_services', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Bookings', 'escape' => false));
                ?>           
            </li>
        
            <li <?php if ($cur_page == 'my-network') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Network</span>', '#', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Network', 'escape' => false));
                ?>           
            </li>
            
            <li <?php if ($cur_page == 'mappinges') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Mappings</span>', '/mappinges', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Mappings', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'travel_look_ups') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Travel Lookups</span>', '/travel_look_ups', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Travel Lookups', 'escape' => false));
                ?>           
            </li>
                     
            <li <?php if ($cur_page == 'travel_core_look_ups') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Core Lookups</span>', '/travel_core_look_ups', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Core Lookups', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'tech-area') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Tech Area</span>', '/tech-area', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Tech Area', 'escape' => false));
                ?>           
            </li>             
            <li <?php if ($cur_page == 'admin') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Admin</span>', '/admin', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Admin', 'escape' => false));
                ?>           

            </li>
            

        <?php }
          }
        else if ($this->Session->read('industry') == '5') {
            if ($this->Session->read('role_id') == '60') {
            ?>
            <li <?php if ($cur_page == 'my-persons') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Persons</span>', '/my-persons', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Persons', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'dig_accounts') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Accounts</span>', '/dig_accounts', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Account', 'escape' => false));
                ?>          

            </li>
            <?php }
            else{
            ?>
            <li <?php if ($cur_page == 'dig_bases') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Bases</span>', '/dig_bases', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Base', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-persons') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Persons</span>', '/my-persons', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Persons', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'dig_accounts') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Accounts</span>', '/dig_accounts', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Account', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'dig_topics') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Topics</span>', '/dig_topics', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Topics', 'escape' => false));
                ?>          

            </li>
            
            <li <?php if ($cur_page == 'dig_media_tasks') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Tasks</span>', '/dig_media_tasks', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Task', 'escape' => false));
                ?>          

            </li>
            
            
            
            
            <li <?php if ($cur_page == 'my-lots') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Lots</span>', '/my-lots', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Lots', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-lot-links') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Lot Links</span>', '/my-lot-links', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Lot Links', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'dig_patterns') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Patterns</span>', '/dig_patterns', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Patterns', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'dig_levels') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Levels</span>', '/dig_levels', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Levels', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'dig_structures') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Structures</span>', '/dig_structures', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Structures', 'escape' => false));
                ?>          

            </li>
           
            
        <?php
            }
        }
        else if ($this->Session->read('industry') == '6') {
            ?>
            <li <?php if ($cur_page == 'my-roles') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Roles</span>', '/my-roles', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Roles', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'my-groups') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Groups</span>', '/my-groups', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Groups', 'escape' => false));
                ?>           

            </li>
            
            <li <?php if ($cur_page == 'my-channels') { ?> class="active"<?php } ?>>
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Channels</span>', '/my-channels', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Channels', 'escape' => false));
                ?>             

            </li>
            
            <li <?php if ($cur_page == 'my-users') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Users</span>', '/my-users', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Users', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'my-permissions') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Permissions</span>', '/my-permissions', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Permissions', 'escape' => false));
                ?>           

            </li>
            
            
            <?php
        }
        else {
            ?>
            <li <?php if ($cur_page == 'my-builders') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Builders</span>', '/my-builders', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Builders', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-builder-contacts') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Network</span>', '/my-builder-contacts', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Network', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-projects') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Projects</span>', '/my-projects', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Projects', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-clients') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Clients</span>', '/my-clients', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Clients', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-owners') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Owners</span>', '/my-owners', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Owners', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-consultants') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Consultants</span>', '/my-consultants', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Consultants', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-properties') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Properties</span>', '/my-properties', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Properties', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-search') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Search</span>', '/searches', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Search', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-payments') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Payments</span>', '/my-payments', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Payments', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-finance') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Finance</span>', '/my-finance', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Finance', 'escape' => false));
                ?>           
            </li>
            <li <?php if ($cur_page == 'my-cities') { ?> class="active"<?php } ?>>   
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Cities</span>', '/my-cities', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Cities', 'escape' => false));
                ?>          

            </li>
            <li <?php if ($cur_page == 'my-channels') { ?> class="active"<?php } ?>>
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Channels</span>', '/my-channels', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Channels', 'escape' => false));
                ?>             

            </li>
            <li <?php if ($cur_page == 'my-suburbs') { ?> class="active"<?php } ?>> 
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Suburbs</span>', '/my-suburbs', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Suburbs', 'escape' => false));
                ?>            

            </li>

            <li <?php if ($cur_page == 'my-areas') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Areas</span>', '/my-areas', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Areas', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'my-groups') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Groups</span>', '/my-groups', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Groups', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'my-roles') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Roles</span>', '/my-roles', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Roles', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'my-users') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Users</span>', '/my-users', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Users', 'escape' => false));
                ?>           

            </li>
			<li <?php if ($cur_page == 'my-data') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Data</span>', '/my-data', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Data', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'my-permissions') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Permissions</span>', '/my-permissions', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Permissions', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'my-look-ups') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Look Ups</span>', '/my-look-ups', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Look Ups', 'escape' => false));
                ?>           

            </li>
             <li <?php if ($cur_page == 'admin') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>Admin</span>', '/admin', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Admin', 'escape' => false));
                ?>           

            </li>
            <li <?php if ($cur_page == 'travel_look_ups') { ?> class="active"<?php } ?>>  
                <?php
                echo $this->Html->link('<i class="icon-tasks"></i><span>My Travel Look Ups</span>', '/travel_look_ups', array('data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'My Travel Look Ups', 'escape' => false));
                ?>           

            </li>
        <?php } ?>
    </ul>
</nav>