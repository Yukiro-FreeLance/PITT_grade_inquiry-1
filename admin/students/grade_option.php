<div class="test123">
	<form method="POST" action="sort_grade.php<?php echo '?ID='.$get_ID ?>">
			<input type="hidden" name="SCHOOL_ID" value="<?php echo $get_ID; ?>">
			<div class="span1">
			<h4>FILTER Grade</h4>
			</div>
				<div  class="span3">
				<label>Year Level</label>
				<select name="SY" required>
					<option></option>
					<option>First Year</option>
					<option>Second Year</option>
					<option>Third Year</option>
					<option>Fourth Year</option>
				</select>
			</div>
			<div class="span3">
					<label>SEMESTER</label>
				<select name="SEMESTER" required>
					<option></option>
					<option>1st SEMESTER</option>
					<option>2nd SEMESTER</option>
				
				</select>
			</div>
		
			<div class="span4">
			<button name="sort" class="btn btn-info"><i class="icon-check"></i>Submit</button>
			<a name="sort" href="view_grade.php<?php echo '?ID='.$get_ID; ?>" class="btn btn-info" ><i class="icon-search"></i>&nbsp;View All</a>
				<button name="sort" onClick="window.print()";   class="btn btn-info" ><i class="icon-print"></i>&nbsp;Print</button>
			</div>
			</form>
			</div>
	
	