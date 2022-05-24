<div class="content-header row">
	<div class="content-header-left col-md-9 col-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-12">
				<h2 class="content-header-title float-left mb-0">Level</h2>
				<div class="breadcrumb-wrapper col-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php print base_url()?>home">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php print base_url()?>acl/level">Level</a>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content-body">
	<div class="row">
		<div class="col-md-12"><?php
				if (!empty($this->session->flashdata('pesan'))) {
			?>
			<div class="alert alert-warning" role="alert">
				<p class="mb-0">
					<?php print $this->session->flashdata('pesan') ?>
				</p>
			</div>
			<?php
			}
		?></div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<section id="basic-datatable">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title"> <i class="fa fa-list" aria-hidden="true"></i> Level List</h4>
							</div>
							<div class="card-content">
								<div class="card-body card-dashboard">
									<p class="card-text"> </p>
									<div class="table-responsive">
										<table class="table table-striped table-bordered complex-headers dataTable">
											<thead>
												<tr>
													<th style="width :5%; text-align: center">No</th>
													<th style="width :20%; text-align: center">Level Name</th>
													<th style="width :10%; text-align: center">Status </th>
													<th style="width :30%; text-align: center">Desc</th>
													<th style="width :20%"></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach($level_list as $vs){?>
												<tr>
													<td><?php print  $no; ?></td>
													<td><?php print  $vs->level_name ?></td>
													<td><?php print  $vs->st; ?></td>
													<td><?php print  $vs->desc; ?></td>
													<td style="text-align: center">
														<a href="<?php print base_url().'acl/level/edit_data/'.$vs->level_key; ?>"> <button type="button"
															class="btn  btn-info btn-sm ">
															<i class="fa fa-pencil" aria-hidden="true"></i> Edit
															</button>
														</a>
														<a href="<?php print base_url().'acl/level/delete_level/'.$vs->level_key; ?>"
															onclick="return confirm('Apakah and yakin akan menghapus data ini..?')">
															<button type="button"
															class="btn  btn-warning btn-sm ">
															<i class="fa fa-trash" aria-hidden="true"></i> Delete
															</button>
														</a>
													</td>
												</tr>
												<?php  $no++;
												}
												
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="col-md-4">
			<section id="basic-horizontal-layouts">
				<div class="row match-height">
					<div class="col-md-12 col-12">
						<div class="card"  >
							<div class="card-header">
								<h4 class="card-title"> <i class="fa fa-plus" aria-hidden="true"></i> Add Level</h4>
							</div>
							<div class="card-content">
								<div class="card-body">
									<form class="form form-horizontal" method="POST" action="<?php print base_url()?>acl/level/update_level" novalidate>
										<div class="form-body">
											<div class="row">
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>Level Name</span>
														</div>
														<div class="col-md-8">
															<input type="hidden" name='level_key' value="<?php print $level->level_key?>">
															<input class="form-control" id="basicInput" placeholder=""
															value="<?php print $level->level_name?>"
															type="text" name="level_name"    required data-validation-required-message="">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>Icon</span>
														</div>
														<div class="col-md-8">
															<input class="form-control" id="basicInput" placeholder=""
															value="<?php print $level->icon?>"
															type="text" name="icon"    require required data-validation-required-message="">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>Keterangan</span>
														</div>
														<div class="col-md-8">
															<input class="form-control" id="basicInput" placeholder=""
															value="<?php print $level->desc?>"
															type="text" name="desc"     required data-validation-required-message="">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>Status</span>
														</div>
														<div class="col-md-4">
															<div class="vs-radio-con">
																<input type="radio"  name='st'  value="1"
																<?php if($level->st == '1'){ print 'checked';}?>
																required data-validation-required-message=""  >
																<span class="vs-radio">
																	<span class="vs-radio--border"></span>
																	<span class="vs-radio--circle"></span>
																</span>
																<span class="">Active</span>
															</div>
														</div>
														<div class="col-md-4">
															<div class="vs-radio-con">
																<input type="radio"  name='st'	value="0"
																<?php if($level->st == '0'){ print 'checked';}?>
																required data-validation-required-message="" >
																<span class="vs-radio">
																	<span class="vs-radio--border"></span>
																	<span class="vs-radio--circle"></span>
																</span>
																<span class="">Non Active</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-8 offset-md-4">
													<button type="submit"
													class="btn btn-primary  mr-1 mb-1 waves-effect waves-light">
													<i class="fa fa-save"></i> Simpan
													</button>
												</div>
												<br>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>