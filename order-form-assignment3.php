<?php
  require_once('view-comp/header.php');
  require_once('model/products.php');
  require_once('model/define-products.php');
?>
				<h3 class="card-title"> Order Form </h3>
                <!-- Note: Organize Code into workable ones first. I'm trying to execute them on my local machine. -->
                <!-- Note: Error 404 -->
                <!-- Note: Also don't forget to make an index.html where I could browse through the assignments. -->
                <!-- Note: Observe proper indention. -->
				<form action="process-order.php" method="post">
				<table class="table">
				<thead>
					<tr class="row">
						<td class="col-5"><b>Item</b></td>
						<td class="col-4"><b>Price</b></td>
						<th class="col-2"><b>Quantity</b></th>
					
					</tr>
				</thead>

				<tbody>

							<?php

								foreach ($productList  as $product) {
									echo '<tr class="row">
								<td class="col-5">'.@$product->productName.'</td>
								<td class="col-3">
									'.@$product->price.'
								</td>
								<td class="col-4">
									<input type="numb er" name="'.@$product->qty.'" maxlength="3" min="0" max="10" class="form-control">
								</td>
									</tr>';
								}
							?>

								<tr class="row">
								<td class="col-9">How did you find Bob's</td>
								<td class="col-3">
									<select name="find" class="custom-select">
										<option value="regular">I'm a regular customer</option>
										<option value="tv">TV advertising</option>
										<option value="phone">Phone Directory</option>
										<option value="mouth">Word of Mouth</option>
									</select>

								</td>


							</tr>

						</tbody>
						<tfoot>
							<tr class="row">
								<td colspan="3" class="col-12"> 
								<button type="submit" class="btn btn-primary float-right" > 
								SUBMIT </button> &nbsp
								
								</td>
							</tr>
						</tfoot>
					</table>
				</form>

<?php
  require_once('view-comp/footer.php');
?>
