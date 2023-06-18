<?php
	require_once('../../inc/config/constants.php');
	require_once('../../inc/config/db.php');
	
	$itemDetailsSearchSql = 'SELECT * FROM item';
	$itemDetailsSearchStatement = $conn->prepare($itemDetailsSearchSql);
	$itemDetailsSearchStatement->execute();

	$vendorDetailsSearchSql = 'SELECT * FROM vendor';
	$vendorDetailsSearchStatement = $conn->prepare($vendorDetailsSearchSql);
	$vendorDetailsSearchStatement->execute();

	$output = '<table id="itemReportsTable" class="table table-sm table-striped table-bordered table-hover" style="width:100%">
				<thead>
					<tr>
						<th>የእቃው መለያ</th>
						<th>የእቃው ቁጥር</th>
						<th>የእቃው ስም</th>
						<th>ቅናሸ በ %</th>
						<th>የክምችት ብዛት</th>
						<th>የአንዱ ዋጋ</th>
						<th>ሁኔታ</th>
						<th>የእቃው መግለጫ</th>
					</tr>
				</thead>
				<tbody>';
	
	// Create table rows from the selected data
	while(($row = $itemDetailsSearchStatement->fetch(PDO::FETCH_ASSOC)) && ($row2 = $vendorDetailsSearchStatement->fetch(PDO::FETCH_ASSOC))){
		$output .= '<tr>' .
						'<td>' . $row['productID'] . '</td>' .
						'<td>' . $row['itemNumber'] . '</td>' .
						//'<td>' . $row['itemName'] . '</td>' .
						

						'<td>' . $row2['fullName'] . ' - ' . $row['itemName'] . '</a></td>' .

						'<td>' . $row['discount'] . '</td>' .
						'<td>' . $row['stock'] . '</td>' .
						'<td>' . $row['unitPrice'] . '</td>' .
						'<td>' . $row['status'] . '</td>' .
						'<td>' . $row['description'] . '</td>' .
					'</tr>';
	}
	
	$itemDetailsSearchStatement->closeCursor();
	
	$output .= '</tbody>
					<tfoot>
						<tr>
						<th>የእቃው መለያ</th>
						<th>የእቃው ቁጥር</th>
						<th>የእቃው ስም</th>
						<th>ቅናሸ በ %</th>
						<th>የክምችት ብዛት</th>
						<th>የአንዱ ዋጋ</th>
						<th>ሁኔታ</th>
						<th>የእቃው መግለጫ</th>
						</tr>
					</tfoot>
				</table>';
	echo $output;
?>