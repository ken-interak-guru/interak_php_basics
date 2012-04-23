<form action="process.php" method="GET">
	<!-- Only GET to see parameters sent -->

	<p>
		<input type="checkbox" name="agree" value="true" />
		<!-- Adding a value to the checkbox -->
		<label for="agree">I agree with EVERYTHING</label>
		<!-- Not checking a box sends no data -->
	</p>
	
	<p>
		<input type="submit" value="submit" />
	</p>

</form>