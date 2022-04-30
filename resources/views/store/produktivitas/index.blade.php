@extends('layout.master')
@section('title')
Produktivitas
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
          <h4 class="card-title"> Daftar Produktivitas
            <button type="button" class="btn btn-primary btn-rounded float-right mb-3" @click="createModal()">
            <i class="fas fa-plus-circle"></i> Tambah Produktivitas</button>
          </h4>
          
          <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered no-wrap">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Tipe Alat</th>
                    <th>Parameter</th>
                    <th>Hasil</th>
                    <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <tr v-for="item, index in mainData" :key="index">
                  <td>@{{ index+1 }}</td>
                  <td>@{{ item.nama_tipe_alat}}</td>
                  <td v-html="item.parameterString"></td>
                  <td v-html="item.produktivitas"></td>
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
  <div class="modal-dialog modal-lg" id="modal">
    <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title" v-show="!editMode" id="myLargeModalLabel">Tambah Produktivitas</h4>
        <h4 class="modal-title" v-show="editMode" id="myLargeModalLabel">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="keluar">×</button>
      </div>
      <form @submit.prevent="editMode ? updateData() : storeData()" @keydown="form.onKeydown($event)" id="form">
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
                <label class="col-lg-2" for="id_jenis_alat">Jenis Alat</label>
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
            @include('store.produktivitas.form.hydraulic')
            @include('store.produktivitas.form.dump')
            @include('store.produktivitas.form.bulldozer')
            @include('store.produktivitas.form.compactor')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal" id="batal">Batal</button>
            <button v-show="!editMode" type="submit" class="btn btn-primary">Tambah</button>
            <button v-show="editMode" type="submit" class="btn btn-success">Ubah</button>
          </div>
      </form>
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

  $('#keluar').click(function(){
   app.emptyFilter()
  });

  $('#batal').click(function(){
   app.emptyFilter()
  });
  
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
          waktu_putar: '',
          kecepatan_putar: '',
          conversion_factor : '',
          bucket_fill_factor : '',
          faktor_kedalaman: '',
          faktor_efisiensi_kerja : '',
        },
        dump:{
          kapasitas_dump: '',
          bucket_fill_factor : '',
          cycle_time_excavator : '',
          jarak_angkut: '',
          loaded_speed: '',
          empty_speed: '',
          standby_dumping_time:'',
          spot_delay_time:'',
          job_efficiency: '',
        },
        bulldozer:{
          kapasitas_blade : '',
          blade_factor: '',
          jarak_dorong: '',
          fordward_speed: '',
          reverse_speed: '',
          gear_shifting :'',
          grade_factor : '',
          job_efficiency : '',
        },
        compactor:{
          lebar_pemadatan: '',
          lebar_blade: '',
          lebar_overlap: '',
          number_of_trips: '',
          kecepatan_kerja: '',
          job_efficiency: '',
          tebal_lapisan_tanah: '',
        }
      }),
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
        console.log('data',data)

        this.editMode = true;
        if(data.nama_jenis_alat === "Hydraulic Excavator"){
          let detailData = JSON.parse(data.parameter) 
          this.hydraulicMode = true
          this.form.hydraulic.bucket_fill_factor = detailData.bucket_fill_factor
          this.form.hydraulic.waktu_putar = detailData.waktu_putar
          this.form.hydraulic.kecepatan_putar = detailData.kecepatan_putar
          this.form.hydraulic.conversion_factor = detailData.conversion_factor
          this.form.hydraulic.faktor_kedalaman = detailData.faktor_kedalaman
          this.form.hydraulic.faktor_efisiensi_kerja = detailData.faktor_efisiensi_kerja
          this.form.id = data.id
          this.form.id_jenis_alat = [data.id_jenis_alat,data.nama_jenis_alat]
          this.form.id_tipe_alat = data.id_tipe_alat
        }else if(data.nama_jenis_alat === "Dump Truck"){
          this.dumpMode = true
        }else if(data.nama_jenis_alat === "Bulldozer"){
          this.bulldozerMode = true
        }else{
          this.compactorMode = true
        }
        this.form.clear();
        $('#modal').modal('show');
      },
      storeData(){
        this.form.post("{{ route('produktivitas.store') }}")
        .then(response => {
          console.log('res',response)
          $('#modal').modal('hide');
          Swal.fire(
              'Berhasil',
              'Data produktivias berhasil ditambahkan',
              'success'
          )
          this.refreshData()
        })
        .catch(e => {
            e.response.status != 422 ? console.log(e) : '';
        })
      },
      updateData(){
        url = "{{ route('produktivitas.update', ':id') }}".replace(':id', this.form.id)
        this.form.put(url)
        .then(response => {
          $('#modal').modal('hide');
          Swal.fire(
            'Berhasil',
            'Data produktivitas berhasil diubah',
            'success'
          )
          this.refreshData()
        })
        .catch(e => {
            e.response.status != 422 ? console.log(e) : '';
        })
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
            url = "{{ route('produktivitas.destroy', ':id') }}".replace(':id', id)
            this.form.delete(url)
            .then(response => {
              console.log('res',response)
              Swal.fire(
                'Terhapus',
                'Data produktivitas telah dihapus',
                'success'
              )
              this.refreshData()
            })
            .catch(e => {
                e.response.status != 422 ? console.log(e) : '';
            })
          }
      })
      },
      refreshData() {
        this.mainData = [];
        axios.get("{{ route('produktivitas.list') }}")
        .then(response => {
          console.log('main data atas',this.mainData)
          if (response.data.length !== 0){
            let array = []
            for(let data of response.data){
              let params = JSON.parse(data.parameter)
              let parameter = ""
              parameter += "Standart cycle time :" + params.standart_cycle_time  + " menit"
              parameter +=  "<br/> " +"Cms :" + params.cms
              parameter +=  "<br/> " +"Kapasitas Bucket :" + params.kapasitas_bucket  + " m<sup>3</sup>"
              parameter +=  "<br/> " +"Bucket Fill Factor :" + params.bucket_fill_factor
              parameter +=  "<br/> " +"Faktor Kedalaman :" + params.faktor_kedalaman
              parameter +=  "<br/> " +"Faktor Efisiensi Kerja :" + params.faktor_efisiensi_kerja
              data.parameterString = parameter
              data.produktivitas = data.hasil + " m<sup>3</sup>/jam"
              array.push(data)          
            }
            this.mainData = array
          }else{
            this.mainData = [];
          }
          
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
        url = "{{ route('jenisAlat.filter', ':id') }}".replace(':id', this.form.id_proyek)
        this.form.get(url)
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
        console.log('tes',id)
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
        this.allJenisAlat=[];
        this.allTipeAlat=[];
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
