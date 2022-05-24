<div class="content-header row">
 	<div class="content-header-left col-md-9 col-12 mb-2">
 		<div class="row breadcrumbs-top">
 			<div class="col-12">
 				<h2 class="content-header-title float-left mb-0">User</h2>
 				<div class="breadcrumb-wrapper col-12">
 					<ol class="breadcrumb">
 						<li class="breadcrumb-item"><a href="<?php print base_url()?>home">Home</a>
 						</li>
 						<li class="breadcrumb-item"><a href="<?php print base_url()?>acl/user">User</a>
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
				 <?php print $this->session->flashdata('pesan')?>
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
 								<h4 class="card-title"> <i class="fa fa-users" aria-hidden="true"></i> Daftar User</h4>
 							</div>
 							<div class="card-content">
 								<div class="card-body card-dashboard">
 									<p class="card-text"> </p>
 									<div class="table-responsive">
 										<table class="table table-striped table-bordered complex-headers dataTable">
 											<thead>
 												<tr>
 													<th style="width :5%; text-align: center">No</th>
 													<th style="width :20%; text-align: center">Username</th>
 													<th style="width :30%; text-align: center">Nama </th>
 													<th style="width :15%; text-align: center">Level</th>
 													<th style="width :15%; text-align: center">Balai</th>
 													<th style="width :20%"></th>
 												</tr>
 											</thead>
 											<tbody>
 												<?php
$no = 1;
foreach ($user_list as $vs) {
    ?>
 												<tr>
 													<td><?php print $no;?></td>
 													<td><?php print $vs->username?></td>
 													<td><?php print $vs->nm_lengkap;?></td>
 													<td><?php print $vs->level_name;?></td>
 													<td><?php print $vs->nama_balai;?></td>
 													<td style="text-align: center">
 														<a href="<?php print base_url() . 'acl/user/edit_data/' . $vs->user_key;?>"> <button type="button"
 																class="btn  btn-info btn-sm ">
 																<i class="fa fa-pencil" aria-hidden="true"></i> Edit
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
 						<div class="card"  >
 							<div class="card-header">
 								<h4 class="card-title"> <i class="fa fa-plus" aria-hidden="true"></i> Add User</h4>
 							</div>
 							<div class="card-content">
 								<div class="card-body">
 									<form class="form form-horizontal" method="POST" action="<?php print base_url()?>acl/user/update_user" novalidate>
 										<div class="form-body">
 											<div class="row">
											 <div class="col-12">
 													<div class="form-group row">
 														<div class="col-md-4">
 															<span>Username</span>
 														</div>
 														<div class="col-md-8">
                                                             <input type="hidden" name='user_key' value="<?php print $user->user_key;?>">
                                                             <input type="hidden" name='username' value="<?php print $user->username;?>">
 															<input class="form-control" id="basicInput" placeholder="" value="<?php print $user->username;?>"
 																type="text" disabled name="username"    required data-validation-required-message="">
 														</div>
 													</div>
 												</div>
 												<div class="col-12">
 													<div class="form-group row">
 														<div class="col-md-4">
 															<span>Nama Lengkap</span>
 														</div>
 														<div class="col-md-8">
 															<input class="form-control" id="basicInput" placeholder=""  value="<?php print $user->nm_lengkap;?>"
 																type="text" name="nm_lengkap"    require required data-validation-required-message="">
 														</div>
 													</div>
 												</div>
 												<div class="col-12">
 													<div class="form-group row">
 														<div class="col-md-4">
 															<span>Email</span>
 														</div>
 														<div class="col-md-8">
 															<input class="form-control" id="basicInput" placeholder=""  value="<?php print $user->email;?>"
 																type="text" name="email"     required data-validation-required-message="">
 														</div>
 													</div>
 												</div>
 												<div class="col-12">
 													<div class="form-group row">
 														<div class="col-md-4">
 															<span>Password</span>
 														</div>
 														<div class="col-md-8">
 															<input type="password" id="password" class="form-control"
 																name="password" placeholder="Password" >
 														</div>
 													</div>
 												</div>
 												<div class="col-12">
 													<div class="form-group row">
 														<div class="col-md-4">
 															<span>Level</span>
 														</div>
 														<div class="col-md-8">
 															<select class="form-control select2" id="basicSelect" name ="level_key"   data-validation-required-message="" >
																<option value="-">Pilih</option>
																<?php foreach ($level as $value): ?>
																	<option value="<?php echo $value->level_key ?>" <?php echo $value->level_key == $user->level_key ? 'selected' : '' ?>><?php echo $value->level_name ?></option>
																<?php endforeach?>
 															</select>
 														</div>
 													</div>
 												</div>
 												<div class="col-12">
 													<div class="form-group row">
 														<div class="col-md-4">
 															<span>Balai</span>
 														</div>
 														<div class="col-md-8">
 															<select class="form-control select2" id="basicSelect" name ="id_balai"   data-validation-required-message="" >
																<option value="-">Pilih</option>
																<?php foreach ($balai as $value): ?>
																	<option value="<?php echo $value->id_balai ?>" <?php echo $value->id_balai == $user->id_balai ? 'selected' : '' ?>><?php echo $value->nama_balai ?></option>
																<?php endforeach?>
 															</select>
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
                                                                 <input type="radio"  name='st'  value="1"    required data-validation-required-message=""
                                                                 <?php if ($user->st == '1') {print "checked";}?>   >
 																<span class="vs-radio">
 																	<span class="vs-radio--border"></span>
 																	<span class="vs-radio--circle"></span>
 																</span>
 																<span class="">Active</span>
 															</div>
 														</div>
 														<div class="col-md-4">
 															<div class="vs-radio-con">
                                                                 <input type="radio"  name='st'	value="0"    required data-validation-required-message=""
                                                                 <?php if ($user->st == '0') {print "checked";}?>   >
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