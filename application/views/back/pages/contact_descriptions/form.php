    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
        <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md">
                    <div class="row"> <!-- set -->
                        <div class="col-md pr-0">
                            <div class="form-group bd-b-0-force">
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value="<?php echo @$value->title; ?>" required>
                            </div>
                        </div><!-- col-4 -->
                        
                    </div> <!-- set -->
                    <div class="row">
                        <div class="col-md pr-0">
                            <div class="form-group bd-b-0-force ">
                                <label class="form-control-label">Podtytuł:</label>
                                <textarea class="summernote" name="subtitle" id="subtitle" ><?php echo @$value->subtitle; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div>
                    <div class="row"> <!-- set -->
                        <div class="col-md-6 pr-0">
                            <div class="form-group bd-b-0-force bd-r-0-force">
                                <label class="form-control-label">Tytuł formularza: </label>
                                <input class="form-control" type="text" name="title_form" value="<?php echo @$value->title_form; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-b-0-force">
                                <label class="form-control-label">Napis na przycisku:</label>
                                <input class="form-control" type="text" name="button_name" value="<?php echo @$value->button_name; ?>">
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row">
                        <div class="col-md-3 pr-0">
                            <div class="form-group bd-r-0-force">
                                <label class="form-control-label">Imię: </label>
                                <input class="form-control" type="text" name="name" value="<?php echo @$value->name; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-3 px-0">
                            <div class="form-group bd-r-0-force">
                                <label class="form-control-label">Numer telefonu: </label>
                                <input class="form-control" type="text" name="phone" value="<?php echo @$value->phone; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-3 px-0">
                            <div class="form-group bd-r-0-force">
                                <label class="form-control-label">Adres e-mail: </label>
                                <input class="form-control" type="text" name="email" value="<?php echo @$value->email; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-3 px-0">
                            <div class="form-group">
                                <label class="form-control-label">Treść wiadomości: </label>
                                <input class="form-control" type="text" name="message" value="<?php echo @$value->message; ?>" >
                            </div>
                        </div><!-- col-4 -->
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-t-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                
            </div><!-- row -->
          </form><!-- form-layout -->