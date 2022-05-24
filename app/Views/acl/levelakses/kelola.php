<div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h2 class="content-header-title float-left mb-0">Level Akses</h2>
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php print base_url()?>home">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?php print base_url()?>acl/levelakses">Level Akses</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="<?php print base_url()?>acl/levelakses/<?php print $level_key;?>">Kelola Level</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content-body">
  <section id="basic-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Manajemen Akses</h4>
          </div>
          <div class="card-content">
            <div class="card-body card-dashboard">
              <p class="card-text"> </p>
              <div class="table-responsive">
                <form method="POST" action="<?php print base_url() ?>acl/levelakses/kelola_simpan">
                  <input type="hidden" name="level_key" value="<?php print $level->level_key; ?>">
                  <table class="table zero-configuration   table-hover table-bordered" width='100%'>
                    <thead class="bc_tabel putih">
                      <tr>
                        <th width='5%' style="text-align: center">Akses</th>
                        <th width='20%'>Nama Menu </th>
                        <th width='50%' style="text-align: center" colspan="4"> Akses CRUD</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 0;
                      foreach ($menu as $value) {
                      $no = $no + 1;
                      ?>
                      <tr <?php
                        if ($value->status == 'menu') {
                        print 'style="background: #eab966"';
                        }
                        ?>>
                        <input type="hidden" name="status_<?php print $no ?>"
                        value="<?php print $value->status; ?>">
                        <td style="text-align: center">
                          <label class="ui-checks">
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="<?php print $value->id_menu; ?>" name="akses_<?php print $no ?>"
                              <?php if(!empty($value->menu)){ print "checked=''";}  ?> class="akses" data-akses="<?php echo $no ?>">
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>
                            </div>
                            <i></i>
                          </label>
                        </td>
                        <td>
                          <?php
                          if ($value->status == 'menu') {
                          print "<i class='fa $value->icon'></i>&nbsp;&nbsp;" . $value->nm_menu;
                          } else if ($value->status == 'sub_menu') {
                            print '&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;' . $value->nm_menu;
                          }else if ($value->status == 'sub_sub_menu') {
                            print '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>&nbsp;' . $value->nm_menu;
                          }
                          ?>
                        </td>
                        <td style="text-align: center">
                          <label class="ui-checks">
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="1" name="r_<?php print $no ?>" <?php if(!empty($value->r)){ print "checked=''";}  ?>>
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>
                              <span class="">Read</span>
                            </div>
                          </label>
                        </td>
                        <td style="text-align: center">
                          <label class="ui-checks">
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="1" name="c_<?php print $no ?>" <?php if(!empty($value->c)){ print "checked=''";}  ?>>
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>
                              <span class="">Create</span>
                            </div>
                          </label>
                        </td>
                        <td style="text-align: center">
                          <label class="ui-checks">
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="1" name="u_<?php print $no ?>" <?php if(!empty($value->u)){ print "checked=''";}  ?>>
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>
                              <span class="">Update</span>
                            </div>
                          </label>
                        </td>
                        <td style="text-align: center">
                          <label class="ui-checks">
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="1" name="d_<?php print $no ?>" <?php if(!empty($value->d)){ print "checked=''";}  ?>>
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>
                              <span class="">Delete</span>
                            </div>
                          </label>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                      <input type="hidden" class="form-control" name="jm_data"
                      value="<?php print $no; ?>">
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-5">
                      <button class="btn btn-primary btn-addon btn-sm"><i class="fa fa-save"></i>
                      Kelola Akses</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script src="<?php echo site_url() ?>asset/jquery/jquery-3.4.1.min.js?version=1"></script>
<script>
$(document).ready(function() {
$('.akses').on('click', function() {
  var akses_data = $(this).data('akses');
  if ($(this).prop("checked") == true) {
    $('input[name="r_'+akses_data+'"]').prop('checked',true);
    $('input[name="c_'+akses_data+'"]').prop('checked',true);
    $('input[name="u_'+akses_data+'"]').prop('checked',true);
    $('input[name="d_'+akses_data+'"]').prop('checked',true);
  }else if ($(this).prop("checked") == false) {
    $('input[name="r_'+akses_data+'"]').prop('checked',false);
    $('input[name="c_'+akses_data+'"]').prop('checked',false);
    $('input[name="u_'+akses_data+'"]').prop('checked',false);
    $('input[name="d_'+akses_data+'"]').prop('checked',false);
  }
});
});
</script>