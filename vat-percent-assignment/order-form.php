<?php
  require_once('view-comp/header.php');
	require_once('model/define-model.php');
?>

				<h3 class="card-title">Order Form</h3>
				<form action="process-order.php" method="post">
					<table class="table">
						<thead>
							<tr class="row">
								<th class="col-5">Item</th>
								<th class="col-3">Price</th>
								<th class="col-4">Quantity</th>

							</tr>

						</thead>

						<tbody>

							<?php
                $productList=array(
    							array('description'=>'Tires','namaewa' =>'tireQty', 'price'=>100),
    							array('description'=>'Oil','namaewa' =>'oilQty','price'=>50),
    							array('description'=>'Spark Plugs','namaewa' =>'sparkQty','price'=>30),

    						);

								foreach ($productList  as $product) {
									echo '<tr class="row">
								<td class="col-5">'.$product['description'].'</td>
								<td class="col-3">
									'.$product['price'].'
								</td>
								<td class="col-4">
									<input type="numb er" name="'.$product['namaewa'].'" maxlength="3" min="0" max="10" class="form-control">
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


							<tr class="row">
								<td colspan="2" class="col-12">

									<button type="submit" class="btn btn-primary float-right" style="margin-right: 10px">Submit</button>
								</td>
							</tr>


						</tbody>

					</table>

				</form>

		<?php
  require_once('view-comp/footer.php');
?>
