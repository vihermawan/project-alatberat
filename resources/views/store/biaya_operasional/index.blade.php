@extends('layout.master')
@section('title')
Biaya Operasional
@endsection
@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <form @submit.prevent="filterData()" @keydown="form.onKeydown($event)" id="formPasien">
          <div class="row my-4">
              <div class="col md-12">
                <div class="form-row">
                  <label class="col-lg-2" for="id_proyek">Proyek</label>
                  <div class="form-group col-md-10">
                    <select v-model="form.id_proyek" id="id_proyek" onchange="selectTrigger()" placeholder="Pilih Proyek"
                        style="width: 100%" class="form-control custom-select">
                        <option disabled value="">- Pilih Proyek -</option>
                        <option v-for="item in allProyek" :value="item.id">
                            @{{item.nama }}</option>
                    </select>
                    <has-error :form="form" field="id_proyek"></has-error>
                  </div>
                </div>
                <div class="form-row">
                  <label class="col-lg-2" for="id_jenis_alat">Jenis Alat</label>
                  <div class="form-group col-md-10">
                    <select v-model="form.id_jenis_alat" id="id_jenis_alat" onchange="selectTriggerJenisAlat()" placeholder="Pilih Jenis Alat"
                        style="width: 100%" class="form-control custom-select">
                        <option disabled value="">- Pilih Jenis Alat -</option>
                        <option v-for="item in allJenisAlat" :value="item.id">
                            @{{item.nama }}</option>
                    </select>
                    <has-error :form="form" field="id_jenis_alat"></has-error>
                  </div>
                </div>
                <div class="form-row">
                  <label class="col-lg-2" for="id_tipe_alat">Tipe Alat</label>
                  <div class="form-group col-md-10">
                    <select v-model="form.id_tipe_alat" id="id_tipe_alat" onchange="selectTriggerTipeAlat()" placeholder="Pilih Tipe Alat"
                        style="width: 100%" class="form-control custom-select">
                        <option disabled value="">- Pilih Tipe Alat -</option>
                        <option v-for="item in allTipeAlat" :value="item.id">
                            @{{item.nama }}</option>
                    </select>
                    <has-error :form="form" field="id_tipe_alat"></has-error>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-reset" data-dismiss="modal" @click="resetData()">Reset</button>
              <button type="submit" class="btn btn-search">Filter</button>
          </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"> Daftar Biaya Operasional
            <button type="button" class="btn btn-primary btn-rounded float-right mb-3" @click="createModal()">
            <i class="fas fa-plus-circle"></i> Tambah Biaya Operasional</button>
          </h4>
          
          <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered no-wrap">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Tipe Alat</th>
                    <th>Interval</th>
                    <th>Koefisien</th>
                    <th>Total Biaya</th>
                    <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <tr v-for="item, index in mainData" :key="index">
                  <td>@{{ index+1 }}</td>
                  <td>@{{ item.email}}</td>
                  <td>@{{ item.email}}</td>
                  <td>@{{ item.email}}</td>
                  <td>@{{ item.email}}</td>
                  <td>
                    <a href="javascript:void(0);" @click="editModal(item)" class="text-success"
                      data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i
                      class="far fa-edit"></i></a>
                    <a href="javascript:void(0);" @click="deleteData(item.id)" class="text-danger"
                      data-toggle="tooltip" data-placement="top" data-original-title="Hapus"><i
                      class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL -->
<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-full-width modal-dialog-scrollable" id="modal" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title" v-show="!editMode" id="myLargeModalLabel">Tambah Biaya Operasional</h4>
        <h4 class="modal-title" v-show="editMode" id="myLargeModalLabel">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" @click="emptyFilter">×</button>
      </div>
      {{-- <form @submit.prevent="editMode ? updateData() : storeData()" @keydown="form.onKeydown($event)" id="form"> --}}
          <div class="modal-body mx-4">
            <div v-show="!editMode">
              <div class="form-row">
                <label class="col-lg-2" for="id_proyek">Proyek</label>
                <div class="form-group col-md-10">
                  <select v-model="form.id_proyek" id="id_proyek_modal" onchange="selectTrigger()" placeholder="Pilih Proyek"
                      style="width: 100%" class="form-control custom-select">
                      <option disabled value="">- Pilih Proyek -</option>
                      <option v-for="item in allProyek" :value="item.id">
                          @{{item.nama }}</option>
                  </select>
                  <has-error :form="form" field="id_proyek"></has-error>
                </div>
              </div>
              <div class="form-row">
                <label class="col-lg-2" for="id_jenis_alat_modal">Jenis Alat</label>
                <div class="form-group col-md-10">
                  <select v-model="form.id_jenis_alat" id="id_jenis_alat_modal" onchange="selectTriggerJenisAlat()" placeholder="Pilih Jenis Alat"
                      style="width: 100%" class="form-control custom-select">
                      <option disabled value="">- Pilih Jenis Alat -</option>
                      <option v-for="item in allJenisAlat" :value="[item.id,item.nama]">
                          @{{item.nama }}</option>
                  </select>
                  <has-error :form="form" field="id_jenis_alat"></has-error>
                </div>
              </div>
              <div class="form-row">
                <label class="col-lg-2" for="id_tipe_alat">Tipe Alat</label>
                <div class="form-group col-md-10">
                  <select v-model="form.id_tipe_alat" id="id_tipe_alat" onchange="selectTriggerTipeAlat()" placeholder="Pilih Tipe Alat"
                      style="width: 100%" class="form-control custom-select">
                      <option disabled value="">- Pilih Tipe Alat -</option>
                      <option v-for="item in allTipeAlat" :value="item.id">
                          @{{item.nama }}</option>
                  </select>
                  <has-error :form="form" field="id_tipe_alat"></has-error>
                </div>
              </div>
            </div>
            @include('store.biaya_operasional.form.hydraulic')
            @include('store.biaya_operasional.form.dump')
            @include('store.biaya_operasional.form.bulldozer')
            @include('store.biaya_operasional.form.compactor')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal" @click="emptyFilter">Batal</button>
            <button v-show="!editMode" type="submit" class="btn btn-primary" @click="storeData">Tambah</button>
            <button v-show="editMode" type="submit" class="btn btn-success">Ubah</button>
          </div>
      {{-- </form> --}}
    </div>
  </div>
