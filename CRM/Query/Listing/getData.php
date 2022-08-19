<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// Id Search 
if(isset($_POST['input'])){
    $search_param = $_POST['input'];

    $search = "SELECT * FROM add_listing where id ='$search_param'";
    $search_result = $conn->query($search);
    if ($search_result->num_rows > 0) {
            
        while($row = $search_result->fetch_assoc()) {
                                                
                                                echo '<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['id'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['property_reference'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_95">
													<div class="main-leads-table__status status-main-leads-table">
														<span class="status-main-leads-table__success _icon-galochka"></span>
														<div class="status-main-leads-table__properties-icons">
															<span class="status-main-leads-table__icon _icon-dubizl"></span>
															<span class="status-main-leads-table__icon _icon-property-finder"></span>
															<span class="status-main-leads-table__icon _icon-bayut"></span>
															<span class="status-main-leads-table__icon _icon-standart"></span>
														</div>
													</div>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__type-status _icon-galochka">';
													if($row['listing_status'] == 'Approved'){
														echo ' <span class="main-leads-table-text main-leads-table-text__green">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Draft'){
														echo ' <span class="main-leads-table-text main-leads-table-text__gray" style="color:gray">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Pending'){
														echo ' <span class="main-leads-table-text main-leads-table-text__yellow" style="color:#ff6803">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Rejected'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:red">'.$row['listing_status'].'</span> ';
													}
													echo '</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['offering_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['category'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['property_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['sub_location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.number_format(floatval($row["price"])).'</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">'.$row['beds'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['baths'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_175">
													<div class="main-leads-table__actions actions-main-leads-table">
														<ul class="actions-main-leads-table__list">
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_load _icon-load"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_view _icon-view"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_editing _icon-editing"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_copyboard _icon-copyboard"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_archive _icon-archive"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_delete _icon-delete"></button>
															</li>
														</ul>
													</div>
												</td>
											</tr>';

        }
    } else {
        $output = '
  <tr>
    <td colspan="4"> No result found. </td>   
  </tr>';
    }
    echo $output;
}





if(isset($_POST['ref'])){
    $search_param = $_POST['ref'];

    $search = "SELECT * FROM add_listing where property_reference like '%$search_param%'";
    $search_result = $conn->query($search);
    if ($search_result->num_rows > 0) {
            
        while($row = $search_result->fetch_assoc()) {
                                                
                                                echo '<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['id'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['property_reference'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_95">
													<div class="main-leads-table__status status-main-leads-table">
														<span class="status-main-leads-table__success _icon-galochka"></span>
														<div class="status-main-leads-table__properties-icons">
															<span class="status-main-leads-table__icon _icon-dubizl"></span>
															<span class="status-main-leads-table__icon _icon-property-finder"></span>
															<span class="status-main-leads-table__icon _icon-bayut"></span>
															<span class="status-main-leads-table__icon _icon-standart"></span>
														</div>
													</div>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__type-status _icon-galochka">';
													if($row['listing_status'] == 'Approved'){
														echo ' <span class="main-leads-table-text main-leads-table-text__green">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Draft'){
														echo ' <span class="main-leads-table-text main-leads-table-text__gray" style="color:gray">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Pending'){
														echo ' <span class="main-leads-table-text main-leads-table-text__yellow" style="color:#ff6803">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Rejected'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:red">'.$row['listing_status'].'</span> ';
													}
													echo '</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['offering_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['category'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['property_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['sub_location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.number_format(floatval($row["price"])).'</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">'.$row['beds'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['baths'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_175">
													<div class="main-leads-table__actions actions-main-leads-table">
														<ul class="actions-main-leads-table__list">
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_load _icon-load"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_view _icon-view"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_editing _icon-editing"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_copyboard _icon-copyboard"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_archive _icon-archive"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_delete _icon-delete"></button>
															</li>
														</ul>
													</div>
												</td>
											</tr>';

        }
    } else {
        $output = '
  <tr>
    <td colspan="4"> No result found. </td>   
  </tr>';
    }
    echo $output;
}





if(isset($_POST['stat'])){
    $search_param = $_POST['stat'];

    $search = "SELECT * FROM add_listing where listing_status like '%$search_param%'";
    $search_result = $conn->query($search);
    if ($search_result->num_rows > 0) {
            
        while($row = $search_result->fetch_assoc()) {
                                                
                                                echo '<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['id'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['property_reference'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_95">
													<div class="main-leads-table__status status-main-leads-table">
														<span class="status-main-leads-table__success _icon-galochka"></span>
														<div class="status-main-leads-table__properties-icons">
															<span class="status-main-leads-table__icon _icon-dubizl"></span>
															<span class="status-main-leads-table__icon _icon-property-finder"></span>
															<span class="status-main-leads-table__icon _icon-bayut"></span>
															<span class="status-main-leads-table__icon _icon-standart"></span>
														</div>
													</div>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__type-status _icon-galochka">';
													if($row['listing_status'] == 'Approved'){
														echo ' <span class="main-leads-table-text main-leads-table-text__green">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Draft'){
														echo ' <span class="main-leads-table-text main-leads-table-text__gray" style="color:gray">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Pending'){
														echo ' <span class="main-leads-table-text main-leads-table-text__yellow" style="color:#ff6803">'.$row['listing_status'].'</span> ';
													}elseif($row['listing_status'] == 'Rejected'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:red">'.$row['listing_status'].'</span> ';
													}
													echo '</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['offering_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['category'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['property_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['sub_location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.number_format(floatval($row["price"])).'</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">'.$row['beds'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['baths'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_175">
													<div class="main-leads-table__actions actions-main-leads-table">
														<ul class="actions-main-leads-table__list">
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_load _icon-load"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_view _icon-view"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_editing _icon-editing"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_copyboard _icon-copyboard"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_archive _icon-archive"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_delete _icon-delete"></button>
															</li>
														</ul>
													</div>
												</td>
											</tr>';

        }
    } else {
        $output = '
  <tr>
    <td colspan="4"> No result found. </td>   
  </tr>';
    }
    echo $output;
}

?>