<div v-show="compactorMode">
  <div class="form-row">
    <label class="col-md-2" for="lebar_pemadatan"> Lebar pemadatan </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.compactor.lebar_pemadatan" id="lebar_pemadatan" type="number" step="0.01" placeholder="Masukkan lebar pemadatan"
              class="form-control" :class="{ 'is-invalid': form.errors.has('lebar_pemadatan') }">
          <has-error :form="form" field="lebar_pemadatan"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">meter</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="lebar_blade">Lebar blade</label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.compactor.lebar_blade" id="lebar_blade" type="number" step="0.01" placeholder="Masukkan lebar blade"
              class="form-control" :class="{ 'is-invalid': form.errors.has('lebar_blade') }">
          <has-error :form="form" field="lebar_blade"></has-error>
        </div>
        <div class="col-md-2 block-tag">
          <small class="badge badge-default badge-success text-white">mm</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="lebar_overlap"> Lebar overlap </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.compactor.lebar_overlap" id="lebar_overlap" type="number" step="0.01" placeholder="Masukkan lebar overlap"
              class="form-control" :class="{ 'is-invalid': form.errors.has('lebar_overlap') }">
          <has-error :form="form" field="lebar_overlap"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">meter</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="number_of_trips">Number of trips </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.compactor.number_of_trips" id="number_of_trips" type="number" step="0.01" placeholder="Masukkan number of trips"
              class="form-control" :class="{ 'is-invalid': form.errors.has('number_of_trips') }">
          <has-error :form="form" field="number_of_trips"></has-error>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="kecepatan_kerja"> Kecepatan kerja </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.compactor.kecepatan_kerja" id="kecepatan_kerja" type="number" step="0.01" placeholder="Masukkan kecepatan kerja"
              class="form-control" :class="{ 'is-invalid': form.errors.has('kecepatan_kerja') }">
          <has-error :form="form" field="kecepatan_kerja"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">m/jam</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="job_efficiency"> Job Efficiency</label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.compactor.job_efficiency" id="job_efficiency" type="number" step="0.01" placeholder="Masukkan job efficiency"
              class="form-control" :class="{ 'is-invalid': form.errors.has('job_efficiency') }">
          <has-error :form="form" field="job_efficiency"></has-error>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="tebal_lapisan_tanah"> Tebal lapisan tanah </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.compactor.tebal_lapisan_tanah" id="tebal_lapisan_tanah" type="number" step="0.01" placeholder="Masukkan tebal lapisan tanah"
              class="form-control" :class="{ 'is-invalid': form.errors.has('tebal_lapisan_tanah') }">
          <has-error :form="form" field="tebal_lapisan_tanah"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">meter</small>
        </div>
      </div>
    </div>
  </div>
</div>