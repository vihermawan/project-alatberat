<div v-show="dumpMode">
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Bahan Bakar </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.bahan_bakar.harga_satuan" id="harga_satuan"
                  :class="{ 'is-invalid': form.errors.has('harga_satuan') }"
                  placeholder="Masukkan harga satuan bahan bakar">
                  <has-error :form="form" field="harga_satuan"></has-error>
              </div>
            </div>
          </div>   
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.bahan_bakar.daya_mesin" id="daya_mesin"
                  :class="{ 'is-invalid': form.errors.has('daya_mesin') }"    
                  placeholder="Masukan daya mesin bahan bakar">
                  <has-error :form="form" field="daya_mesin"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.bahan_bakar.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval bahan bakar">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Oil Engine </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_engine.harga_satuan" id="harga_satuan"
                  :class="{ 'is-invalid': form.errors.has('harga_satuan') }"
                  placeholder="Masukkan harga satuan oil engine">
                  <has-error :form="form" field="harga_satuan"></has-error>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_engine.liter_pemakaian" id="liter_pemakaian"
                  :class="{ 'is-invalid': form.errors.has('liter_pemakaian') }"    
                  placeholder="Masukan liter pemakaian oil engine">
                  <has-error :form="form" field="liter_pemakaian"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_engine.faktor_efisien" id="faktor_efisien"
                  :class="{ 'is-invalid': form.errors.has('faktor_efisien') }"    
                  placeholder="Masukan faktor efisien oil engine">
                  <has-error :form="form" field="faktor_efisien"></has-error>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_engine.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval oil engine">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Oil Hidrolik </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_hidrolik.harga_satuan" id="harga_satuan"
                  :class="{ 'is-invalid': form.errors.has('harga_satuan') }"
                  placeholder="Masukkan harga satuan oil hidrolik">
                  <has-error :form="form" field="harga_satuan"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_hidrolik.daya_mesin" id="daya_mesin"
                  :class="{ 'is-invalid': form.errors.has('daya_mesin') }"    
                  placeholder="Masukan daya mesin oil hidrolik">
                  <has-error :form="form" field="daya_mesin"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_hidrolik.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval oil hidrolik">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Oil Transmisi </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_transmisi.koefisien" id="koefisien"
                  :class="{ 'is-invalid': form.errors.has('koefisien') }"
                  placeholder="Masukkan koefisien engine oil filter">
                  <has-error :form="form" field="koefisien"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_transmisi.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval engine oil filter">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Oil Power Dteering </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_power_dteering.koefisien" id="koefisien"
                  :class="{ 'is-invalid': form.errors.has('koefisien') }"
                  placeholder="Masukkan koefisien oil power dteering">
                  <has-error :form="form" field="koefisien"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.oil_power_dteering.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval oil power dteering">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Engine Oil Filter </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.engine_oil_filter.koefisien" id="koefisien"
                  :class="{ 'is-invalid': form.errors.has('koefisien') }"
                  placeholder="Masukkan koefisien engine oil filter">
                  <has-error :form="form" field="koefisien"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.engine_oil_filter.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval engine oil filter">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Pre Fuel Filter </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.pre_fuel_filter.koefisien" id="koefisien"
                  :class="{ 'is-invalid': form.errors.has('koefisien') }"
                  placeholder="Masukkan koefisien pre fuel filter">
                  <has-error :form="form" field="koefisien"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.pre_fuel_filter.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval pre fuel filter">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Fuel Filter Element </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.fuel_filter_element.harga_bulanan" id="harga_bulanan"
                  :class="{ 'is-invalid': form.errors.has('harga_bulanan') }"
                  placeholder="Masukkan harga bulanan fuel filter element">
                  <has-error :form="form" field="harga_bulanan"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.fuel_filter_element.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval fuel filter element">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Air Cleaner Inner </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.air_cleaner_inner.koefisien" id="koefisien"
                  :class="{ 'is-invalid': form.errors.has('koefisien') }"
                  placeholder="Masukkan koefisien air cleaner inner">
                  <has-error :form="form" field="koefisien"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.air_cleaner_inner.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval air cleaner_inner">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Air Cleaner Outer </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.air_cleaner_outer.koefisien" id="koefisien"
                  :class="{ 'is-invalid': form.errors.has('koefisien') }"
                  placeholder="Masukkan koefisien air cleaner outer">
                  <has-error :form="form" field="koefisien"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.air_cleaner_outer.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval air cleaner outer">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Grase </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.grase.harga_bulanan" id="harga_bulanan"
                  :class="{ 'is-invalid': form.errors.has('harga_bulanan') }"
                  placeholder="Masukkan harga bulanan grase">
                  <has-error :form="form" field="harga_bulanan"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.grase.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval grase">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct">Tire cost </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.tire_cost.koefisien" id="koefisien"
                  :class="{ 'is-invalid': form.errors.has('koefisien') }"
                  placeholder="Masukkan koefisien tire cost">
                  <has-error :form="form" field="koefisien"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.tire_cost.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval tire cost">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="form-row">
    <label class="col-lg-2" for="sct"> Operator </label>
    <div class="form-group col-md-10">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.gaji_operator.harga_bulanan" id="harga_bulanan"
                  :class="{ 'is-invalid': form.errors.has('harga_bulanan') }"
                  placeholder="Masukkan harga bulanan gaji operator">
                  <has-error :form="form" field="harga_bulanan"></has-error>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                  <input type="number" step="0.01" class="form-control" v-model="form.dump.gaji_operator.interval" id="interval"
                  :class="{ 'is-invalid': form.errors.has('interval') }"    
                  placeholder="Masukan interval gaji operator">
                  <has-error :form="form" field="interval"></has-error>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>