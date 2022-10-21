<div class="modal fade" id="editPengajar" tabindex="-1" role="dialog" aria-labelledby="editPengajarLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPengajarLabel">Edit Pengajar</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="dataPengajar" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <input class="form-control" id="id_pengajar" type="hidden" name="id_pengajar">
            <div class="row g-2">
              <div class="col-md-12">
                <label class="form-label">Nama Pengajar</label>
                <input class="form-control" id="nm_pengajar" type="text" name="nm_pengajar">
                @error('nm_pengajar')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
            <div class="row g-2">
              <div class="col-md-12">
                <label class="form-label">Waktu Mulai</label>
                <input class="form-control" id="wkt_mulai" type="text" name="wkt_mulai" required>
                @error('wkt_mulai')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
            <div class="row g-2">
              <div class="col-md-12">
                <label class="form-label">Waktu Akhir</label>
                <input class="form-control" id="wkt_akhir" type="text" name="wkt_akhir" required>
                @error('wkt_akhir')
                  <div class="valid-feedback">{{ $message }}</div>
                @enderror
              </div>
            <div class="col">
              <div class="form-group m-t-15 m-checkbox-inline mb-0">
                <label class="form-label">Status</label>
                <label class="d-block">
                  <input class="radio_animated" id="stts_Pengajar" type="radio" value="Active"
                    name="stts_pengajar">Active
                </label>
                <label class="d-block">
                  <input class="radio_animated" id="stts_pengajar" type="radio" value="Non Active"
                    name="stts_pengajar">Non Active
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" id="update" type="submit">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
