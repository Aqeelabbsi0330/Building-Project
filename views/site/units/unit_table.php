<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Units List</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
							    <div class="col-auto">
								    
								    <select class="form-select w-auto" >
										  <option selected value="option-1">All</option>
										  <option value="option-2">This week</option>
										  <option value="option-3">This month</option>
										  <option value="option-4">Last 3 months</option>
										  
									</select>
							    </div>
							   
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			   
			    
			      <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-vacant-tab" data-bs-toggle="tab" href="#orders-vacant" role="tab" aria-controls="orders-vacant" aria-selected="false">Vacant</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-rented-tab" data-bs-toggle="tab" href="#orders-rented" role="tab" aria-controls="orders-rented" aria-selected="false">Rented</a>
				  </nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											 <tr>
                                                <th class="cell">#</th>
                                                <th class="cell">Building No.</th>
                                                <th class="cell">Floor No.</th>
                                                <th class="cell">Area (sq ft)</th>
                                                <th class="cell">Status</th>
                                            </tr>
										</thead>
										<tbody>
											  
                                             <tr>
                                                <td class="cell">1</td>
                                                <td class="cell">A1</td>
                                                <td class="cell">1st</td>
                                                <td class="cell">850</td>
												<td class="cell"><span class="badge bg-success">Vacant</span></td>
                                            </tr>
                                             <tr>
                                                <td class="cell">2</td>
                                                <td class="cell">A1</td>
                                                <td class="cell">2nd</td>
                                                <td class="cell">900</td>
												<td class="cell"><span class="badge bg-danger">Rented</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cell">3</td>
                                                <td class="cell">B2</td>
                                                <td class="cell">3rd</td>
                                                <td class="cell">1100</td>
												<td class="cell"><span class="badge bg-success">Vacant</span></td>

                                            </tr>
                 
										
											
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->


