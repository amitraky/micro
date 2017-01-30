<div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">Site Setting</h1>
            <span class="pagedesc">Update Setting Here</span>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
                
                    <div class="contenttitle2">
                    	<h3>Setting</h3>
                    </div><!--contenttitle-->
                    
                    <br />
                    
                   
                    <form class="stdform stdform2" action="#" method="post">
                    
                    <?php foreach($rows as $row){?>
                    	<p>
                        	<label><?php  echo strtoupper($row->name) ?></label>
                            <span class="field">
                            	<input type="text" name="colorpicker" class="color333"  value="<?php  echo $row->value ?>"/>
                            </span><!--field-->
                        </p>
                     <?php } ?>  
                      <p class="stdformbutton">
                        	<button class="submit radius2">Submit Button</button>
                        </p> 
                    </form>
                    
                  	<br />
                    
                   
        
        </div><!--contentwrapper-->
        
	</div>