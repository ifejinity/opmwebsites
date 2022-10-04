<table>
				<tr>
					<th>Product Image</th>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Stocks</th>
				</tr>
				<?php
					include "dbConn.php"; // Using database connection file here
					$query="select *from producttb";
					$result=mysql_query($query);
					while($rows=mysqli_fetch_assoc($result))
					{
				?>
					<tr>
						<td><?php echo $rows['image']; ?></td>
						<td><?php echo $rows['productid']; ?></td>
						<td><?php echo $rows['productname']; ?></td>
						<td><?php echo $rows['stocks']; ?></td>
					</tr>
				<?php
					}
				?>
			</table>