</div>
@endsection

@push('script')
<script>
  function selectTrigger(isModal) {
    if($("#id_proyek").val()!==null){
      app.getJenisAlat($("#id_proyek").val())
    }else{
      app.getJenisAlat($("#id_proyek_modal").val())
    }
    app.inputSelect()
  }

  function selectTriggerJenisAlat(){
    if($("#id_jenis_alat").val()!==null){
      app.getTipeAlat($("#id_jenis_alat").val())
    }else{
      let jenisAlat = $("#id_jenis_alat_modal").val()
      let splitStringJenisAlat = jenisAlat.split(",")
      app.getTipeAlat(splitStringJenisAlat[0])
      app.showFieldModal(splitStringJenisAlat[1])
    }
    app.inputSelectJenisAlat()
  }

  function selectTriggerTipeAlat(){
    app.inputSelectTipeAlat()
  }

  var app = new Vue({
    el: '#app',
    data: {
      mainData: [],
      form: new Form({
        id: '',
        id_proyek:'',
        id_jenis_alat: '',
        id_tipe_alat: '',
        hydraulic: {
          bahan_bakar: {
            harga_satuan: '',
            interval : '',
            daya_mesin:'',
          },
          oil_engine:{
             harga_satuan : '',
             liter_pemakaian :'',
             faktor_efisien : '',
             interval: '',
          },
          oil_hidrolik : {
            harga_satuan: '',
            liter_pemakaian :'',
            interval : '',
          },
          engine_oil_filter: {
            koefisien : '',
            interval : '',
          },
          fuel_filter_element: {
            harga_bulanan:'',
            interval : '',
          },
          final_drive_oil : {
            interval : '',
            koefisien : '',
          },
          air_cleaner_inner: {
            koefisien: '',
            interval: '',
          },
          air_cleaner_outer: {
            koefisien :'',
            interval: '',
          },
          grase : {
            harga_bulanan: '',
            interval: '',
          },
          gaji_operator: {
            harga_bulanan: '',
            interval : '',
          },
        },
        dump:{
          bahan_bakar: {
            harga_satuan: '',
            interval : '',
            daya_mesin:'',
          },
          oil_engine:{
             harga_satuan : '',
             liter_pemakaian :'',
             persen_pemakaian : '',
             interval: '',
          },
          oil_hidrolik : {
            harga_satuan: '',
            liter_pemakaian :'',
            interval : '',
          },
          oil_transmisi:{
            koefisien: '',
            interval: '',
          },
          oil_power_dteering:{
            koefisien: '',
            interval : '',
          },
          engine_oil_filter: {
            koefisien : '',
            interval : '',
          },
          pre_fuel_filter: {
            koefisien : '',
            interval: '',
          },
          fuel_filter_element : {
            harga_bulanan : '',
            interval : '',
          },
          air_cleaner_inner: {
            koefisien: '',
            interval: '',
          },
          air_cleaner_outer: {
            koefisien :'',
            interval: '',
          },
          grase : {
            harga_bulanan: '',
            interval: '',
          },
          tire_cost:{
            koefisien: '',
            interval: '',
          },
          gaji_operator: {
            harga_bulanan: '',
            interval : '',
          },
        },
        bulldozer:{
          bahan_bakar: {
            harga_satuan: '',
            interval : '',
            daya_mesin:'',
          },
          oil_engine:{
             harga_satuan : '',
             liter_pemakaian :'',
             persen_pemakaian : '',
             interval: '',
          },
          oil_hidrolik : {
            harga_satuan: '',
            liter_pemakaian :'',
            interval : '',
          },
          engine_oil_filter: {
            harga_bulanan : '',
            interval : '',
          },
          pre_fuel_filter: {
            koefisien : '',
            interval: '',
          },
          fuel_filter_element : {
            harga_bulanan : '',
            interval : '',
          },
          air_cleaner_inner: {
            koefisien: '',
            interval: '',
          },
          air_cleaner_outer: {
            koefisien :'',
            interval: '',
          },
          grase : {
            harga_bulanan: '',
            interval: '',
          },
          gaji_operator: {
            harga_bulanan: '',
            interval : '',
          },
        },
        compactor:{
          bahan_bakar: {
            harga_satuan: '',
            interval : '',
            daya_mesin:'',
          },
          oil_engine:{
             harga_satuan : '',
             liter_pemakaian :'',
             persen_pemakaian : '',
             interval: '',
          },
          oil_hidrolik : {
            harga_satuan: '',
            liter_pemakaian :'',
            interval : '',
          },
          engine_oil_filter: {
            harga_bulanan : '',
            interval : '',
          },
          fuel_filter_element : {
            harga_bulanan : '',
            interval : '',
          },
          fuel_water_separator: {
            koefisien: '',
            interval : '',
          },
          fuel_filter:{
            koefisien: '',
            interval: '',
          },
          hydraulic_filter:{
            koefisien:'',
            interval : '',
          },
          air_cleaner_inner: {
            koefisien: '',
            interval: '',
          },
          air_cleaner_outer: {
            koefisien :'',
            interval: '',
          },
          grase : {
            harga_bulanan: '',
            interval: '',
          },
          gaji_operator: {
            harga_bulanan: '',
            interval : '',
          },
        }
      }),
      editMode: false,
      allProyek : @json($allProyek),
      allJenisAlat: [],
      allTipeAlat : [],
      editMode: false,
      hydraulicMode:false,
      dumpMode:false,
      bulldozerMode:false,
      compactorMode:false,
    },
    mounted() {
      this.refreshData()
    },
    methods: {
      createModal(){
        this.editMode = false;
        this.allJenisAlat=[];
        this.allTipeAlat=[];
        this.form.reset();
        this.form.clear();
        $('#modal').modal('show');
      },
      editModal(data){
        this.editMode = true;
        this.form.fill(data)
        this.form.clear();
        $('#modal').modal('show');
      },
      storeData(){
        this.form.post("{{ route('biayaOperasional.store') }}")
        .then(response => {
          $('#modal').modal('hide');
          Swal.fire(
              'Berhasil',
              'Data biaya operasional berhasil ditambahkan',
              'success'
          )

          this.emptyFilter()
          this.refreshData()
        })
        .catch(e => {
            e.response.status != 422 ? console.log(e) : '';
        })
      },
      updateData(){

      },
      deleteData(id){
        Swal.fire({
          title: 'Apakah anda yakin?',
          text: "Anda tidak dapat mengembalikan ini",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Ya, Hapus',
          cancelButtonText: 'Batal'
      }).then((result) => {
          if (result.value) {
            console.log('delete')
          }
      })
      },
      refreshData() {
        axios.get("{{ route('biayaOperasional.list') }}")
        .then(response => {
          $('#table').DataTable().destroy()
          this.mainData = response.data
          this.$nextTick(function () {
              $('#table').DataTable();
          })
        })
        .catch(e => {
          e.response.status != 422 ? console.log(e) : '';
        })
      },
      inputSelect() {
        this.form.id_proyek =  $("#id_proyek").val()
      },
      inputSelectJenisAlat(){
        this.form.id_jenis_alat =  $("#id_jenis_alat").val()
      },
      inputSelectTipeAlat(){
        this.form.id_tipe_alat =  $("#id_tipe_alat").val()
      },
      filterData(){

      },
      resetData(){
        this.form.id_proyek= '';
        this.form.id_jenis_alat= '';
        this.form.id_tipe_alat= '';
        this.refreshData()
      },
      getJenisAlat(id){
        url = "{{ route('jenisAlat.filter', ':id') }}".replace(':id', id)
        axios.get(url)
        .then(response => {
          this.allJenisAlat = response.data
        })
        .catch(e => {
          e.response.status != 422 ? console.log(e) : '';
        })
      },
      getTipeAlat(id){
        url = "{{ route('tipeAlat.filter', ':id') }}".replace(':id', id)
        axios.get(url)
        .then(response => {
          this.allTipeAlat = response.data
        })
        .catch(e => {
          e.response.status != 422 ? console.log(e) : '';
        })
      },
      emptyFilter(){
        console.log('clear')
        this.form.clear();
        this.form.reset();
        this.hydraulicMode = false;
        this.dumpMode = false;
        this.bulldozerMode = false;
        this.compactorMode = false;
      },
      showFieldModal(name){
        if(name === "Hydraulic Excavator"){
          this.hydraulicMode = true
        }else if(name === "Dump Truck"){
          this.dumpMode = true
        }else if(name === "Bulldozer"){
          this.bulldozerMode = true
        }else{
          this.compactorMode = true
        }
      },
    },
  })
</script>
@endpush
