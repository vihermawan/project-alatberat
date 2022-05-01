<div v-show="dumpMode">
  <div class="form-row">
    <label class="col-md-2" for="kapasitas_dump"> Kapasitas Dump </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.kapasitas_dump" id="kapasitas_dump" type="number" step="0.01" placeholder="Masukkan kapasitas dump"
              class="form-control" :class="{ 'is-invalid': form.errors.has('kapasitas_dump') }">
          <has-error :form="form" field="kapasitas_dump"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">m<sup> 3</sup></small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="bucket_fill_factor"> Bucket fill factor </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.bucket_fill_factor" id="bucket_fill_factor" type="number" step="0.01" placeholder="Masukkan bucket fill factor"
              class="form-control" :class="{ 'is-invalid': form.errors.has('bucket_fill_factor') }">
          <has-error :form="form" field="bucket_fill_factor"></has-error>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="cycle_time_excavator"> Cycle Time Excavator </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.cycle_time_excavator" id="cycle_time_excavator" type="number" step="0.0001" placeholder="Masukkan cycle time excavator"
              class="form-control" :class="{ 'is-invalid': form.errors.has('cycle_time_excavator') }">
          <has-error :form="form" field="cycle_time_excavator"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">menit</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="jarak_angkut"> Jarak Angkut </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.jarak_angkut" id="jarak_angkut" type="number" step="0.01" placeholder="Masukkan jarak angkut"
              class="form-control" :class="{ 'is-invalid': form.errors.has('jarak_angkut') }">
          <has-error :form="form" field="jarak_angkut"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">meter</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="loaded_speed"> Loaded Speed </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.loaded_speed" id="loaded_speed" type="number" step="0.01" placeholder="Masukkan loaded speed"
              class="form-control" :class="{ 'is-invalid': form.errors.has('loaded_speed') }">
          <has-error :form="form" field="loaded_speed"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">m/menit</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="empty_speed"> Empty Speed </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.empty_speed" id="empty_speed" type="number" step="0.01" placeholder="Masukkan empty speed"
              class="form-control" :class="{ 'is-invalid': form.errors.has('empty_speed') }">
          <has-error :form="form" field="empty_speed"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">m/menit</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="standby_dumping_time"> Standby and dumping time </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.standby_dumping_time" id="standby_dumping_time" type="number" step="0.01" placeholder="Masukkan standby dumping time"
              class="form-control" :class="{ 'is-invalid': form.errors.has('standby_dumping_time') }">
          <has-error :form="form" field="standby_dumping_time"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">menit</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="spot_delay_time"> Spot and delay time</label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.spot_delay_time" id="spot_delay_time" type="number" step="0.01" placeholder="Masukkan spot delay time"
              class="form-control" :class="{ 'is-invalid': form.errors.has('spot_delay_time') }">
          <has-error :form="form" field="spot_delay_time"></has-error>
        </div>
        <div class="col-md-2 block-tag">
            <small class="badge badge-default badge-success text-white">menit</small>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="job_efficiency"> Job Efficiency</label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-10">
          <input v-model="form.dump.job_efficiency" id="job_efficiency" type="number" step="0.01" placeholder="Masukkan job efficiency"
              class="form-control" :class="{ 'is-invalid': form.errors.has('job_efficiency') }">
          <has-error :form="form" field="job_efficiency"></has-error>
        </div>
      </div>
    </div>
  </div>
</div>