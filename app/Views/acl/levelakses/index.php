 <div class="content-header row">
 	<div class="content-header-left col-md-9 col-12 mb-2">
 		<div class="row breadcrumbs-top">
 			<div class="col-12">
 				<h2 class="content-header-title float-left mb-0">Level Akses</h2>
 				<div class="breadcrumb-wrapper col-12">
 					<ol class="breadcrumb">
 						<li class="breadcrumb-item"><a href="<?php print base_url()?>home">Home</a>
 						</li>
 						<li class="breadcrumb-item"><a href="<?php print base_url()?>acl/levelakses">Level Akses</a>
 						</li>
 					</ol>
 				</div>
 			</div>
 		</div>
 	</div>

 </div>
 <div class="content-body">
 	<!-- Basic Horizontal form layout section start -->
 	<?php
    if (!empty($this->session->flashdata('pesan'))) {?>
 	<p class="px-2">
 		<div class="alert alert-success" role="alert">
 			<?php print $this->session->flashdata('pesan'); ?>
 		</div>
 	</p>
 	<?php } ?>
 	<section id="basic-datatable">
 		<div class="row">
 			<div class="col-12">
 				<div class="card">
 					<div class="card-header">
 						<h4 class="card-title">Daftar Level</h4>
 					</div>
 					<div class="card-content">
 						<div class="card-body card-dashboard">
 							<p class="card-text"></p>
 							<div class="table-responsive">
 								<table class="table zero-configuration">
 									<thead>
 										<tr>
 											<th style="width: 5%">No</th>
 											<th style="width: 20%">Nama Level</th>
 											<th style="width: 30%">Desc</th>
 											<th style="width: 10%; text-align: center">Status</th>
 											<th style="width: 20%"></th>
 										</tr>
 									</thead>
 									<tbody>
 										<?php 
                                                         $no = 1;
                                                         foreach ($level as $vs) {
                                                            ?>
 										<tr>
 											<td><?php print $no; ?></td>
 											<td><?php print $vs->level_name; ?></td>
 											<td><?php print $vs->desc; ?></td>
 											<td style="text-align: center">
 												<?php 
                                                                if($vs->st =='1'){?>
 												<button class="btn btn-info btn-sm"><i class="fa fa-check"
 														aria-hidden="true"></i> Aktif</button>

 												<?php }else{?>
 												<button class="btn btn-warning btn-sm"><i class="fa fa-warning"
 														aria-hidden="true"></i>Non Aktif</button>

 												<?php 
                                                                }
                                                                ?>
 											</td>
 											<td style="text-align: center">
 												<a
 													href="<?php print base_url()?>acl/levelakses/kelola/<?php print $vs->level_key;?>">
 													<button class="btn btn-info btn-sm">
 														<i class="fa fa-subway" aria-hidden="true"></i> Leve Akses
 													</button>
 												</a>

 											</td>
 										</tr>
 										<?php
                                                            $no++;
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