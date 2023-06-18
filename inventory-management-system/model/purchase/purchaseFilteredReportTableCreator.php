<?php
	require_once('../../inc/config/constants.php');
	require_once('../../inc/config/db.php');
	
	$uPrice = 0;
	$qty = 0;
	$totalPrice = 0;
	
	if(isset($_POST['startDate'])){
		$startDate = htmlentities($_POST['startDate']);
		$endDate = htmlentities($_POST['endDate']);
		
		$purchaseFilteredReportSql = 'SELECT * FROM purchase WHERE purchaseDate BETWEEN :startDate AND :endDate';
		$purchaseFilteredReportStatement = $conn->prepare($purchaseFilteredReportSql);
		$purchaseFilteredReportStatement->execute(['startDate' => $startDate, 'endDate' => $endDate]);

		$output = '<table id="purchaseFilteredReportsTable" class="table table-sm table-striped table-bordered table-hover" style="width:100%">
					<thead>
						<tr>
						<th>የግዢ መለያ</th>
						<th>የእቃው ቁጥር</th>
						<th>የግዢ ቀን</th>
						<th>የእቃው ስም</th>
						<th>የአቅራቢ ስም</th>
						<th>የአቅራቢ መለያ</th>
						<th>ብዛት</th>
						<th>የአንዱ ዋጋ</th>
						<th>ጠቅላላ ዋጋ</th>
						</tr>
					</thead>
					<tbody>';
		
		// Create table rows from the selected data
		while($row = $purchaseFilteredReportStatement->fetch(PDO::FETCH_ASSOC)){
			$uPrice = $row['unitPrice'];
			$qty = $row['quantity'];
			$totalPrice = $uPrice * $qty;
		
			$output .= '<tr>' .
							'<td>' . $row['purchaseID'] . '</td>' .
							'<td>' . $row['itemNumber'] . '</td>' .
							'<td>' . $row['purchaseDate'] . '</td>' .
							'<td>' . $row['itemName'] . '</td>' .
							'<td>' . $row['vendorName'] . '</td>' .
							'<td>' . $row['vendorID'] . '</td>' .
							'<td>' . $row['quantity'] . '</td>' .
							'<td>' . $row['unitPrice'] . '</td>' .
							'<td>' . $totalPrice . '</td>' .
						'</tr>';
		}
		
		$purchaseFilteredReportStatement->closeCursor();
		
		$output .= '</tbody>
						<tfoot>
							<tr>
								<th>Total</th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</tfoot>
					</table>';
		echo $output;
	}
?>


