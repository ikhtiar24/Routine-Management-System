<!doctype html>
<html>
    
	<div class="header">
            <?php include ("includes/header2.php"); ?>
     </div>
        
        
       
        <div class="start-routine" style="width: 100%;">
            <label>Semester </label>
				<input  type="text" placeholder="Enter Semester" maxlength="" />
            
            <label>Department </label>
				<input  type="text" placeholder="Enter Department" maxlength="" /> 
         
            <p><b> Please select your routine types</b></p>
                 <select>  
                     <option value="Select Routine"> Select Routine</option>  
                     <option value="Full Routine"> Full Routine</option>
                     <option value="Course Routine"> Course Routine</option>
                     <option value="Section Routine"> Section Routine</option>
                     <option value="Teacher Initial Routine"> Teacher Initial Routine</option>
                     
                </select>  
            
            <a href="#"><button>GO</button></a>
        </div>      
       
    
        <div class="copyright">
            <?php include ("includes/footer.php"); ?>
        </div>

</html>
