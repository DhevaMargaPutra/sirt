<div class="content-header row">
	<div class="content-header-left col-md-9 col-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-12">
				<h2 class="content-header-title float-left mb-0">Menu</h2>
				<div class="breadcrumb-wrapper col-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= site_url('home') ?>">Home</a>
						</li>
						<li class="breadcrumb-item"><a href="<?= site_url('acl/menu') ?>">Menu</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?= site_url('/acl/menu/menu_sub/' . $id_menu) ?>">Sub Menu</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?= site_url('/acl/menu/menu_sub_sub/' . $id_menu . '/' . $id_menu_sub) ?>">Sub Sub Menu</a>
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
								if (!empty(session()->getFlashdata('pesan'))) {
									?>
				<div class="alert alert-warning" role="alert">
					<p class="mb-0">
						<?php print session()->getFlashdata('pesan') ?>
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
								<h4 class="card-title"> <i class="fa fa-users" aria-hidden="true"></i> Daftar Sub Sub Menu <?php print $sub_menu->nm_menu_sub ?></h4>
							</div>
							<div class="card-content">
								<div class="card-body card-dashboard">
									<p class="card-text"> </p>
									<div class="table-responsive">
										<table class="table table-striped table-bordered complex-headers dataTable">
											<thead>
												<tr>
													<th style="width :5%; text-align: center">No</th>
													<th style="width :35%; text-align: center">Nama Menu</th>
													<th style="width :35%; text-align: center">Url </th>
													<th style="width :20%"></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach ($sub_sub_menu_list as $vs) { ?>
													<tr>
														<td><?php print  $no; ?></td>
														<td><?php print  $vs->nm_menu_sub_sub ?>
														</td>
														<td>
															<?php print  $vs->url . '<br>' . $vs->api_url . ' / ' . $vs->id; ?>
															<br>Order : <?php echo $vs->order ?>
														</td>
														<td style="text-align: center">
															<a href="<?= site_url('/acl/menu/edit_sub_sub_menu/' . $vs->id_menu . '/' . $vs->id_menu_sub . '/' . $vs->id); ?>">
																<button type="button" class="btn  btn-info btn-sm ">
																	<i class="fa fa-pencil" aria-hidden="true"></i> Edit
																</button>
															</a>
															<a href="<?= site_url('acl/menu/delete_sub_sub_menu/' . $vs->id_menu . '/' . $vs->id_menu_sub . '/' . $vs->id) ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini..?')">
																<button type="button" class="btn  btn-warning btn-sm ">
																	<i class="fa fa-trash" aria-hidden="true"></i> Delete
																</button>
															</a>
														</td>
													</tr>
												<?php $no++;
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
						<div class="card">
							<div class="card-header">
								<h4 class="card-title"> <i class="fa fa-plus" aria-hidden="true"></i> Add Sub Sub Menu</h4>
							</div>
							<div class="card-content">
								<div class="card-body">
									<form class="form form-horizontal" method="POST" action="<?= site_url('/acl/menu/simpan_sub_sub_menu') ?>" novalidate>
										<div class="form-body">
											<div class="row">
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>Nama Sub Sub Menu</span>
														</div>
														<div class="col-md-8">
															<input type="hidden" name='id_menu' value="<?php print $id_menu; ?>">
															<input type="hidden" name='id_menu_sub' value="<?php print $id_menu_sub; ?>">
															<input class="form-control" id="basicInput" placeholder="" type="text" name="nm_menu_sub_sub" required data-validation-required-message="">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>Url</span>
														</div>
														<div class="col-md-8">
															<input class="form-control" id="basicInput" placeholder="" type="text" name="url" require required data-validation-required-message="">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>API Url</span>
														</div>
														<div class="col-md-8">
															<input class="form-control" id="basicInput" placeholder="" type="text" name="api_url" require required data-validation-required-message="">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>Icon</span>
														</div>
														<div class="col-md-8">
															<input class="form-control" id="basicInput" placeholder="" type="text" name="icon">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-4">
															<span>Order</span>
														</div>
														<div class="col-md-8">
															<input class="form-control" id="basicInput" placeholder="" type="number" name="order" required data-validation-required-message="">
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
																<input type="radio" name='sts' value="1" required data-validation-required-message="">
																<span class="vs-radio">
																	<span class="vs-radio--border"></span>
																	<span class="vs-radio--circle"></span>
																</span>
																<span class="">Active</span>
															</div>
														</div>
														<div class="col-md-4">
															<div class="vs-radio-con">
																<input type="radio" name='sts' value="0" required data-validation-required-message="">
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
													<button type="submit" class="btn btn-primary  mr-1 mb-1 waves-effect waves-light">
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