<?php for($i=0 ; $i<2 ; $i++): ?>
  <div class="modal fade" id="modal_<?= $i+1 ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title w-100 text-dark" id="myModalLabel_<?= $i+1 ?>">Zdjęcie</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs" id="myTab_<?= $i+1 ?>" role="tablist">
            <li class="nav-item nav-item-modal">
              <a class="nav-link active nav-link-modal" id="home-tab_<?= $i+1 ?>" data-toggle="tab" href="#home_<?= $i+1 ?>" role="tab" aria-controls="home"
                aria-selected="true">Dodaj nowe zdjęcie: </a>
              </li>
              <li class="nav-item nav-item-modal">
                <a class="nav-link nav-link-modal" id="profile-tab_<?= $i+1 ?>" data-toggle="tab" href="#profile_<?= $i+1 ?>" role="tab" aria-controls="profile"
                  aria-selected="false">Wybierz: </a>
                </li>

              </ul>
              <div class="tab-content" id="myTabContent_<?= $i+1 ?>">
                <div class="tab-pane add-file-modal fade show active" id="home_<?= $i+1 ?>"  role="tabpanel" aria-labelledby="home-tab">
                  <label class="custom-file m-3">
                    <input type="file" id="photo_<?= $i+1 ?>" onchange="photoListener(1)" class="custom-file-input" name="photo_<?= $i+1 ?>">
                    <span class="custom-file-control custom-file-control-inverse"></span>
                  </label>
                </div>
                <div class="tab-pane fade" id="profile_<?= $i+1 ?>" role="tabpanel" aria-labelledby="profile-tab">
                 <div class="gallery_box p-4">
                  <input type="hidden" name="server_photo_<?= $i+1 ?>" id="server_photo_<?= $i+1 ?>" >
                  <div class="modal-picture<?= $i+1 ?>">
                    <?php for($j=0 ; $j<count($api_gallery) ; $j++): ?>
                      <picture>
                          <img id="gallery_photo<?= $api_gallery[$j]['id'] ?>__<?= $i+1  ?>" 
                          onclick="choicePhoto('<?= $api_gallery[$j]['photo'] ?>' , '<?= base_url()  ?>' , <?= $api_gallery[$j]['id'] ?>,<?= $i+1 ?>); " 
                          data-src="<?= base_url(). 'uploads/'. $api_gallery[$j]['photo'] ?>" class="gallery_photo p-1 lazy img-fluid" 
                          alt="<?= $api_gallery[$j]['alt'] ?>">
                        </picture>
                      <?php endfor; ?>
                    </div> 
                  </div>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Zapisz zmiany</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endfor; ?>


